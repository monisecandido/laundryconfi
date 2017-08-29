create database laundryconfi;
 use laundryconfi;

create table franquia (
id int AUTO_INCREMENT PRIMARY key,
rua varchar(30) not null,
numeroloja int NOT NULL,
cidade VARCHAR(30) NOT NULL,
bairro VARCHAR(14) NOT NULL,
estado VARCHAR(14) NOT NULL,
telefone VARCHAR(12) not null,
horario datetime NOT NULL
);

create table contato(
id int AUTO_INCREMENT PRIMARY key,
nome varchar(30) not null,
email varchar(30) not null,
estado varchar(30) not null,
mensagem varchar(250),
assunto varchar(20),
telefone VARCHAR(12) not null,
id_franquia int,
FOREIGN key (id_franquia) references franquia (id)
);

CREATE TABLE usuario(
id int AUTO_INCREMENT primary key,
nome VARCHAR(30) NOT NULL,
sobrenome VARCHAR(30) NOT NULL,
telefone VARCHAR(12) NOT NULL,
cpf VARCHAR(14) NOT NULL,
email VARCHAR(20) NOT NULL,
senha VARCHAR(14) NOT NULL

);

CREATE TABLE delivery (
id int primary key,
cidade VARCHAR(30) NOT NULL,
id_usu int NOT NULL,
estado VARCHAR(14) NOT NULL,
bairro VARCHAR(14) NOT NULL,
numeroCasa int NOT NULL,
FOREIGN KEY (id_usu) references usuario(id)
);

create table tiposervico(
id int AUTO_INCREMENT PRIMARY key,
tipo varchar(20) NOT NULL,
valor decimal(10,2) NOT NULL
);


CREATE TABLE pedido (
quantidadeServico int NOT NULL,
dataSolicitacao datetime NOT NULL,
dataEntrega date NOT NULL,
id_usu int, 
id_del int,
id_tipo int, 
PRIMARY key (id_usu, dataSolicitacao),
FOREIGN KEY (id_usu) references usuario(id),
FOREIGN KEY (id_del) references delivery(id),
FOREIGN KEY (id_tipo) references tiposervico(id)
);






