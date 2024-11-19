use tienda_musica;

create table `tienda`
(
	`id` int not null primary key,
	`nombre` varchar(20) not null,
    `marca` varchar(20) not null,
	`tipo` varchar(10) not null,
    `precio` float not null,
    `stock` int not null
);

drop table tienda;