Create database avendanocr;
use avendanocr;
create table usuarios
(
	id int Auto_increment primary key,
	nombre_completo varchar(50);
	correo varchar(30);
	usuario varchar(20);
	contrasena varchar(20);
);
INSERT INTO `usuarios`(`nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
('leonardo cruz','l16100172@nlaredo.tecnm.mx','leonardo','avendano'),
('jonathan avendano','marck4_@hotmail.com','jonathan','16100172'),
('sofia','sofia@hotmail.com','sofia123','16100172');