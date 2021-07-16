/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  11/05/2021 11:51:14                      */
/*==============================================================*/
/*==============================================================*/
/* Table : message                                              */
/*==============================================================*/
create table message (
  idmessages int primary key not null auto_increment,
  comment_subject varchar(254),
  comment_text varchar(254),
  message_status varchar(254)
);