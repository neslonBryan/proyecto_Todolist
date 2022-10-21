create database db_todolist;
use db_todolist;

create table tusuario(
email char(30) not null primary key,
contraseña char(30) not null
);

create table ttarea(
id int primary key auto_increment,
email char (30),
titulotarea char(60) not null, 
foreign key (email) references tusuario(email)
);