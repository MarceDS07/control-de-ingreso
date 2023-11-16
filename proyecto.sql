CREATE DATABASE proyecto;
USE proyecto;
create table persona(
    ci int primary key,
    nombre varchar(100),
    apellido varchar(100),
    tipo enum(
        'alumno',
        'docente',
        'no docente',
        'administrador'
    ),
    registro datetime DEFAULT CURRENT_TIMESTAMP
)engine=InnoDB;
create table ingreso(
    id int auto_increment,
    cedula int,
    fecha datetime DEFAULT CURRENT_TIMESTAMP,
    primary key (id),
    foreign key (cedula) references persona(ci)
)engine=InnoDB;
create table ingresoInvitado(
    id int auto_increment,
    cedula int,
    fecha datetime DEFAULT CURRENT_TIMESTAMP,
    primary key (id)
);
INSERT INTO `persona`(`ci`, `nombre`, `apellido`, `tipo`) VALUES ('54174542','Marcelo','de Souza','administrador')