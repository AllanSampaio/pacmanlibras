create table if not exists tb_contato (

nome varchar (100) not null,
email varchar (60) not null,
mensagem text (500) not null

)default charset = utf8;

create table if not exists  tb_cadastro (

id int auto_increment not null primary key, 
nome varchar (100) not null,
email varchar (60) not null,
senha varchar (12) not null,
confsenha varchar (12) not null,
telefone varchar (15),
perfil varchar (20) not null


)default charset = utf8;


