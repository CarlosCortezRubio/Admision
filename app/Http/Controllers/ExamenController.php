<?php

namespace App\Http\Controllers;

use App\Model\ExamenPostulante;
use App\Models\Postulante;
use App\Traits\Tables;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamenController extends Controller
{
    use Tables;
    public function index(Request $request){
        $examen=DB::table('admision.adm_examen_postulante as ep')
                ->join('admision.adm_postulante as ps','ps.id_postulante','ep.id_postulante')
                ->join('admision.adm_programacion_examen as pe','pe.id_programacion_examen','ps.id_programacion_examen')
                ->join('admision.adm_examen as e','pe.id_examen','e.id_examen')
                ->where('ps.nume_docu_sol',Auth::user()->ndocumento)
                ->where('pe.id_examen',$request->id_examen)
                ->select('e.enlace',
                         'ep.id_examen_postulante',
                         "ep.minutos",
                         "ep.segundos",
                         'ps.id_postulante')
                ->first();
        $proceso = $this->getProceso('V');
        session(['examen'=>$examen->enlace,'minutos'=>$examen->minutos,'segundos'=>$examen->segundos,'id_examen_postulante'=>$examen->id_examen_postulante]);
        return view('inscripcion.Examen.index',['proceso'=>$proceso,'id_postulante'=>$examen->id_postulante]);
    }

    public function tiempo(Request $request){
        try {
            DB::beginTransaction();
            $examen=ExamenPostulante::find(session('id_examen_postulante'));
            $examen->minutos=$request->minutos;
            $examen->segundos=$request->segundos;
            $examen->estado='E';
            $examen->update();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
        }
    }

    public function evaluar(Request $request){
        $correctas=[];
        switch (session('examen')) {
            case 'ExamenSHM':
                    $correctas = ["respuesta1"=>"B",
                                  "respuesta2"=>"B",
                                  "respuesta3"=>"I",
                                  "respuesta4"=>"J",
                                  "respuesta5"=>["B", "F" ,"H","J"],
                                  "respuesta6"=>["A", "C", "G", "I"]];
                break;
        }
        $respuestas = $request->except('_token','id_postulante');
        $nota=0;
        foreach ($correctas as $key => $value) {
            if (substr($key,0,-1)=='respuesta' && array_key_exists($key, $respuestas) && $value==$respuestas[$key]) {
                $nota=$nota+20/count($correctas);
            }
        }
        $postulante= Postulante::find($request->id_postulante);
        session()->forget(['examen','minutos','segundos','id_examen_postulante']);
        try {
            DB::beginTransaction();
            $postulante->nota=round($nota);
            $postulante->estado='R';                
            $postulante->update();
            DB::commit();
            
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
        }
        return redirect()->route('inscription');
    }
}
