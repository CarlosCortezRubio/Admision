<?php
if ( ! defined('ABSPATH')) exit;  // if direct access


add_action('job_bm_registration_form','job_bm_registration_form_field_email');
function job_bm_registration_form_field_email(){

    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : "";



    ?>
    <p>
        <label for="email"><?php echo __('Correo electrónico','job-board-manager'); ?> <br>
            <input type="text" name="email" value="<?php echo esc_attr($email);  ?>">
        </label>
    </p>
    <?php
}

add_action('job_bm_registration_form','job_bm_registration_form_field_username');
function job_bm_registration_form_field_username(){

    $username = isset($_POST['username']) ? sanitize_user($_POST['username']) : "";


    ?>
    <p>
        <label for="username"><?php echo __('Nombre de usuario','job-board-manager');  ?> <br>
            <input type="text" name="username" value="<?php echo esc_attr($username);  ?>">
        </label>
    </p>
    <?php
}

add_action('job_bm_registration_form','job_bm_registration_form_field_password');
function job_bm_registration_form_field_password(){

    $password = isset($_POST['password']) ? esc_attr($_POST['password']) : "";


    ?>
    <p>
        <label for="password"><?php echo __('Clave','job-board-manager'); ?> <br>
            <input type="password" name="password" value="<?php echo esc_attr($password); ?>">
        </label>
    </p>
    <?php
}


add_action('job_bm_registration_form','job_bm_registration_form_field_role');
function job_bm_registration_form_field_role(){

    $role = isset($_POST['role']) ? sanitize_text_field($_POST['role']) : "";


    //var_dump(get_role( 'job_manager' ));

    ?>
    <p>
        <label for="role"><?php echo __('Unirse como','job-board-manager'); ?> <br>
            <select name="role">
                <option <?php selected( $role, 'job_poster'); ?> value="job_poster"><?php echo __('Publicador de empleo', 'job-board-manager');
                ?></option>
                <option <?php selected( $role, 'job_seeker'); ?> value="job_seeker"><?php echo __('Buscar empleo', 'job-board-manager'); ?></option>

            </select>
        </label>
    </p>
    <?php
}





add_action('job_bm_registration_form','job_bm_registration_form_field_recaptcha');
function job_bm_registration_form_field_recaptcha(){

    $job_bm_registration_recaptcha		= get_option('job_bm_registration_recaptcha');
    $job_bm_reCAPTCHA_site_key		        = get_option('job_bm_reCAPTCHA_site_key');

    if($job_bm_registration_recaptcha != 'yes' || empty($job_bm_reCAPTCHA_site_key)){
        return;
    }

    ?>
    <p>
        <label for="email">
            <div class="g-recaptcha" data-sitekey="<?php echo $job_bm_reCAPTCHA_site_key; ?>"></div>
            <?php wp_enqueue_script('google-recaptcha'); ?>


        </label>
    </p>
    <?php
}






add_action('init', 'job_bm_registration_submit_data');

function job_bm_registration_submit_data($post_data){

    if(empty($_POST)) return;


    $job_bm_registration_recaptcha		    = get_option('job_bm_registration_recaptcha');


    $username = isset($_POST['username']) ? sanitize_user($_POST['username']) : "";
    $password = isset($_POST['password']) ? esc_attr($_POST['password']) : "";
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : "";
    $role = isset($_POST['role']) ? sanitize_text_field($_POST['role']) : "job_poster";


    //$error = new WP_Error();
    $error = job_bm_register_errors();




    if(empty($_POST['username'])){
        $error->add( 'username', __( 'ERROR: el nombre de usuario no puede estar vacío.', 'job-board-manager' ) );
    }

    if ( strlen( $username ) < 4 ) {
        $error->add('username_short', __('ERROR: la longitud del nombre de usuario debe ser mayor a 4 caracteres','job-board-manager'));
    }

    if ( username_exists( $username ) )
        $error->add('username_exist',__( 'ERROR: el nombre de usuario ya se encuentra registrado!','job-board-manager'));

    if ( !validate_username( $username ) ) {
        $error->add('username_invalid', __('ERROR: el nombre de usuario no es valido','job-board-manager'));
    }


    if(empty($_POST['password'])){
        $error->add( 'password_empty', __( 'ERROR: La clave no puede estar vacía.', 'job-board-manager' ) );
    }

    if ( strlen( $password ) < 5 ) {
        $error->add('password_short', __('ERROR: la longitud de la clave debe ser mayor a 5 caracteres','job-board-manager'));
    }



    if(empty($_POST['email'])){
        $error->add( 'email', __( 'ERROR: el correo electrónico no puede estar vacío.', 'job-board-manager' ) );
    }

    if ( !is_email( $email ) ) {
        $error->add('email_invalid', __('ERROR: el correo electrónico no es valido','job-board-manager'));
    }

    if ( email_exists( $email ) ) {
        $error->add('email_exist', __('ERROR: el correo electrónico ya se encuentra registrado','job-board-manager'));
    }


    if(empty($_POST['g-recaptcha-response']) && $job_bm_registration_recaptcha =='yes'){

        $error->add( 'g-recaptcha-response', __( 'ERROR: test de reCaptcha falló.', 'job-board-manager' ) );
    }



    if(! isset( $_POST['job_bm_registration_nonce'] ) || ! wp_verify_nonce( $_POST['job_bm_registration_nonce'], 'job_bm_registration_nonce' ) ){

        $error->add( '_wpnonce', __( 'ERROR: test de seguridad falló.', 'job-board-manager' ) );
    }



    $errors = apply_filters( 'job_bm_registration_errors', $error, $_POST );


    if ( !$error->has_errors() ) {




        $userdata = array(
            'user_login'	=> 	$username,
            'user_email' 	=> 	$email,
            'user_pass' 	=> 	$password,
            'role' 	=> 	$role,
        );

        $user_id = wp_insert_user( $userdata );

        if(! is_wp_error( $user_id )){

            do_action('job_bm_registration_completed', $user_id);

        }

    }

}



add_action('job_bm_registration_submit','job_bm_registration_submit_errors');
function job_bm_registration_submit_errors($post_data){

    job_bm_show_register_errors();

}



add_action('job_bm_registration_submit','job_bm_registration_completed_thanku');
function job_bm_registration_completed_thanku($post_data){


    $error = job_bm_register_errors();

    if(empty($error->errors)):
        ?>
        <div class="user-created success">
            <?php echo apply_filters('job_bm_registration_thank_you', _e('Thanks for creating account.', 'job-board-manager')); ?>
        </div>
        <?php
    endif;


}












add_action('job_bm_registration_completed', 'job_bm_registration_completed_auto_login', 80);

function job_bm_registration_completed_auto_login($user_id){

    $job_bm_auto_login_after_signup 	= get_option('job_bm_auto_login_after_signup','yes');

    if($job_bm_auto_login_after_signup =='yes'){
        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id);

    }



}

add_action('job_bm_registration_completed', 'job_bm_registration_completed_redirect', 99);

function job_bm_registration_completed_redirect($user){

    $job_bm_redirect_after_signup 	= get_option('job_bm_redirect_after_signup');
    $redirect_page_url 					= get_permalink($job_bm_redirect_after_signup);


    if(!empty($job_bm_redirect_after_signup)):

        wp_redirect($redirect_page_url); exit;

    endif;


}








function job_bm_register_errors(){
    static $wp_error;
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}

function job_bm_show_register_errors() {
    if($codes = job_bm_register_errors()->get_error_codes()) {


        ?>
        <div class="errors">
            <?php

            if(!empty($codes))
                foreach ($codes as $code){
                    $message = job_bm_register_errors()->get_error_message($code);
                    ?>
                    <div class="job-bm-error"><?php echo $message; ?></div>
                    <?php
                }
            ?>
        </div>
        <?php


    }
}