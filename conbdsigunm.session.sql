CREATE TABLE admision.adm_periodo (
  Id_periodo integer NOT NULL DEFAULT nextval("admision.adm_periodo_id_seq"::regclass),
  anio character varying(4) COLLATE pg_catalog."default" NOT NULL,
  peri_insc_inic timestamp(0) without time zone,
  peri_insc_fin timestamp(0) without time zone,
  peri_eval_inic timestamp(0) without time zone,
  peri_eval_fin timestamp(0) without time zone,
  estado varying(4) COLLATE default 'I' NOT NULL,
  observacion varying(500) ,
  created_at timestamp(0) without time zone,
  updated_at timestamp(0) without time zone,
  user_regi bigint,
  user_actu bigint,
  codi_secc_sec character varying(5),
  FOREIGN KEY (user_regi) REFERENCES admision.adm_usuario(Id_usuario),
  FOREIGN KEY (user_actu) REFERENCES admision.adm_usuario(Id_usuario),
  FOREIGN KEY (codi_secc_sec) REFERENCES bdsig.seccion_especialidad(codi_secc_sec)
);