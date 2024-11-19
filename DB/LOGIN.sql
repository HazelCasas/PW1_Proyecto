create database tienda_musica;
use tienda_musica;

create table login(
	`no_empleado` int(5) NOT NULL primary key,
    `clave` varchar(20) NOT NULL
);

INSERT INTO `login` (`no_empleado`, `clave`) values (00001, "123456");
INSERT INTO `login` (`no_empleado`, `clave`) values (00002, "5121");

drop table login;