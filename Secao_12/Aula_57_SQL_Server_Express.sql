create table tb_usuarios(
	idusuario INT NOT NULL IDENTITY PRIMARY KEY,
	deslogin VARCHAR(64) NOT NULL,
	dessenha VARCHAR(256) NOT NULL,
	dtcadastro DATETIME NOT NULL DEFAULT GETDATE()
);


insert into tb_usuarios (deslogin, dessenha) values ('user', '!a@M#K$');

select * from tb_usuarios;