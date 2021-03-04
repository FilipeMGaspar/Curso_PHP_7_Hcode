use db_php7;

create  table tb_usuarios(
	idusuario int not null auto_increment primary key,
    deslogim varchar(64) not null,
    dessenha varchar(256) not null,
    dtcadastro timestamp not null default current_timestamp()
);