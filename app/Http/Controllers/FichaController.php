<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Traits\Tables;
use App\Models\Ficha;
use App\Models\FichaRepertorio;
use App\Models\FichaTrabajo;
use App\Models\Solicitud;
use App\Http\Requests\FichaFormRequest;
use App\Models\Seccion_Especialidad;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;

class FichaController extends Controller
{
   use Tables;

   public function __construct()
   {
      $this->middleware('auth');
   }

   public function index()
   {
      $proceso = $this->getProceso('V');
      if ($proceso) {
         $solicitud = Solicitud::where('codi_proc_adm', $proceso->codi_proc_adm)
                                 ->where('tipo_docu_sol', auth()->user()->tdocumento)
                                 ->where('nume_docu_sol', auth()->user()->ndocumento)
                                 ->first();
     
         
         if ($solicitud) {
            if ( $solicitud->esta_pago_sol == 'G' && $solicitud->fech_expi_pag > Carbon::now()){
            
               return view('inscripcion.ficha.mensaje', ['proceso'=>$proceso,
                     'message'=> 'solicitud_generada',
                     'link'=> $solicitud->link_pago_sol]);

            } else if ( $solicitud->esta_pago_sol != 'P' ){
               return view('inscripcion.ficha.mensaje', ['proceso'=>$proceso,
                     'message'=> 'solicitud_no_pagada']);
            }
            
         } else {

            return view('inscripcion.ficha.mensaje', ['proceso'=>$proceso,
                     'message'=> 'solicitud_no_exists']);
         }

         $ficha = Ficha::where('tipo_docu_per', auth()->user()->tdocumento)
                     ->where('nume_docu_per', auth()->user()->ndocumento)
                     ->where('codi_proc_adm',$proceso->codi_proc_adm)
                     ->first();
      

         if ($ficha) {
            $seccion = $this->getTables('05', $ficha->codi_secc_sec, '%');
			//dd($seccion);exit;
            $especialidad = $this->getTables('04', $ficha->codi_espe_esp, '%');
            $tdocumento = $this->getTables('01', $ficha->tipo_docu_per, '%');
            $ndocumento =  $ficha->nume_docu_per;
            $fnacimiento = $ficha->fech_naci_per;
            $edad = $ficha->edad_calc_pos;
            $ubigeoDom = $this->getUbigeo($ficha->ubig_domi_per);

            //2021 Oculta repertorio y trabajos
            
            $repertorio = FichaRepertorio::where('codi_post_pos', $ficha->codi_post_pos)
                                          ->get();

            $trabajos = FichaTrabajo::where('codi_post_pos', $ficha->codi_post_pos)
                                    ->get();
            
            //2021

         } else {
            // $solicitud = Solicitud::where('codi_proc_adm', $proceso->codi_proc_adm)
            //                      ->where('tipo_docu_sol', auth()->user()->tdocumento)
            //                      ->where('nume_docu_sol', auth()->user()->ndocumento)
            //                      ->first();
            
            $seccion = $this->getTables('05', $solicitud->codi_secc_sec, '%');
            $especialidad = $this->getTables('04', $solicitud->codi_espe_esp, '%');
            $tdocumento = $this->getTables('01', $solicitud->tipo_docu_sol, '%');
            $ndocumento =  $solicitud->nume_docu_sol;
            $fnacimiento = $solicitud->fech_naci_pos;
            $edad = $solicitud->edad_calc_pos;
            $ubigeoDom = collect();
            //2021
             $repertorio = collect([]);
            $trabajos = collect([]); 
            //2021
            //echo $solicitud;
            //return $fnacimiento;
         }
         $especialidades = Seccion_Especialidad::where('codi_secc_sec', $solicitud->codi_secc_sec)
                           ->orderBy('desc_espe_esp', 'asc')
                           ->get();
         
         $docentes=DB::table('bdsig.persona')->where('flag_trab_per','S')->where('tipo_trab_per','03001')
                           ->orderBy('nomb_comp_per', 'asc')
                           ->get();
         $paises = $this->getTables('15', '%', 'S');
         $ubigeo = $this->getUbigeo('%');
         /////////////////////////
         $horarios=DB::table('admision.adm_postulante as ps')
                     ->join('admision.adm_programacion_examen as pe','pe.id_programacion_examen','ps.id_programacion_examen')
                     ->join('admision.adm_aula as au','pe.id_aula','au.id_aula')
                     ->join('admision.adm_examen as ex','pe.id_examen','ex.id_examen')
                     ->where('nume_docu_sol',Auth::user()->ndocumento)
                     ->select('pe.descripcion',"DATE(pe.fecha_resol) as fecha_resol",'')
                     ->get();
         
         /////////////////////////
         //2021 No envia trabajos ni repertorio a vista inscripcion.ficha.index
         /* return view('inscripcion.ficha.index', ['proceso'=>$proceso, 'ficha'=>$ficha, 'seccion'=>$seccion, 'especialidad'=>$especialidad, 'tdocumento'=>$tdocumento, 'ndocumento'=>$ndocumento, 'fnacimiento'=>$fnacimiento, 'edad'=>$edad, 'ubigeoDom'=>$ubigeoDom, 'repertorio'=>$repertorio, 'trabajos'=>$trabajos, 'ubigeo'=>$ubigeo, 'paises'=>$paises]); */
         return view('inscripcion.ficha.index', ['codi_secc'=>$solicitud->codi_secc_sec,'proceso'=>$proceso, 'ficha'=>$ficha, 'seccion'=>$seccion, 'especialidad'=>$especialidad, 'tdocumento'=>$tdocumento, 'ndocumento'=>$ndocumento, 'fnacimiento'=>$fnacimiento, 'edad'=>$edad, 'ubigeoDom'=>$ubigeoDom, 'repertorio'=>$repertorio, 'trabajos'=>$trabajos, 'ubigeo'=>$ubigeo, 'paises'=>$paises,'horarios'=>$horarios,'docentes'=>$docentes,'especialidades'=>$especialidades]); 
         //return view('inscripcion.ficha.index', ['proceso'=>$proceso, 'ficha'=>$ficha, 'seccion'=>$seccion, 'especialidad'=>$especialidad, 'tdocumento'=>$tdocumento, 'ndocumento'=>$ndocumento, 'fnacimiento'=>'1998/09/28','edad'=>$edad, 'ubigeoDom'=>$ubigeoDom, 'ubigeo'=>$ubigeo, 'paises'=>$paises,'horarios'=>$horarios]);
         //2021
		 
      } else {
         return view('inscripcion.ficha.index', ['proceso'=>$proceso]);
      }
   }

   public function store(FichaFormRequest $request)
   {
      $proceso = $this->getProceso('V');

      if ($proceso) {

         $ficha = Ficha::where('tipo_docu_per', auth()->user()->tdocumento)
                        ->where('nume_docu_per', auth()->user()->ndocumento)
                        ->where('codi_proc_adm',$proceso->codi_proc_adm)
                        ->first();

         if (!$ficha) {
            $ficha = New Ficha;

            $seccion = $request->get('codi_secc_sec');

            $maxExpe = Ficha::where('codi_proc_adm', $proceso->codi_proc_adm)->max('nume_expe_pos');
            $maxExpe = empty($maxExpe) ? 0 : $maxExpe;

            $ficha->codi_proc_adm = $proceso->codi_proc_adm;
            $ficha->codi_secc_sec = $seccion;
            $ficha->codi_espe_esp = $request->get('codi_espe_esp');
            $ficha->tipo_docu_per = $request->get('tipo_docu_per');
            $ficha->nume_docu_per = $request->get('nume_docu_per');
            $ficha->nume_expe_pos = $maxExpe + 1;
            $ficha->fech_naci_per = $request->get('fech_naci_per');
            $ficha->edad_calc_pos = $request->get('edad_calc_pos');

         }

         $ficha->apel_pate_per = trim(strtoupper($request->get('apel_pate_per')));
         $ficha->apel_mate_per = trim(strtoupper($request->get('apel_mate_per')));
         $ficha->nomb_pers_per = trim(strtoupper($request->get('nomb_pers_per')));
         $ficha->codi_pais_per = $request->get('codi_pais_per');
         $ficha->ubig_domi_per = $request->get('ubig_domi_per');
         $ficha->telf_fijo_per = $request->get('telf_fijo_per');
         $ficha->telf_celu_per = $request->get('telf_celu_per');
         $ficha->tipo_prep_pos = $request->get('tipo_prep_pos');
         $ficha->desc_prep_pos = trim(strtoupper($request->get('desc_prep_pos')));
         $ficha->flag_corr_pos = $request->get('flag_corr_pos') == 'S' ? 'S' : 'N';
         $ficha->nomb_corr_pos = trim(strtoupper($request->get('flag_corr_pos') == 'S' ? $request->get('nomb_corr_pos') : ''));
         $ficha->apel_nomb_apd = trim(strtoupper($request->get('apel_nomb_apd')));
         $ficha->nume_docu_apd = $request->get('nume_docu_apd');
         $ficha->telf_fijo_apd = $request->get('telf_fijo_apd');
         $ficha->tecn_post_pos = $request->get('tecn_post_pos');
         $ficha->codi_doce_adm = $request->get('codi_doce_adm');
         $ficha->codi_espe_adm = $request->get('codi_espe_adm');
         $ficha->nive_estu_adm = $request->get('nive_estu_adm');  
         $ficha->grad_estu_adm = $request->get('grad_estu_adm');
         $ficha->flag_disc_adm = $request->get('flag_disc_adm');
         $ficha->disc_soli_adm = $request->get('disc_soli_adm');
         $ficha->esta_post_pos = $request->get('submit') == 'E' ? 'E' : 'R';

         if (Input::hasFile('foto_post_per')){
            $foto = Input::file('foto_post_per');
            $newFoto = $ficha->tipo_docu_per.'-'.$ficha->nume_docu_per.'.'.$foto->getClientOriginalExtension();

            if (config('app.env')=='production') {
               $pathFoto = base_path().'/images/persons/'.$newFoto;
            } else {
               $pathFoto = public_path().'/images/persons/'.$newFoto;
            }

            Image::make($foto->getRealPath())
               ->orientate()
               ->resize(400, null, function ($constraint){
                  $constraint->aspectRatio();
               })->save($pathFoto, 72);

            $ficha->foto_post_per=$newFoto;
         }

         if (Input::hasFile('file_docu_pos')){
            $document=Input::file('file_docu_pos');
            $newDocument=$ficha->tipo_docu_per.'-'.$ficha->nume_docu_per.'_document.'.$document->getClientOriginalExtension();

            if (config('app.env')=='production') {
               $pathDocument = base_path().'/images/persons/'.$newDocument;
            } else {
               $pathDocument = public_path().'/images/persons/'.$newDocument;
            }

            Image::make($document->getRealPath())
               ->orientate()
               ->resize(700, null, function ($constraint){
                  $constraint->aspectRatio();
               })->save($pathDocument, 72);

            $ficha->file_docu_pos=$newDocument;
         }

         if (empty($ficha->codi_post_pos)) {
            $ficha->fech_regi_aud = Carbon::now();
            $ficha->term_regi_aud = $request->getClientIp();
            $ficha->save();

         } else {
            $ficha->fech_actu_aud = Carbon::now();
            $ficha->term_actu_aud = $request->getClientIp();
            $ficha->update();
         }

         // Repertorio
         $auto_repe_rep = $request->get('auto_repe_rep');
         $obra_repe_rep = $request->get('obra_repe_rep');
         $dura_repe_rep = $request->get('dura_repe_rep');

         FichaRepertorio::where('codi_post_pos', $ficha->codi_post_pos)
                        ->delete();

         if( is_array($auto_repe_rep)) {
            $cont = 0;

            while ($cont < count($auto_repe_rep)) {

               $repertorio = new FichaRepertorio;
               $repertorio->codi_repe_rep = $cont + 1;
               $repertorio->auto_repe_rep = $auto_repe_rep[$cont];
               $repertorio->obra_repe_rep = $obra_repe_rep[$cont];
               $repertorio->dura_repe_rep = $dura_repe_rep[$cont];
               $repertorio->codi_post_pos = $ficha->codi_post_pos;
               $repertorio->save();

               $cont++;
            }
         }

         // Trabajos
         $obra_trab_tra = $request->get('obra_trab_tra');
         $comn_trab_tra = $request->get('comn_trab_tra');
         $inst_trab_tra = $request->get('inst_trab_tra');

         FichaTrabajo::where('codi_post_pos', $ficha->codi_post_pos)
                        ->delete();

         if( is_array($obra_trab_tra)) {
            $cont = 0;

            while ($cont < count($obra_trab_tra)) {

               $trabajo = new FichaTrabajo;
               $trabajo->codi_trab_tra = $cont + 1;
               $trabajo->obra_trab_tra = $obra_trab_tra[$cont];
               $trabajo->comn_trab_tra = $comn_trab_tra[$cont];
               $trabajo->inst_trab_tra = $inst_trab_tra[$cont];
               $trabajo->codi_post_pos = $ficha->codi_post_pos;
               $trabajo->save();

               $cont++;
            }
         }

         if ($request->get('submit') == 'E') {
            return redirect()->to('inscripcion/ficha')
                  ->with('success','La ficha ha sido enviada correctamente.')
				  ->with('xpopup','x1');
				  // mandamos un parametro [IF existe parametro = Muestra popup]
         } else {
            return redirect()->to('inscripcion/ficha')
            ->with('success','La ficha ha sido guardada correctamente.');
         }

      } else {
         return view('inscripcion.ficha.index', ['proceso'=>$proceso]);
      }
   }
}
