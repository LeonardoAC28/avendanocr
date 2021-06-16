Create database avendanocr;
use avendanocr;
create table usuarios(
	id int Auto_increment primary key,
	nombre_completo varchar(50);
	correo varchar(30);
	usuario varchar(20);
	contrasena varchar(20);
);
INSERT INTO `usuarios`(`nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
('leonardocruz','l16100172@nlaredo.tecnm.mx','leonardo','16100172'),
('jonathan avendano','marck4_@hotmail.com','jonathan','123456789'),
('leonardo,avendanocr@hotmail.com','leonardocruz','avendano');