<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Tables;
use DB;
use PDF;

class ReporteController extends Controller
{
   use Tables;

   public function __construct()
  	{
  		$this->middleware('auth');
  	}

    public function generatePDF(Request $request)
    {
   	if ($request)
      {
         $id = $request->get('codi_post_pos');

         $postulacion = DB::table('ad_postulacion AS a')
                  ->join('bdsig.ttablas_det AS b', 'b.codi_tabl_det', 'a.codi_espe_esp')
                  ->join('bdsig.ttablas_det AS c', 'c.codi_tabl_det', 'a.codi_secc_sec')
                  ->join('bdsig.ttablas_det AS d', 'd.codi_tabl_det', 'a.codi_pais_per')
                  ->join('bdsig.ttablas_det AS t', 't.codi_tabl_det', 'a.tipo_docu_per')
                  ->join('ad_proceso AS e', 'e.codi_proc_adm', 'a.codi_proc_adm')
                  ->where('a.codi_post_pos', '=', $id)
                  ->where('b.codi_tabl_tab', '=', '04')
                  ->where('c.codi_tabl_tab', '=', '05')
                  ->where('d.codi_tabl_tab', '=', '15')
                  ->where('t.codi_tabl_tab', '=', '01')
                  ->select('a.*', 
                          'b.desc_tabl_det AS especialidad', 
                          'c.desc_tabl_det AS seccion', 
                          'd.desc_tabl_det AS pais', 
                          'e.nume_proc_adm AS proceso', 
                          't.abre_tabl_det AS abre_tipo_doc'
                          //,DB::raw("DECODE(a.codi_secc_sec, '05001', 'S', '05002', 'P', 'E')||substr(e.nume_proc_adm, 3)||trim(to_char(a.nume_expe_pos, '0000')) AS nume_expe_exp")
                          )
                  ->first();

         $repertorio = DB::table('ad_repertorio')
                 ->where('codi_post_pos', '=', $id)
                 ->get();

         $trabajos = DB::table('ad_trabajo')
                 ->where('codi_post_pos', '=', $id)
                 ->get();

        $ubigeoDom = $this->getUbigeo($postulacion->ubig_domi_per);

        $pdf = PDF::loadView('reportes.ficha.ficha',
        [ "postulacion" => $postulacion,
          "repertorio"  => $repertorio,
          "trabajos"    => $trabajos,
          "ubigeoDom"   => $ubigeoDom,
        ]);

  			$filename='fichainscripcion.pdf';
  			$pdf->setPaper('a4', 'portrait');

  			return $pdf->stream($filename);
      }
    }
}
