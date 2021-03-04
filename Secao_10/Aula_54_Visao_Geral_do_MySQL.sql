use db_php7;

create  table tb_usuarios(
	idusuario int not null auto_increment primary key,
    deslogim varchar(64) not null,
    dessenha varchar(256) not null,
    dtcadastro timestamp not null default current_timestamp()
);

describe tb_usuarios;

insert into tb_usuarios (deslogim, dessenha) values('root', '!@q%y201!');

update tb_usuarios set deslogim = '123456' where idusuario = 1;