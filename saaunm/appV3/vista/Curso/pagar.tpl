<div class='pagina'>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="Ui57oY48LNJSG71ISTSTVqMjYTZS0lRiochoyyPV">

      <title>Conservatorio Nacional de Música - Pagos</title>

      <!-- Fonts -->
      <link rel="stylesheet" href="{$PUB_URLSIST}pago/fontawesome-all.min.css">
      <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="{$PUB_URLSIST}pago/app.css">
      <link rel="stylesheet" type="text/css" href="{$PUB_URLSIST}pago/toastr.min.css">

{literal}      
      <style>
         body::after {
            content: "";
            background-image: url("{$PUB_URLSIST}pago/background.png");
            opacity:0.1;
            position:fixed;
            top:0;
            bottom:0;
            right:0;
            left:0;
            z-index:-1;
         }
         /*.nav-item:hover > .nav-link, 
         .nav-item > .nav-link:focus {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 0.25rem;
         }
         .nav-item > .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 0.25rem;
         }*/
      </style>
{/literal}
      <!-- Icon -->
      <link rel="shortcut icon" href="{$PUB_URLSIST}pago/favicon.ico">
      <link rel="apple-touch-icon" href="{$PUB_URLSIST}pago/apple-touch-icon.png">
   </head>
<body>
   <div id="app" class="d-flex flex-column justify-content-between">
      <header>
                  
      </header>

      <main class="py-md-4">
        
         <div class="content-header">
            <div class="container-fluid">
               <div class="clearfix">
                  <div class="container">
                     <div class="float-left">
                           <h3><i class="fa fa-shopping-cart pr-2"></i>Información para el pago</h3>
                     </div>
                     <div class="float-right">
                           <form id="pay-form" action="{$PUB_URLSIST}admision/cartSignOut" method="POST">
      <input type="hidden" name="_token" value="Ui57oY48LNJSG71ISTSTVqMjYTZS0lRiochoyyPV">      <button type="button" class="btn btn-primary" id="btnPagar" disabled onclick="event.preventDefault();
         document.getElementById('pay-form').submit();" data-toggle="tooltip" title="Pagar S/ 800.00">
         <i class="fa fa-coins"></i>
         <span class="d-none d-sm-inline-block pl-1">Pagar S/ 800.00</span>
      </button>
   </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <section class="content">
            <div class="container-fluid">
               <!-- Contenido -->
               <div class="container">
   <div class="card card-primary card-outline elevation-2">
      <div class="card-body">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="table-responsive" id="mydata">
                  <table class="table table-sm table-bordered table-hover">
                     <thead>
                        <tr class="bg-light">
                           <th>Nº</th>
                           <th>Concepto de pago</th>
                           <th>Cantidad</th>
                                 <!--
                           <th>Costo S/</th>
                           <th>Importe total S/</th>
                                 -->
                        </tr>
                     </thead>
                     <tbody>
                             <tr>
                                 <td>1</td>
                                 <td>Orquesta 7</td>
                                 <td>1</td>
                                 <!--
                                 <td>100.00</td>
                                 <td>100.00</td>
                                 -->
                              </tr>
                             <tr>
                                 <td>1</td>
                                 <td>Trompeta 7</td>
                                 <td>1</td>
                                 <!--
                                 <td>600.00</td>
                                 <td>600.00</td>
                                 -->
                              </tr>
                             <tr>
                                 <td>1</td>
                                 <td>Conjunto de trompeta 7</td>
                                 <td>1</td>
                                 <!--
                                 <td>100.00</td>
                                 <td>100.00</td>
                                 -->
                              </tr>
                                                                        </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="accordion">
   <div class="card card-primary card-outline elevation-2">
      <div class="card-header">
         <a class="card-link" data-toggle="collapse" href="#collapseOne">
            <i class="fas fa-money-bill-wave"></i> Dep&oacute;sitos y transferencias
         </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
         <div class="card-body">
            <div class="row">
               <div class="col-lg-3 col-md-9">
                  <div class="custom-control custom-radio mb-2">
                        <input type="radio" class="custom-control-input" id="rbtn1" name="tipo_plat_mov" value="T">
                        <label class="custom-control-label" for="rbtn1">
                              <img src="{$PUB_URLSIST}pago/logo_pagoefectivo_horizontal.png" alt="" style="max-height:30px">
                        </label>
                     </div>
               </div>
               <div class="col-lg-8 col-md-9" style="font-size: 12px;">
                  <div class="row">
                     <div class="col" style="max-width: 30px;">
                        <i class="fas fa-check"></i>
                     </div>
                     <div class="col-11">
                        <p><b>Depósitos en efectivo vía PagoEfectivo - </b>Paga en BBVA, BCP, Interbank, Scotiabank, BanBif, Western Union, Tambo+, Kasnet, Full
                        Carga, Red Digital, Money Gram, Caja Arequipa, Disashop, en cualquier agente o agencia autorizada a nivel nacional a la cuenta de PagoEfectivo
                        <a href="#" data-toggle="modal" data-target="#modal-info" target="_blank">¿C&oacute;mo funciona?</a></p>
                     </div>
                  </div>
                  <div class="row" style="padding-top:5px">
                     <div class="col" style="max-width: 30px;">
                        <i class="fas fa-check"></i>
                     </div>
                     <div class="col-11">
                        <p><b>Transferencias bancarias vía PagoEfectivo - </b>Paga en BBVA, BCP, Interbank, Scotiabank, BanBif, Caja Arequipa, a través de la
                        banca por internet o banca móvil en la opción pago de servicios <a href="#" data-toggle="modal" data-target="#modal-info" target="_blank">¿C&oacute;mo funciona?</a></p>
                     </div>
                  </div>
                  <div class="row" style="padding-top:5px">
                     <div class="col" style="max-width: 30px;">
                        
                     </div>
                     <div class="col-11">
                        <img class="img-fluid" src="{$PUB_URLSIST}pago/logo_pagoefectivo_centros_pago.png" alt="" style="max-height:100px">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div></div>
<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-info">
   <div class="modal-dialog" style="max-width: 600px;">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
                           <div class="container justify-content-center align-items-center">
                  <div class="embed-responsive embed-responsive-1by1"> 
                     <!-- <iframe id="enlaceExterno" class="embed-responsive-item" src="https://cip.pagoefectivo.pe/CNT/QueEsPagoEfectivo.aspx" allowfullscreen></iframe> -->
                  </div>
               </div>
                     </div>
      </div>
   </div>
</div>
            </div><!-- /.container-fluid -->
         </section>

               </main>

      <footer class="text-center mt-2">
         <div class="container">
            <p>
               <strong>Copyright &copy; 2021 - <a href="http://www.unm.edu.pe/" target="_blank">Conservatorio Nacional de Música</a>.</strong> Todos los derechos reservados.
            </p>
            <br>
         </div>
      </footer>
   </div>

   <!-- Scripts -->

   <!-- Funciones generales -->
   {literal}
   <script type="text/javascript">
      $(document).ready( function(){
         
         
         // Modal para agregar pagos
         $('#btnModalAddCart').click(function() {
            $('#modal-add-cart').find('input:text, select').val('');
            $('#modal-add-cart').modal({backdrop: 'static'});
         });

         // Concepto de pago
         $('#s_concepto').change(function() {
            $('#desc_conc_mov').val($('#s_concepto option:selected').data('desc_conc_pag'));
            $('#mnto_prec_mov').val($('#s_concepto option:selected').data('prec_conc_pag'));
            $('#cant_conc_mov').val('1');
            $('#mnto_subt_mov').val($('#s_concepto option:selected').data('prec_conc_pag'));
         });

         // seccion
         $('#s_seccion').change(function() {
            $('#desc_secc_mov').val($('#s_seccion option:selected').data('desc_tabl_det'));
         });

          // especialidad
          $('#s_especialidad').change(function() {
            $('#desc_espe_mov').val($('#s_especialidad option:selected').data('desc_tabl_det'));
         });

         // cantidad del Concepto de pago
         $('#cant_conc_mov').change(function() {
            var cant = $('#cant_conc_mov').val();
            var mnto = $('#mnto_prec_mov').val();
            $('#mnto_subt_mov').val(parseFloat(cant * mnto).toFixed(2));
         });
         $('#cant_conc_mov').keypress(function(event) {
            if(event.charCode >= 48 && event.charCode <= 57){
               return true;
            }
            return false;
         });
      });

      
   </script>

      <script type="text/javascript">
      // Activa botón Pagar
      function activePay() {
         if ($('#rbtn1').prop('checked')) {
            $('#btnPagar').prop('disabled', false);
         } else {
            $('#btnPagar').prop('disabled', true);
         }
      }

      $(document).ready(function(){
         // Activa botón Pagar
         $('#rbtn1').change(function(){
            activePay();
         });
      });

   </script>
   {/literal}
</body>
</html>

</div>
