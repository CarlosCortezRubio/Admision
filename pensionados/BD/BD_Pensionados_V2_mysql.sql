/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     15/10/2021 5:21:55 a. m.                     */
/*==============================================================*/


drop table if exists Banco;

drop table if exists ConcPlanilla;

drop table if exists Conceptos;

drop table if exists EdoCivil;

drop table if exists EdoRegistro;

drop table if exists Genero;

drop table if exists Periodo;

drop table if exists Persona;

drop index IND_ROL on Rol;

drop table if exists Rol;

drop table if exists TipoConcepto;

drop table if exists TipoPersona;

drop index IND_USUARIO on Usuario;

drop table if exists Usuario;

drop index INDEX_LOG on log;

drop table if exists log;

drop table if exists planillaPensionado;

/*==============================================================*/
/* Table: Banco                                                 */
/*==============================================================*/
create table Banco
(
   idBanco              int not null auto_increment,
   idEdoRegistro        int,
   nomBanco             varchar(32),
   etiBanco             int,
   primary key (idBanco)
);

/*==============================================================*/
/* Table: ConcPlanilla                                          */
/*==============================================================*/
create table ConcPlanilla
(
   idConcPlanilla       int not null auto_increment,
   idConceptos          int,
   idplanillaPensionado int,
   primary key (idConcPlanilla)
);

alter table ConcPlanilla comment 'Conceptos - Planilla';

/*==============================================================*/
/* Table: Conceptos                                             */
/*==============================================================*/
create table Conceptos
(
   idConceptos          int not null auto_increment,
   idTipoConcepto       int,
   idEdoRegistro        int,
   nomConceptos         varchar(64),
   etiConceptos         varchar(64),
   mntConceptos         numeric(22,2),
   formConceptos        varchar(128),
   tipConceptos         int,
   ordConceptos         int,
   afecta_afp           int,
   afecta_snp           int,
   afecta_ipss          int,
   es_remunera          varchar(1),
   primary key (idConceptos)
);

/*==============================================================*/
/* Table: EdoCivil                                              */
/*==============================================================*/
create table EdoCivil
(
   idEdoCivil           int not null auto_increment,
   nomEdoCivil          varchar(64),
   primary key (idEdoCivil)
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
/* Table: Genero                                                */
/*==============================================================*/
create table Genero
(
   idGenero             int not null auto_increment,
   nomGenero            varchar(64),
   primary key (idGenero)
);

/*==============================================================*/
/* Table: Periodo                                               */
/*==============================================================*/
create table Periodo
(
   idPeriodo            int not null auto_increment,
   idEdoRegistro        int,
   anioPeriodo          int,
   mesPeriodo           int,
   nomPeriodo           varchar(64),
   obsPeriodo           varchar(128),
   primary key (idPeriodo)
);

/*==============================================================*/
/* Table: Persona                                               */
/*==============================================================*/
create table Persona
(
   idPersona            int not null auto_increment,
   idGenero             int,
   idEdoCivil           int,
   idBanco              int,
   idTipoPersona        int,
   idEdoRegistro        int,
   tipDocPersona        int,
   docPersona           varchar(16),
   nom1Persona          varchar(32),
   nom2Persona          varchar(32),
   ape1Persona          varchar(32),
   ape2Persona          varchar(32),
   fecNacPersona        date,
   tel1DomPersona       varchar(16),
   tel2DomPersona       varchar(16),
   emaDomPersona        varchar(64),
   codModularPersona    varchar(16),
   tipRegPersona        varchar(16),
   resPenDefPersona     varchar(16),
   fecRes               date,
   ctaBancoPersona      int,
   fntFinancPersona     varchar(16),
   idBenefactorPersona  int,
   primary key (idPersona)
);

/*==============================================================*/
/* Table: Rol                                                   */
/*==============================================================*/
create table Rol
(
   idRol                int not null auto_increment,
   idEdoRegistro        int,
   nomRol               VARCHAR(64),
   descRol              VARCHAR(64),
   primary key (idRol)
);

/*==============================================================*/
/* Index: IND_ROL                                               */
/*==============================================================*/
create index IND_ROL on Rol
(
   idRol,
   nomRol
);

/*==============================================================*/
/* Table: TipoConcepto                                          */
/*==============================================================*/
create table TipoConcepto
(
   idTipoConcepto       int not null auto_increment,
   idEdoRegistro        int,
   nomTipoConcepto      varchar(32),
   descTipoConcepto     varchar(64),
   primary key (idTipoConcepto)
);

/*==============================================================*/
/* Table: TipoPersona                                           */
/*==============================================================*/
create table TipoPersona
(
   idTipoPersona        int not null auto_increment,
   idEdoRegistro        int,
   nomTipoPersona       varchar(32),
   descTipoPersona      varchar(64),
   primary key (idTipoPersona)
);

/*==============================================================*/
/* Table: Usuario                                               */
/*==============================================================*/
create table Usuario
(
   idUsuario            int not null auto_increment,
   idPersona            int,
   idRol                int,
   idEdoRegistro        int,
   cuentaUsuario        VARCHAR(64),
   contrasenaUsuario    VARCHAR(64),
   fecCreacion          DATE,
   pregSecreta          VARCHAR(64),
   respPregSecreta      VARCHAR(64),
   primary key (idUsuario)
);

/*==============================================================*/
/* Index: IND_USUARIO                                           */
/*==============================================================*/
create index IND_USUARIO on Usuario
(
   idUsuario,
   cuentaUsuario
);

/*==============================================================*/
/* Table: log                                                   */
/*==============================================================*/
create table log
(
   idlog                int not null auto_increment,
   idUsuario            int,
   fechalog             DATE not null,
   iplog                VARCHAR(16) not null,
   accionlog            TEXT not null,
   primary key (idlog)
);

/*==============================================================*/
/* Index: INDEX_LOG                                             */
/*==============================================================*/
create index INDEX_LOG on log
(
   idlog
);

/*==============================================================*/
/* Table: planillaPensionado                                    */
/*==============================================================*/
create table planillaPensionado
(
   idplanillaPensionado int not null auto_increment,
   idPersona            int,
   idPeriodo            int,
   fecplanillaPensionado date,
   primary key (idplanillaPensionado)
);

alter table Banco add constraint FK_REFERENCE_17 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table ConcPlanilla add constraint FK_REFERENCE_8 foreign key (idConceptos)
      references Conceptos (idConceptos) on delete restrict on update restrict;

alter table ConcPlanilla add constraint FK_REFERENCE_9 foreign key (idplanillaPensionado)
      references planillaPensionado (idplanillaPensionado) on delete restrict on update restrict;

alter table Conceptos add constraint FK_REFERENCE_12 foreign key (idTipoConcepto)
      references TipoConcepto (idTipoConcepto) on delete restrict on update restrict;

alter table Conceptos add constraint FK_REFERENCE_19 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Periodo add constraint FK_REFERENCE_18 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Persona add constraint FK_REFERENCE_13 foreign key (idBanco)
      references Banco (idBanco) on delete restrict on update restrict;

alter table Persona add constraint FK_REFERENCE_14 foreign key (idTipoPersona)
      references TipoPersona (idTipoPersona) on delete restrict on update restrict;

alter table Persona add constraint FK_REFERENCE_24 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Persona add constraint FK_REFERENCE_6 foreign key (idGenero)
      references Genero (idGenero) on delete restrict on update restrict;

alter table Persona add constraint FK_REFERENCE_7 foreign key (idEdoCivil)
      references EdoCivil (idEdoCivil) on delete restrict on update restrict;

alter table Rol add constraint FK_REFERENCE_22 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table TipoConcepto add constraint FK_REFERENCE_20 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table TipoPersona add constraint FK_REFERENCE_16 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table Usuario add constraint FK_REFERENCE_1 foreign key (idRol)
      references Rol (idRol) on delete restrict on update restrict;

alter table Usuario add constraint FK_REFERENCE_15 foreign key (idPersona)
      references Persona (idPersona) on delete restrict on update restrict;

alter table Usuario add constraint FK_REFERENCE_21 foreign key (idEdoRegistro)
      references EdoRegistro (idEdoRegistro) on delete restrict on update restrict;

alter table log add constraint FK_REFERENCE_23 foreign key (idUsuario)
      references Usuario (idUsuario) on delete restrict on update restrict;

alter table planillaPensionado add constraint FK_REFERENCE_10 foreign key (idPeriodo)
      references Periodo (idPeriodo) on delete restrict on update restrict;

alter table planillaPensionado add constraint FK_REFERENCE_5 foreign key (idPersona)
      references Persona (idPersona) on delete restrict on update restrict;

