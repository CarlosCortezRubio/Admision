<?php

namespace App\Traits;

use Exception;
use DB;

use App\Models\Proceso;
use App\Models\Seccion;
use App\Models\Pais;

trait Tables
{
    public function getTables($table, $id, $status)
    {
        if (!(empty($id) || is_null($id))) {
            $data = DB::table('bdsig.ttablas_det')
                      ->where('codi_tabl_tab','=',$table)
                      ->where('codi_tabl_det','LIKE',$id ? $id : '')
                      ->where('flag_acti_det','LIKE',$status)
                      ->orderBy('desc_tabl_det','asc')
                      ->get();

            if ($id!='%') {
                $data = $data->first();
            }

            return ($data);

       } else {
            return ('');
       }
    }

    public function getUbigeo($ubigeo)
    {
        if (!(empty($ubigeo) || is_null($ubigeo))) {
            $data = DB::table('bdsig.ubigeo as di')
                      ->join('bdsig.ubigeo as dp', 'dp.codi_ubic_ubg', '=', DB::raw('substr(di.codi_ubic_ubg,1,2)'))
                      ->join('bdsig.ubigeo as pr', 'pr.codi_ubic_ubg', '=', DB::raw('substr(di.codi_ubic_ubg,1,4)'))
                      ->select('di.codi_ubic_ubg as codi_ubic_ubg','dp.abre_ubic_ubg as nomb_depa_ubg','pr.abre_ubic_ubg as nomb_prov_ubg','di.abre_ubic_ubg as nomb_dist_ubg')
                      ->where('di.codi_ubic_ubg','LIKE',$ubigeo ? $ubigeo : '')
                      ->where(DB::raw('length(di.codi_ubic_ubg)'),'=','6')
                      ->orderBy('di.codi_ubic_ubg','asc')
                      ->get();

            if ($ubigeo!='%') {
                $data = $data->first();
            }

            return ($data);

        } else {
            return ('');
        }
    }

    public function getSections($status)
    {
        $data = Seccion::whereIn('codi_secc_sec',['05001','05002','05003'])
                  ->where('esta_secc_sec','LIKE',$status)
                  ->orderBy('desc_secc_sec','asc')
                  ->get();

        return ($data);
    }
	
	public function getActiveSections($status)
    {
        $data = Seccion::whereIn('codi_secc_sec',['05002','05003'])
                  ->where('esta_secc_sec','LIKE',$status)
                  ->orderBy('desc_secc_sec','asc')
                  ->get();

        return ($data);
    }

    public function getParameter($period, $parm)
    {
        $data = DB::table('bdsig.sys_global_parametros')
                  ->select('valo_text_sgp as text','valo_nume_sgp as nume','valo_fech_sgp as fech')
                  ->where('peri_parm_sgp','=',$period)
                  ->where('codi_parm_sgp','=',$parm ? $parm : '')
                  ->first();

        return ($data);
    }

    public function getProceso($estado)
    {
		//dd(env('DB_HOST'));
		//dd(Proceso::first());
		//abort(500);
		//dd($_ENV);
        $data = Proceso::where('esta_proc_adm','=',$estado)
                  ->first();

        return ($data);
    }

    public function generaURL($correo)
    {
        $variable = '';
        return 'cadena';
    }
}
