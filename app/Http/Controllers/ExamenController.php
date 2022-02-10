<?php

namespace App\Http\Controllers;

use App\Model\ExamenPostulante;
use App\Models\Audiotmp;
use App\Models\Postulante;
use App\Models\Respuesta;
use App\Traits\Tables;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
                ->where('ps.id_postulante',$request->id_postulante)
                ->where('pe.id_programacion_examen',$request->id_programacion_examen)
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
        $peso=[];
        switch (session('examen')) {
            /////////////////////////////
            case 'ExamenPAA':
                    $correctas = ["respuesta1"=>"E",
                                  "respuesta2"=>"B",
                                  "respuesta3"=>"C",
                                  "respuesta4"=>"G",
                                  "respuesta5"=>"A",
                                  "respuesta6"=>"D",
                                  "respuesta7"=>"B",
                                  "respuesta8"=>"A",
                                  "respuesta9"=>"C",
                                  "respuesta10"=>"A",
                                  "respuesta11"=>"C",
                                  "respuesta12"=>"B",
                                  "respuesta13"=>"D",
                                  "respuesta14"=>"C",
                                  "respuesta15"=>"C",
                                  "respuesta16"=>"B",
                                ];    
                    $peso = ["respuesta1"=>0.667,
                                "respuesta2"=>0.667,
                                "respuesta3"=>0.667,
                                "respuesta4"=>0.667,
                                "respuesta5"=>0.666,
                                "respuesta6"=>0.666,
                                "respuesta7"=>0.667,
                                "respuesta8"=>0.667,
                                "respuesta9"=>0.667,
                                "respuesta10"=>0.667,
                                "respuesta11"=>0.666,
                                "respuesta12"=>0.666,
                                "respuesta13"=>2.5,
                                "respuesta14"=>2.5,
                                "respuesta15"=>3.5,
                                "respuesta16"=>3.5,
                              ];
            break;
            case 'ExamenPAB':
                    $correctas = ["respuesta1"=>"C",
                                  "respuesta2"=>"G",
                                  "respuesta3"=>"A",
                                  "respuesta4"=>"F",
                                  "respuesta5"=>"D",
                                  "respuesta6"=>"E",
                                  "respuesta7"=>"A",
                                  "respuesta8"=>"B",
                                  "respuesta9"=>"C",
                                  "respuesta10"=>"A",
                                  "respuesta11"=>"C",
                                  "respuesta12"=>"B",
                                  "respuesta13"=>"D",
                                  "respuesta14"=>"C",
                                  "respuesta15"=>"B",
                                  "respuesta16"=>"C",
                                ];
                    $peso = ["respuesta1"=>0.667,
                                "respuesta2"=>0.667,
                                "respuesta3"=>0.667,
                                "respuesta4"=>0.667,
                                "respuesta5"=>0.666,
                                "respuesta6"=>0.666,
                                "respuesta7"=>0.667,
                                "respuesta8"=>0.667,
                                "respuesta9"=>0.667,
                                "respuesta10"=>0.667,
                                "respuesta11"=>0.666,
                                "respuesta12"=>0.666,
                                "respuesta13"=>2.5,
                                "respuesta14"=>2.5,
                                "respuesta15"=>3.5,
                                "respuesta16"=>3.5,
                              ];
            break;            
            case 'ExamenPAC':
                    $correctas = ["respuesta1"=>"F",
                                  "respuesta2"=>"C",
                                  "respuesta3"=>"E",
                                  "respuesta4"=>"G",
                                  "respuesta5"=>"B",
                                  "respuesta6"=>"A",
                                  "respuesta7"=>"A",
                                  "respuesta8"=>"C",
                                  "respuesta9"=>"B",
                                  "respuesta10"=>"C",
                                  "respuesta11"=>"B",
                                  "respuesta12"=>"A",
                                  "respuesta13"=>"C",
                                  "respuesta14"=>"A",
                                  "respuesta15"=>"D",
                                  "respuesta16"=>"B",
                                ];
                    $peso = ["respuesta1"=>0.667,
                                "respuesta2"=>0.667,
                                "respuesta3"=>0.667,
                                "respuesta4"=>0.667,
                                "respuesta5"=>0.666,
                                "respuesta6"=>0.666,
                                "respuesta7"=>0.667,
                                "respuesta8"=>0.667,
                                "respuesta9"=>0.667,
                                "respuesta10"=>0.667,
                                "respuesta11"=>0.666,
                                "respuesta12"=>0.666,
                                "respuesta13"=>2.5,
                                "respuesta14"=>2.5,
                                "respuesta15"=>3.5,
                                "respuesta16"=>3.5,
                              ];
            break;
            case 'ExamenPAD':
                    $correctas = ["respuesta1"=>"D",
                                  "respuesta2"=>"G",
                                  "respuesta3"=>"C",
                                  "respuesta4"=>"A",
                                  "respuesta5"=>"E",
                                  "respuesta6"=>"B",
                                  "respuesta7"=>"A",
                                  "respuesta8"=>"C",
                                  "respuesta9"=>"B",
                                  "respuesta10"=>"C",
                                  "respuesta11"=>"B",
                                  "respuesta12"=>"A",
                                  "respuesta13"=>"B",
                                  "respuesta14"=>"D",
                                  "respuesta15"=>"C",
                                  "respuesta16"=>"D",
                                ];
                    $peso = ["respuesta1"=>0.667,
                                "respuesta2"=>0.667,
                                "respuesta3"=>0.667,
                                "respuesta4"=>0.667,
                                "respuesta5"=>0.666,
                                "respuesta6"=>0.666,
                                "respuesta7"=>0.667,
                                "respuesta8"=>0.667,
                                "respuesta9"=>0.667,
                                "respuesta10"=>0.667,
                                "respuesta11"=>0.666,
                                "respuesta12"=>0.666,
                                "respuesta13"=>2.5,
                                "respuesta14"=>2.5,
                                "respuesta15"=>3.5,
                                "respuesta16"=>3.5,
                              ];
            break;
            /////////////////////////////
            case 'ExamenPTA':
                $correctas = ["respuesta1"=>"C",
                              "respuesta2"=>"D",
                              "respuesta3"=>"B",
                              "respuesta4"=>"A",
                              "respuesta5"=>"A",
                              "respuesta6"=>"D",
                              "respuesta7"=>"B",
                              "respuesta8"=>"C",
                              "respuesta9"=>"C",
                              "respuesta10"=>"D",
                              "respuesta11"=>"A",
                              "respuesta12"=>"B",
                              "respuesta13"=>"D",
                              "respuesta14"=>"B",
                              "respuesta15"=>"B",
                              "respuesta16"=>"D",
                              "respuesta17"=>"A",
                              "respuesta18"=>"C",
                              "respuesta19"=>"B",
                              "respuesta20"=>"A",
                            ];
                $peso = ["respuesta1"=>0.625,
                                "respuesta2"=>0.625,
                                "respuesta3"=>0.625,
                                "respuesta4"=>0.625,
                                "respuesta5"=>0.625,
                                "respuesta6"=>0.625,
                                "respuesta7"=>0.625,
                                "respuesta8"=>0.625,
                                "respuesta9"=>1.25,
                                "respuesta10"=>1.25,
                                "respuesta11"=>1.25,
                                "respuesta12"=>1.25,
                                "respuesta13"=>2.5,
                                "respuesta14"=>2.5,
                                "respuesta15"=>0.834,
                                "respuesta16"=>0.834,
                                "respuesta17"=>0.833,
                                "respuesta18"=>0.833,
                                "respuesta19"=>0.833,
                                "respuesta20"=>0.833,
                              ];
            break;
            case 'ExamenPTB':
                $correctas = ["respuesta1"=>"C",
                              "respuesta2"=>"D",
                              "respuesta3"=>"B",
                              "respuesta4"=>"D",
                              "respuesta5"=>"A",
                              "respuesta6"=>"C",
                              "respuesta7"=>"D",
                              "respuesta8"=>"B",
                              "respuesta9"=>"B",
                              "respuesta10"=>"D",
                              "respuesta11"=>"C",
                              "respuesta12"=>"A",
                              "respuesta13"=>"D",
                              "respuesta14"=>"B",
                              "respuesta15"=>"D",
                              "respuesta16"=>"D",
                              "respuesta17"=>"B",
                              "respuesta18"=>"A",
                              "respuesta19"=>"B",
                              "respuesta20"=>"C",
                            ];
                $peso = ["respuesta1"=>0.625,
                                "respuesta2"=>0.625,
                                "respuesta3"=>0.625,
                                "respuesta4"=>0.625,
                                "respuesta5"=>0.625,
                                "respuesta6"=>0.625,
                                "respuesta7"=>0.625,
                                "respuesta8"=>0.625,
                                "respuesta9"=>1.25,
                                "respuesta10"=>1.25,
                                "respuesta11"=>1.25,
                                "respuesta12"=>1.25,
                                "respuesta13"=>2.5,
                                "respuesta14"=>2.5,
                                "respuesta15"=>0.834,
                                "respuesta16"=>0.834,
                                "respuesta17"=>0.833,
                                "respuesta18"=>0.833,
                                "respuesta19"=>0.833,
                                "respuesta20"=>0.833,
                              ];
            break;
            case 'ExamenPTC':
                $correctas = ["respuesta1"=>"A",
                              "respuesta2"=>"D",
                              "respuesta3"=>"B",
                              "respuesta4"=>"C",
                              "respuesta5"=>"B",
                              "respuesta6"=>"A",
                              "respuesta7"=>"C",
                              "respuesta8"=>"D",
                              "respuesta9"=>"A",
                              "respuesta10"=>"D",
                              "respuesta11"=>"B",
                              "respuesta12"=>"C",
                              "respuesta13"=>"D",
                              "respuesta14"=>"B",
                              "respuesta15"=>"D",
                              "respuesta16"=>"A",
                              "respuesta17"=>"B",
                              "respuesta18"=>"D",
                              "respuesta19"=>"C",
                              "respuesta20"=>"B",
                            ];
                $peso = ["respuesta1"=>0.625,
                                "respuesta2"=>0.625,
                                "respuesta3"=>0.625,
                                "respuesta4"=>0.625,
                                "respuesta5"=>0.625,
                                "respuesta6"=>0.625,
                                "respuesta7"=>0.625,
                                "respuesta8"=>0.625,
                                "respuesta9"=>1.25,
                                "respuesta10"=>1.25,
                                "respuesta11"=>1.25,
                                "respuesta12"=>1.25,
                                "respuesta13"=>2.5,
                                "respuesta14"=>2.5,
                                "respuesta15"=>0.834,
                                "respuesta16"=>0.834,
                                "respuesta17"=>0.833,
                                "respuesta18"=>0.833,
                                "respuesta19"=>0.833,
                                "respuesta20"=>0.833,
                              ];
            break;
            case 'ExamenPTD':
                $correctas = ["respuesta1"=>"C",
                              "respuesta2"=>"A",
                              "respuesta3"=>"C",
                              "respuesta4"=>"D",
                              "respuesta5"=>"C",
                              "respuesta6"=>"D",
                              "respuesta7"=>"A",
                              "respuesta8"=>"B",
                              "respuesta9"=>"B",
                              "respuesta10"=>"A",
                              "respuesta11"=>"C",
                              "respuesta12"=>"D",
                              "respuesta13"=>"C",
                              "respuesta14"=>"D",
                              "respuesta15"=>"A",
                              "respuesta16"=>"D",
                              "respuesta17"=>"B",
                              "respuesta18"=>"B",
                              "respuesta19"=>"C",
                              "respuesta20"=>"D",
                            ];
                $peso = ["respuesta1"=>0.625,
                                "respuesta2"=>0.625,
                                "respuesta3"=>0.625,
                                "respuesta4"=>0.625,
                                "respuesta5"=>0.625,
                                "respuesta6"=>0.625,
                                "respuesta7"=>0.625,
                                "respuesta8"=>0.625,
                                "respuesta9"=>1.25,
                                "respuesta10"=>1.25,
                                "respuesta11"=>1.25,
                                "respuesta12"=>1.25,
                                "respuesta13"=>2.5,
                                "respuesta14"=>2.5,
                                "respuesta15"=>0.834,
                                "respuesta16"=>0.834,
                                "respuesta17"=>0.833,
                                "respuesta18"=>0.833,
                                "respuesta19"=>0.833,
                                "respuesta20"=>0.833,
                              ];
            break;
            /////////////////////////////
            case 'ExamenSAAA':
                    $correctas = ["respuesta1"=>"A",
                                  "respuesta2"=>"B",
                                  "respuesta3"=>"E",
                                  "respuesta4"=>"E",
                                ];
            break;
            case 'ExamenSAAB':
                    $correctas = ["respuesta1"=>"D",
                                  "respuesta2"=>"C",
                                  "respuesta3"=>"C",
                                  "respuesta4"=>"D",
                                ];
            break;
            case 'ExamenSHMA':
                    $correctas = ["respuesta1"=>"K",
                                  "respuesta2"=>"J",
                                  "respuesta3"=>"D",
                                  "respuesta4"=>"G",
                                  "respuesta5"=>"B",
                                  "respuesta6"=>"E",
                                  "respuesta7"=>["A", "C" ,"F","H"],
                                  "respuesta8"=>["C", "E", "F","G"]];
            break;
            case 'ExamenSHMB':
                    $correctas = ["respuesta1"=>"K",
                                  "respuesta2"=>"J",
                                  "respuesta3"=>"D",
                                  "respuesta4"=>"G",
                                  "respuesta5"=>"A",
                                  "respuesta6"=>"C",
                                  "respuesta7"=>["B", "C" ,"E","F"],
                                  "respuesta8"=>["B", "C", "D","F"]];
            break;
            case 'ExamenSPAA':
                    $correctas = ["respuesta1"=>"B",
                                  "respuesta2"=>"C",
                                  "respuesta3"=>"A",
                                  "respuesta4"=>"B",
                                ];
            break;
            case 'ExamenSPAB':
                    $correctas = ["respuesta1"=>"C",
                                  "respuesta2"=>"D",
                                  "respuesta3"=>"D",
                                  "respuesta4"=>"A",
                                ];
            break;
            case 'ExamenSCGA':
                    $correctas = ["respuesta1"=>"B",
                                  "respuesta2"=>"C",
                                  "respuesta3"=>"A",
                                  "respuesta4"=>"E",
                                ];
            break;
            case 'ExamenSCGB':
                    $correctas = ["respuesta1"=>"D",
                                  "respuesta2"=>"E",
                                  "respuesta3"=>"E",
                                  "respuesta4"=>"B",
                                ];
            break;
            case 'ExamenSHPA':
                    $correctas = ["respuesta1"=>"C",
                                  "respuesta2"=>"D",
                                  "respuesta3"=>["C", "D"],
                                  "respuesta4"=>"E",
                                  "respuesta5"=>"A",
                                ];
            break;
            case 'ExamenSRMA':
                    $correctas = ["respuesta1"=>"C",
                                  "respuesta2"=>"A",
                                  "respuesta3"=>"D",
                                  "respuesta4"=>"C",
                                  "respuesta5"=>"B",
                                ];
            break;
            case 'ExamenSRMB':
                    $correctas = ["respuesta1"=>"B",
                                  "respuesta2"=>"C",
                                  "respuesta3"=>"B",
                                  "respuesta4"=>"D",
                                  "respuesta5"=>"A",
                                ];
            break;
            case 'ExamenSRVA':
                    $correctas = ["respuesta1"=>"B",
                                  "respuesta2"=>"C",
                                  "respuesta3"=>"C",
                                  "respuesta4"=>"A",
                                ];
            break;
            case 'ExamenSRVB':
                    $correctas = ["respuesta1"=>"D",
                                  "respuesta2"=>"A",
                                  "respuesta3"=>"D",
                                  "respuesta4"=>"E",
                                ];
            break;
        }
        $respuestas = $request->except('_token','id_postulante');
        $nota=0;
        foreach ($correctas as $key => $value) {
            if (substr($key,0,-1)=='respuesta' && array_key_exists($key, $respuestas) && $value==$respuestas[$key]) {
                //if(array_key_exists($key, $peso)){
                    $nota=$nota+$peso[$key];
                //}else{
                //    $nota=$nota+20/count($correctas);
                //}
                echo $peso[$key];
                echo "<br>";
            }
        }
        var_dump($respuestas);
        echo "<br>";
        var_dump($correctas);
        echo "<br>";
        var_dump($peso);
        echo "<br>";
        return $nota;
        $postulante= Postulante::find($request->id_postulante);
        try {
            DB::beginTransaction();
            foreach ($respuestas as $key => $value) {
                $resp=Respuesta::where('key',$key)
                                ->where('id_postulante',$request->id_postulante);
                if ($resp->count()>0) {
                    $resp=$resp->first();
                    $resp->respuesta=$value;
                    $resp->update();
                }else{
                    $resp=new Respuesta();
                    $resp->key=$key;
                    $resp->respuesta=$value;
                    $resp->id_postulante=$request->id_postulante;
                    $resp->save();
                }
            }
            $postulante->nota=round($nota,2);
            $postulante->estado='E';          
            $postulante->update();
            DB::commit();
            session()->forget(['examen','minutos','segundos','id_examen_postulante']);
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
        }
        return redirect()->route('inscription');
    }
    public function CargarAudio(Request $request){
        $audio=DB::table("admision.adm_audiostmp")
        ->where("id_examen_postulante",session('id_examen_postulante'))
        ->where("archivo",$request->archivo)
        ->where("estado",'U')
        ->where("contador",'>',0)
        ->first();
        if ($audio) {
            return 'N';
        }else{
            return 'S';
        }
    }
    public function InsertarAudio(Request $request){
        $audio=Audiotmp::where("id_examen_postulante",session('id_examen_postulante'))
        ->where("archivo",$request->archivo)
        ->where("estado",'U')
        ->where("contador",'>',0)
        ->first();
        try {
            DB::beginTransaction();
            if ($audio) {
                //$audio->contador=$audio->contador+1;
                //$audio->update();
            }else{
                $audio=new Audiotmp;
                $audio->id_examen_postulante=session('id_examen_postulante');
                $audio->archivo=$request->archivo;
                $audio->estado='U';
                $audio->contador=1;
                $audio->save();
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
        }
        
        //return $this->CargarAudio($request);
    }
}
