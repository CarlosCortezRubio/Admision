<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Solicitud;
use App\User;
use App\Http\Requests\SolicitudFormRequest;
use App\Traits\Tables;
use App\Mail\MensajeConfirmacion;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SolicitudController extends Controller
{
   use Tables;

   public function __construct() {
      $this->middleware('guest');
   }

   public function index()
   {
	   $periodos= DB::table('admision.adm_periodo')->where('anio',Carbon::now()->year)
                                                  ->where('estado','A')->get();
      foreach ($periodos as $key => $per) {
         if(Carbon::now()->between($per->peri_insc_inic,$per->peri_insc_fin)){
            $proceso = $this->getProceso('V');
            $secciones = $this->getSections('S');
            $tDocumentos=$this->getTables('01','%','S')->where('abre_tabl_det', '<>', 'RUC');
            return view('inscripcion.solicitud.index', ['proceso'=>$proceso, 'secciones'=>$secciones, 'tDocumentos'=>$tDocumentos]);
         }
         
      }
      return view('inscripcion.mensaje',['proceso'=>false]);
   }

   public function store(SolicitudFormRequest $request)
   {
	   //dd('store');
      //Obtiene le proceso vigente
      $proceso = $this->getProceso('V');

      if ($proceso) {
         // // Valida si ya existe una cuenta de usuario
         // $usuario = User::where('tdocumento', $request->get('tipo_docu_sol'))
         //                ->where('ndocumento', $request->get('nume_docu_sol'))
         //                ->first();

         // Valida si ya existe una solicitud con el mismo documento de identidad
         $solicitud = Solicitud::where('codi_proc_adm', $proceso->codi_proc_adm)
                              ->where('tipo_docu_sol', $request->get('tipo_docu_sol'))
                              ->where('nume_docu_sol', $request->get('nume_docu_sol'))
                              ->first();

         // if ($usuario && $solicitud){

         //    return redirect()->route('register')
         //             ->with('message', 'user_exists')
         //             ->with('email', $usuario->email);

         // }

         if ($solicitud) {
            if ( $solicitud->esta_pago_sol == 'P' ){
               return redirect()->route('register')
                     ->with('message', 'solicitud_pagada')
                     ->with('email', $solicitud->mail_soli_sol);
            } else if ( $solicitud->esta_pago_sol == 'G' && $solicitud->fech_expi_pag > Carbon::now()){
               return redirect()->route('register')
                     ->with('message', 'solicitud_generada')
                     ->with('link', $solicitud->link_pago_sol);
            } else {            
               // Elimina la solicitud anterior en caso que haya expirado
               if (empty($solicitud->fech_expi_sol) || $solicitud->fech_expi_sol < Carbon::now()) {
                  $solicitud->delete();

               } else {
                  $this->enviarMensaje($solicitud->mail_soli_sol, $solicitud->link_gene_sol);

                  return redirect()->route('register')
                        ->with('message', 'solicitud_exists')
                        ->with('email', $solicitud->mail_soli_sol)
                        ->with('expire', date('H:i', strtotime($solicitud->fech_expi_sol)).' del '.
                                          date('d/m/Y', strtotime($solicitud->fech_expi_sol)));
               }
            }
         } else {
            // Valida si ya existe una solicitud con el mismo correo
            $solicitud = Solicitud::where('codi_proc_adm', $proceso->codi_proc_adm)
                                 ->where('mail_soli_sol', $request->get('mail_soli_sol'))
                                 ->first();

            if ($solicitud) {
               return redirect()->route('register')
                     ->with('message', 'email_exists')
                     ->with('email', $solicitud->mail_soli_sol);
            }
         }
         

         // Registra la solicitud
         $solicitud = new Solicitud;
         $solicitud->codi_proc_adm = $proceso->codi_proc_adm;
         $solicitud->tipo_docu_sol = $request->get('tipo_docu_sol');
         $solicitud->nume_docu_sol = $request->get('nume_docu_sol');
         $solicitud->mail_soli_sol = $request->get('mail_soli_sol');
         $enlace = $this->getEnlaceConfirmacion($proceso->codi_proc_adm,
                                                $request->get('tipo_docu_sol'),
                                                $request->get('nume_docu_sol'));
         $solicitud->link_gene_sol = $enlace;
         $solicitud->fech_expi_sol = Carbon::now()->addHour();
         $solicitud->esta_pago_sol = 'R';
         $solicitud->fech_regi_sol = Carbon::now();
         $solicitud->term_regi_aud = $request->getClientIp();
         $solicitud->save();
         $this->enviarMensaje($request->get('mail_soli_sol'), $enlace);

         return redirect()->route('register')
            ->with('message', 'success')
            ->with('email', $solicitud->mail_soli_sol)
            ->with('expire', date('H:i', strtotime($solicitud->fech_expi_sol)).' del '.
                             date('d/m/Y', strtotime($solicitud->fech_expi_sol)));

      } else {
         return redirect()->route('register');
      }
   }

   public function getEnlaceConfirmacion($proceso, $tipoDoc, $numeDoc)
   {
      return URL::temporarySignedRoute('pago.index', Carbon::now()->addHour(), [
         'p' => $proceso,
         't' => $tipoDoc,
         'n' => $numeDoc
      ]);
   }

   public function enviarMensaje($correo, $enlace)
   {
      Mail::to($correo)->send(new MensajeConfirmacion($enlace));
      return 'mensaje enviado';
   }
}