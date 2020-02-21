/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     13/11/2019 22:08:06                          */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists ADMIN_USUARIOS;

/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             INT not null auto_increment,
   CLAVE                VARCHAR(30),
   primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table: ADMIN_USUARIOS                                        */
/*==============================================================*/
create table ADMIN_USUARIOS
(
   ID_USUARIO           INT not null auto_increment,
   CLAVE                VARCHAR(30),
   VOTO                 INT,
   VOTO2                INT,
   primary key (ID_USUARIO)
);

