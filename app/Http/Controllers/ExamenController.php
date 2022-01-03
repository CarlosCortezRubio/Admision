<?php

namespace App\Http\Controllers;

use App\Model\ExamenPostulante;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExamenController extends Controller
{
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
                         "ep.segundos")
                ->first();
        session(['examen'=>$examen->enlace,'minutos'=>$examen->minutos,'segundos'=>$examen->segundos,'id_examen_postulante'=>$examen->id_examen_postulante]);
        return view('inscripcion.Examen.index');
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
}
