create database pobreza;

use pobreza;

create table usuario(
id_usuario int primary key auto_increment,
nome varchar(255) ,
email varchar(255) ,
senha varchar(100) 
);


drop table  usuario;
select * from usuario;
select * from funcionarios;

create table funcionarios(
id_usuario int primary key auto_increment,
nome varchar(255) ,
email varchar(255) ,
senha varchar(100),
data_nasc date, 
cargo varchar(50),
cpf char(11) 
);

insert into funcionarios (nome,email,senha,data_nasc,cargo,cpf) values ('matheus','matheus@gmail.com','1234321','','funcionario','21312312334');

drop table funcionarios;

select * from funcionarios;

create table empresas(
id_empresas int primary key auto_increment,
nome varchar(255) ,
email varchar(255) ,
senha varchar(100) 
);

drop table empresas;

create table empresas(
id_empresas int primary key auto_increment,
nome varchar(255) not null,
funcao varchar(255) not null,
descricao varchar(255) not null,
requisitos varchar(255) not null,
contato char(15) not null,
cnpj char(20) not null,
endereco varchar(255) not null,
carga_horaria varchar(30),
faixa_salario varchar(255) not null
);

select * from empresas;

create table candidatura(
id_candidatura int primary key auto_increment,
nome varchar(255),
email varchar(255),
data_nasc date,
telefone char(15),
cpf char(11),
escolaridade varchar(30),
experiencia text,
formacao varchar(100),
cep char(11)
);

select * from candidatura;

drop table candidatura;




