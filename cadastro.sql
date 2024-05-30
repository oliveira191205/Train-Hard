create database cadastrados;
show databases; 
use cadastrados;
create table usuarios(
codigo int(5) not null auto_increment, 
nome varchar(30) not null,
login varchar(40), 
senha varchar (40),
primary key (codigo));
