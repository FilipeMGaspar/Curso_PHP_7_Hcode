CREATE PROCEDURE `sp_usuarios_insert` (
pdeslogim varchar(64),
pdessenha varchar(256)
)
BEGIN
 insert into tb_usuarios (deslogim, dessenha) values(pdeslogim, pdessenha);
 
 select * from tb_usuarios where idusuario = LAST_INSERT_ID();
 
END
