/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     26/11/2021 9:04:45 p. m.                     */
/*==============================================================*/


drop table if exists Asignatura;

drop table if exists Aula;

drop table if exists Banco;

drop table if exists Ciclo;

drop table if exists CtoEvaluac;

drop table if exists Curso;

drop table if exists Dia;

drop table if exists EdoCivil;

drop table if exists EdoRegistro;

drop table if exists Empleado;

drop table if exists Empresa;

drop table if exists EstCtoEvaluac;

drop table if exists EstCur;

drop table if exists Estudiante;

drop table if exists Genero;

drop table if exists Grupo;

drop table if exists Horario;

drop table if exists PenAsig;

drop table if exists Pensum;

drop table if exists Periodo;

drop table if exists Persona2;

drop table if exists PrelaAsig;

drop table if exists ProgEstudio;

drop index IND_ROL on Rol;

drop table if exists Rol;

drop table if exists Sede;

drop table if exists TipoAsignatura;

drop table if exists TipoEvaluac;

drop table if exists TipoSolicitud;

drop index IND_USUARIO on Usuario;

drop table if exists Usuario;

drop index INDEX_LOG on log;

drop table if exists log;

/*==============================================================*/
/* Table: Asignatura                                            */
/*==============================================================*/
create table Asignatura
(
   idAsignatura         int not null auto_increment,
   idTipoEvaluac        int,
   idTipoAsignatura     int,
   idEdoRegistro        int,
   codAsignatura        varchar(16),
   nomAsignatura        varchar(32),
   nomCortoAsignatura   varchar(16),
   pracLabAsignatura    int,
   primary key (idAsignatura)
);

/*==============================================================*/
/* Table: Aula                                                  */
/*==============================================================*/
create table Aula
(
   idAula               int not null auto_increment,
   idSede               int,
   codAula              varchar(8),
   nomAula              varchar(32),
   descAula             varchar(128),
   primary key (idAula)
);

/*==============================================================*/
/* Table: Banco                                                 */
/*==============================================================*/
create table Banco
(
   IDBANCO              int not null auto_increment,
   Edo_idEdoRegistro    int,
   NOMBANCO             varchar(32),
   ETIBANCO             varchar(32),
   primary key (IDBANCO)
);

/*==============================================================*/
/* Table: Ciclo                                                 */
/*==============================================================*/
create table Ciclo
(
   idCiclo              int not null auto_increment,
   idEdoRegistro        int,
   nomCiclo             varchar(32),
   codCiclo             varchar(16),
   primary key (idCiclo)
);

/*==============================================================*/
/* Table: CtoEvaluac                                            */
/*==============================================================*/
create table CtoEvaluac
(
   idCtoEvaluac         int not null auto_increment,
   idCurso              int,
   nomCtoEvaluac        varchar(64),
   descCtoEvaluac       varchar(128),
   numEvaCtoEvaluac     int,
   primary key (idCtoEvaluac)
);

alter table CtoEvaluac comment 'Criterio de evaluación';

/*==============================================================*/
/* Table: Curso                                                 */
/*==============================================================*/
create table Curso
(
   idCurso              int not null auto_increment,
   idPeriodo            int,
   idProgEstudio        int,
   idEdoRegistro        int,
   idEmpleado           int,
   idPensum             int,
   idAsignatura         int,
   codCurso             varchar(16),
   nomCurso             varchar(32),
   cupMaxCurso          int,
   fecIniCurso          date,
   fecFinCurso          date,
   primary key (idCurso)
);

alter table Curso comment 'idEmpleado es el idDocente';

/*==============================================================*/
/* Table: Dia                                                   */
/*==============================================================*/
create table Dia
(
   idDia                int not null auto_increment,
   nomDia               varchar(16),
   nomCortoDia          varchar(4),
   letraDia             varchar(1),
   primary key (idDia)
);

/*==============================================================*/
/* Table: EdoCivil                                              */
/*==============================================================*/
create table EdoCivil
(
   IDEDOCIVIL           int not null auto_increment,
   NOMEDOCIVIL          varchar(64),
   primary key (IDEDOCIVIL)
);

/*==============================================================*/
/* Table: EdoRegistro                                           */
/*==============================================================*/
create table EdoRegistro
(
   idEdoRegistro        int not null auto_increment,
   nomEdoRegistro       varchar(32),
   descEdoRegistro      varchar(64),
   gpoEdoRegistro       int,
   primary key (idEdoRegistro)
);

/*==============================================================*/
/* Table: Empleado                                              */
/*==============================================================*/
create table Empleado
(
   idEmpleado           int not null auto_increment,
   idPersona            int,
   primary key (idEmpleado)
);

/*==============================================================*/
/* Table: Empresa                                               */
/*==============================================================*/
create table Empresa
(
   idEmpresa            int not null auto_increment,
   idEdoRegistro        int,
   rucEmpresa           varchar(16),
   telEmpresa           varchar(16),
   dirEmpresa           varchar(512),
   correoEmpresa        varchar(64),
   primary key (idEmpresa)
);

/*==============================================================*/
/* Table: EstCtoEvaluac                                         */
/*==============================================================*/
create table EstCtoEvaluac
(
   idEstCtoEvaluac      int not null auto_increment,
   idEstudiante         int,
   idCtoEvaluac         int,
   notaEstCtoEvaluac    decimal(2,2),
   primary key (idEstCtoEvaluac)
);

alter table EstCtoEvaluac comment 'Contiene la nota del estudiante en los distintos criterios d';

/*==============================================================*/
/* Table: EstCur                                                */
/*==============================================================*/
create table EstCur
(
   idEstCur             int not null auto_increment,
   idCurso              int,
   idEstudiante         int,
   notaEstCur           numeric(2,2),
   inasistEstCur        int,
   obsEstCur            varchar(256),
   primary key (idEstCur)
);

/*==============================================================*/
/* Table: Estudiante                                            */
/*==============================================================*/
create table Estudiante
(
   idEstudiante         int not null auto_increment,
   idEdoRegistro        int,
   primary key (idEstudiante)
);

/*==============================================================*/
/* Table: Genero                                                */
/*==============================================================*/
create table Genero
(
   IDGENERO             int not null auto_increment,
   idPersona            int,
   NOMGENERO            varchar(64),
   primary key (IDGENERO)
);

/*==============================================================*/
/* Table: Grupo                                                 */
/*==============================================================*/
create table Grupo
(
   idGrupo              int not null auto_increment,
   idCiclo              int,
   idPensum             int,
   idPeriodo            int,
   idProgEstudio        int,
   idEmpleado           int,
   idSede               int,
   nomGrupo             varchar(32),
   codGrupo             varchar(16),
   primary key (idGrupo)
);

/*==============================================================*/
/* Table: Horario                                               */
/*==============================================================*/
create table Horario
(
   idHorario            int not null auto_increment,
   idDia                int,
   idAula               int,
   idCurso              int,
   horIniHorario        varchar(16),
   horFinHorario        varchar(16),
   primary key (idHorario)
);

/*==============================================================*/
/* Table: PenAsig                                               */
/*==============================================================*/
create table PenAsig
(
   idPenAsig            int not null auto_increment,
   idPensum             int,
   idAsignatura         int,
   idCiclo              int,
   creditoPenAsig       int,
   ihSemPenAsig         int,
   ihTotPenAsig         int,
   evalParaCerrarPenAsig int,
   primary key (idPenAsig)
);

/*==============================================================*/
/* Table: Pensum                                                */
/*==============================================================*/
create table Pensum
(
   idPensum             int not null auto_increment,
   idEdoRegistro        int,
   nomPensum            varchar(32),
   primary key (idPensum)
);

/*==============================================================*/
/* Table: Periodo                                               */
/*==============================================================*/
create table Periodo
(
   idPeriodo            int not null auto_increment,
   idEdoRegistro        int,
   nomPeriodo           varchar(32),
   fecIniPeriodo        date,
   fecFinPeriodo        date,
   OrdPeriodo           int,
   primary key (idPeriodo)
);

/*==============================================================*/
/* Table: Persona2                                              */
/*==============================================================*/
create table Persona2
(
   idPersona            int not null auto_increment,
   Edo_IDEDOCIVIL       int,
   IDBANCO              int,
   idEdoRegistro        int,
   idGenero             int,
   idEdoCivil           int,
   idIdioma             int,
   idDistritoNac        int,
   idDistritoDir        int,
   idTipoDoc            int,
   idZona               int,
   idVia                int,
   dniPersona           varchar(16),
   nom1Persona          varchar(32),
   nom2Persona          varchar(32),
   ape1Persona          varchar(32),
   ape2Persona          varchar(32),
   numDepPersona        int,
   fecNacPersona        date,
   zonaDomPersona       varchar(128),
   desViaDomPersona     varchar(128),
   numViaDomPersona     varchar(32),
   intDomPersona        varchar(32),
   tel1DomPersona       varchar(16),
   tel2DomPersona       varchar(16),
   refDomPersona        varchar(128),
   emaDomPersona        varchar(64),
   primary key (idPersona)
);

/*==============================================================*/
/* Table: PrelaAsig                                             */
/*==============================================================*/
create table PrelaAsig
(
   idPenAsig            int,
   idAsignatura         int,
   idPrelaAsig          int
);

/*==============================================================*/
/* Table: ProgEstudio                                           */
/*==============================================================*/
create table ProgEstudio
(
   idProgEstudio        int not null auto_increment,
   idEmpleado           int,
   codProgEstudio       varchar(16),
   nomProgEstudio       varchar(32),
   nomCortoProgEstudio  varchar(32),
   numResAutoProgEstudio varchar(16),
   fecResAutoProgEstudio date,
   preInscProgEstudio   int,
   gpoProgEstudio       int,
   numResRevaProgEstudio varchar(16),
   fecResRevaProgEstudio date,
   primary key (idProgEstudio)
);

/*==============================================================*/
/* Table: Rol                                                   */
/*==============================================================*/
create table Rol
(
   IDROL                int not null auto_increment,
   Edo_idEdoRegistro    int,
   NOMROL               VARCHAR(64),
   DESCROL              VARCHAR(64),
   primary key (IDROL)
);

/*==============================================================*/
/* Index: IND_ROL                                               */
/*==============================================================*/
create index IND_ROL on Rol
(
   IDROL,
   NOMROL
);

/*==============================================================*/
/* Table: Sede                                                  */
/*==============================================================*/
create table Sede
(
   idSede               int not null auto_increment,
   nomSede              varchar(32),
   primary key (idSede)
);

/*==============================================================*/
/* Table: TipoAsignatura                                        */
/*==============================================================*/
create table TipoAsignatura
(
   idTipoAsignatura     int not null auto_increment,
   nomTipoAsignatura    varchar(32),
   primary key (idTipoAsignatura)
);

/*==============================================================*/
/* Table: TipoEvaluac                                           */
/*==============================================================*/
create table TipoEvaluac
(
   idTipoEvaluac        int not null auto_increment,
   nomTipoEvaluac       varchar(32),
   primary key (idTipoEvaluac)
);

/*==============================================================*/
/* Table: TipoSolicitud                                         */
/*==============================================================*/
create table TipoSolicitud
(
   idTipoSolicitud      int not null auto_increment,
   solTipoSolicitud     varchar(512),
   fecIniTipoSolicitud  date,
   segTipoSolicitud     date,
   primary key (idTipoSolicitud)
);

/*==============================================================*/
/* Table: Usuario                                               */
/*==============================================================*/
create table Usuario
(
   IDUSUARIO            int not null auto_increment,
   IDROL                int,
   Edo_idEdoRegistro    int,
   idPersona            int,
   CUENTAUSUARIO        VARCHAR(64),
   CONTRASENAUSUARIO    VARCHAR(64),
   FECCREACION          DATE,
   PREGSECRETA          VARCHAR(64),
   RESPPREGSECRETA      VARCHAR(64),
   primary key (IDUSUARIO)
);

/*==============================================================*/
/* Index: IND_USUARIO                                           */
/*==============================================================*/
create index IND_USUARIO on Usuario
(
   IDUSUARIO,
   CUENTAUSUARIO
);

/*==============================================================*/
/* Table: log                                                   */
/*==============================================================*/
create table log
(
   IDLOG                int not null auto_increment,
   IDUSUARIO            int,
   FECHALOG             DATE not null,
   IPLOG                VARCHAR(16) not null,
   ACCIONLOG            TEXT not null,
   primary key (IDLOG)
);

/*==============================================================*/
/* Index: INDEX_LOG                                             */
/*==============================================================*/
create index INDEX_LOG on log
(
   IDLOG
);

alter table Asignatura add constraint FK_Reference_11 foreign key (idTipoEvaluac)
      references TipoEvaluac (idTipoEvaluac) on delete restrict on update restrict;

alter table Asignatura add constraint FK_Reference_12 foreign key (idTipoAsignatura)
      references TipoAsignatura (idTipoAsignatura) on delete restrict on update restrict;

alter table Asignatura add constraint FK_Reference_44 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Aula add constraint FK_Reference_50 foreign key (idSede)
      references Sede (idSede) on delete restrict on update restrict;

alter table Banco add constraint FK_REFERENCE_17 foreign key (Edo_idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Ciclo add constraint FK_Reference_43 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table CtoEvaluac add constraint FK_Reference_57 foreign key (idCurso)
      references Curso (idCurso) on delete restrict on update restrict;

alter table Curso add constraint FK_Reference_16 foreign key (idPeriodo)
      references Periodo (idPeriodo) on delete restrict on update restrict;

alter table Curso add constraint FK_Reference_27 foreign key (idProgEstudio)
      references ProgEstudio (idProgEstudio) on delete restrict on update restrict;

alter table Curso add constraint FK_Reference_35 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Curso add constraint FK_Reference_36 foreign key (idEmpleado)
      references Empleado (idEmpleado) on delete restrict on update restrict;

alter table Curso add constraint FK_Reference_48 foreign key (idPensum)
      references Pensum (idPensum) on delete restrict on update restrict;

alter table Curso add constraint FK_Reference_49 foreign key (idAsignatura)
      references Asignatura (idAsignatura) on delete restrict on update restrict;

alter table Empleado add constraint FK_Reference_28 foreign key (idPersona)
      references Persona2 (idPersona) on delete restrict on update restrict;

alter table Empresa add constraint FK_Reference_37 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table EstCtoEvaluac add constraint FK_Reference_58 foreign key (idEstudiante)
      references Estudiante (idEstudiante) on delete restrict on update restrict;

alter table EstCtoEvaluac add constraint FK_Reference_59 foreign key (idCtoEvaluac)
      references CtoEvaluac (idCtoEvaluac) on delete restrict on update restrict;

alter table EstCur add constraint FK_Reference_54 foreign key (idCurso)
      references Curso (idCurso) on delete restrict on update restrict;

alter table EstCur add constraint FK_Reference_55 foreign key (idEstudiante)
      references Estudiante (idEstudiante) on delete restrict on update restrict;

alter table Estudiante add constraint FK_Reference_56 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Genero add constraint FK_REFERENCE_6 foreign key (idPersona)
      references Persona2 (idPersona) on delete restrict on update restrict;

alter table Grupo add constraint FK_Reference_19 foreign key (idCiclo)
      references Ciclo (idCiclo) on delete restrict on update restrict;

alter table Grupo add constraint FK_Reference_20 foreign key (idPensum)
      references Pensum (idPensum) on delete restrict on update restrict;

alter table Grupo add constraint FK_Reference_38 foreign key (idPeriodo)
      references Periodo (idPeriodo) on delete restrict on update restrict;

alter table Grupo add constraint FK_Reference_39 foreign key (idProgEstudio)
      references ProgEstudio (idProgEstudio) on delete restrict on update restrict;

alter table Grupo add constraint FK_Reference_40 foreign key (idEmpleado)
      references Empleado (idEmpleado) on delete restrict on update restrict;

alter table Grupo add constraint FK_Reference_42 foreign key (idSede)
      references Sede (idSede) on delete restrict on update restrict;

alter table Horario add constraint FK_Reference_51 foreign key (idDia)
      references Dia (idDia) on delete restrict on update restrict;

alter table Horario add constraint FK_Reference_52 foreign key (idAula)
      references Aula (idAula) on delete restrict on update restrict;

alter table Horario add constraint FK_Reference_53 foreign key (idCurso)
      references Curso (idCurso) on delete restrict on update restrict;

alter table PenAsig add constraint FK_Reference_33 foreign key (idPensum)
      references Pensum (idPensum) on delete restrict on update restrict;

alter table PenAsig add constraint FK_Reference_41 foreign key (idAsignatura)
      references Asignatura (idAsignatura) on delete restrict on update restrict;

alter table PenAsig add constraint FK_Reference_45 foreign key (idCiclo)
      references Ciclo (idCiclo) on delete restrict on update restrict;

alter table Pensum add constraint FK_Reference_32 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Periodo add constraint FK_Reference_34 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Persona2 add constraint FK_REFERENCE_13 foreign key (IDBANCO)
      references Banco (IDBANCO) on delete restrict on update restrict;

alter table Persona2 add constraint FK_REFERENCE_24 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Persona2 add constraint FK_REFERENCE_7 foreign key (Edo_IDEDOCIVIL)
      references EdoCivil (IDEDOCIVIL) on delete restrict on update restrict;

alter table PrelaAsig add constraint FK_Reference_46 foreign key (idPenAsig)
      references PenAsig (idPenAsig) on delete restrict on update restrict;

alter table PrelaAsig add constraint FK_Reference_47 foreign key (idAsignatura)
      references Asignatura (idAsignatura) on delete restrict on update restrict;

alter table ProgEstudio add constraint FK_Reference_29 foreign key (idEmpleado)
      references Empleado (idEmpleado) on delete restrict on update restrict;

alter table Rol add constraint FK_REFERENCE_22 foreign key (Edo_idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Usuario add constraint FK_REFERENCE_1 foreign key (IDROL)
      references Rol (IDROL) on delete restrict on update restrict;

alter table Usuario add constraint FK_REFERENCE_15 foreign key (idPersona)
      references Persona2 (idPersona) on delete restrict on update restrict;

alter table Usuario add constraint FK_REFERENCE_21 foreign key (Edo_idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table log add constraint FK_REFERENCE_23 foreign key (IDUSUARIO)
      references Usuario (IDUSUARIO) on delete restrict on update restrict;

