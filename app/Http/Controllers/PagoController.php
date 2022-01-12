<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Tables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeCredenciales;
use App\User;
use App\Models\Solicitud;
use App\Models\Seccion_Especialidad;
use App\Http\Requests\PagoFormRequest;
use App\Models\Ficha;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;
//2021
use DB;
//2021

class PagoController extends Controller
{
   use Tables;

   public function __construct() {
      $this->middleware('guest');
   }

   public function index(Request $request)
   {
      if ($request) {
         $proceso = $this->getProceso('V');

         if (!$request->hasValidSignature()) {
            return view('inscripcion.pago.mensaje', ['proceso'=>$proceso]);

         } else {
            //VALIDAR ESTADO DE LA SOLICITUD
            $solicitud = Solicitud::where('codi_proc_adm', $proceso->codi_proc_adm)
                              ->where('tipo_docu_sol', $request->get('t'))
                              ->where('nume_docu_sol', $request->get('n'))
                              ->first();
            if ($solicitud) {
               if ( $solicitud->esta_pago_sol == 'P' ){
                  return redirect()->route('register')
                        ->with('message', 'solicitud_pagada')
                        ->with('email', $solicitud->mail_soli_sol);

               } else if ( $solicitud->esta_pago_sol == 'G') {
                  if ($solicitud->fech_expi_pag > Carbon::now()){
                     return redirect()->route('register')
                           ->with('message', 'solicitud_generada')
                           ->with('link', $solicitud->link_pago_sol);
                  } else {
                     return view('inscripcion.pago.mensaje', ['proceso'=>$proceso]);
                  }
               }
            }

            $tipodocu = $request->get('t');
            $numedocu = $request->get('n');
            $tipodocu = $this->getTables('01',$tipodocu,'S');
            //$secciones = $this->getSections('S');
			$secciones = $this->getActiveSections('S');
            $tDocumentos=$this->getTables('01','%','S');
						
            return view('inscripcion.pago.index', ['proceso'=>$proceso, 'tipodocu'=>$tipodocu, 'numedocu'=>$numedocu, 'secciones'=>$secciones]);
         }
      }
   }

   public function enviarHaciaPlataforma(PagoFormRequest $request)
   {
      $proceso = $this->getProceso('V');

      $tipodocu = $request->get('tipo_docu_sol');
      $numedocu = $request->get('nume_docu_sol');

      $solicitud = Solicitud::where('codi_proc_adm', $proceso->codi_proc_adm)
         ->where('tipo_docu_sol', $tipodocu)
         ->where('nume_docu_sol', $numedocu)
         ->first();
      //$solicitud->tipo_plat_sol = 'C'
	  
	  //2021
      //$solicitud->mnto_pago_sol = $request->get('mnto_pago_sol');	  
	  
	  if($request->get('codi_moda_mod') == 'E'){             
          $solicitud->mnto_pago_sol = $request->get('mnto_pago_exo');     
	  } else {
         $solicitud->mnto_pago_sol = $request->get('mnto_pago_ord');
         
	  }
	  	  
      $solicitud->codi_secc_sec = $request->get('codi_secc_sec');
      $solicitud->codi_espe_esp = $request->get('codi_espe_esp');
      $solicitud->fech_naci_pos = $request->get('fech_naci_pos');
      $solicitud->edad_calc_pos = $request->get('edad_calc_pos');
	  $solicitud->codi_moda_mod = $request->get('codi_moda_mod');
	  //2021
	  
      $token = str_random(50);
      $solicitud->toke_pago_sol = $token;
      $solicitud->update();

      //return view('inscripcion.pago.plataforma', ['proceso'=>$proceso, 'tipodocu'=>$tipodocu, 'numedocu'=>$numedocu]);
      // cambia aqui

      //2022
      $ficha=new Ficha;
      $maxExpe = Ficha::where('codi_proc_adm', $proceso->codi_proc_adm)->max('nume_expe_pos');
      $maxExpe = empty($maxExpe) ? 0 : $maxExpe;
      $ficha->codi_proc_adm = $proceso->codi_proc_adm;
      $ficha->codi_secc_sec = $request->get('codi_secc_sec');;
      $ficha->codi_espe_esp = $request->get('codi_espe_esp');
      $ficha->tipo_docu_per = $request->get('tipo_docu_sol');
      $ficha->nume_docu_per = $request->get('nume_docu_sol');
      $ficha->nume_expe_pos = $maxExpe + 1;
      $ficha->fech_naci_per = $request->get('fech_naci_pos');
      $ficha->edad_calc_pos = $request->get('edad_calc_pos');
      $ficha->apel_pate_per = trim(strtoupper($request->get('apel_pate_per')));
      $ficha->apel_mate_per = trim(strtoupper($request->get('apel_mate_per')));
      $ficha->nomb_pers_per = trim(strtoupper($request->get('nomb_pers_per')));
      $ficha->esta_post_pos = 'R';
      //
      return $ficha;
      $client = new Client([
         'base_uri' => config('app.url_pasarela').'/',
         'verify' => false,
      ]);

      $response = $client->request('POST', 'admision', [ 'form_params' => ['param1' => $proceso->codi_proc_adm, 'param2' => $tipodocu, 'param3' => $numedocu,'param4' => $token]]);

      $enlace = json_decode($response->getBody()->getContents());
      return Redirect::to($enlace);
   }

   public function generarCredenciales(Request $request)
   {
      $proceso = $this->getProceso('V');

      $solicitud = Solicitud::where('codi_proc_adm', $proceso->codi_proc_adm)
         ->where('tipo_docu_sol', $request->get('tipodocu'))
         ->where('nume_docu_sol', $request->get('numedocu'))
         ->first();

      $solicitud->esta_pago_sol = 'P';
      $solicitud->fech_pago_sol = Carbon::now();
      //$solicitud->codi_oper_sol = str_random(8);
      $solicitud->update();

      $email = $solicitud->mail_soli_sol;
      $contrasena = str_random(8);

      // Crea usuario
      $user = new User;
      $user->tdocumento = $request->get('tipodocu');
      $user->ndocumento = $request->get('numedocu');
      $user->email      = $email;
      $user->password   = Hash::make($contrasena);
      $user->created_at = Carbon::now();
      $user->save();

      $enlace = route('inscription');

      $this->enviarMensaje($enlace, $email, $contrasena);
      return redirect()->route('inscription');
   }

   public function enviarMensaje($enlace, $email, $contrasena)
   {
      Mail::to($email)->send(new MensajeCredenciales($enlace, $email, $contrasena));
      return 'mensaje enviado';
   }

   public function getEspecialidades(Request $request)
   {
      $especialidadesArray = [];

      
      if($request->ajax()) {
         $seccion = $request->get('seccion');
         $i = 0;

         $especialidades = Seccion_Especialidad::where('codi_secc_sec', $seccion)
                           ->orderBy('desc_espe_esp', 'asc')
                           ->get();

         foreach ($especialidades as $especialidad) {
             $especialidadesArray[$i] = ['codi_espe_esp' => $especialidad->codi_espe_esp,
                                         'desc_espe_esp' => $especialidad->desc_espe_esp,
                                         'edad_mini_esp' => $especialidad->edad_mini_esp,
                                         'edad_maxi_esp' => $especialidad->edad_maxi_esp,
                                         'flag_estu_esp' => $especialidad->flag_estu_esp
                                        ];
             $i++;
         }
      }

      return response()->json($especialidadesArray);
   }
}
