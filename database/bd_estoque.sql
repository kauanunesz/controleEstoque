create database bd_estoque;
use bd_estoque;

create table tb_usuario(
	id_usuarios int auto_increment primary key ,
    nm_usuarios varchar(45) not null,
    dt_nascimento date,
    login varchar(45),
    senha text,
    setor varchar(45)
);