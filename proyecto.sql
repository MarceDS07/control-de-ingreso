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
        'administrador',
        'invitado'
    )
)engine=InnoDB;
create table ingreso(
    id int auto_increment,
    cedula int,
    fecha date,
    hora time,
    primary key (id),
    foreign key (cedula) references persona(ci)
)engine=InnoDB;
create table ingresoInvitado(
    id int auto_increment,
    cedula int,
    fecha date,
    hora time,
    primary key (id)
);
INSERT INTO `persona`(`ci`, `nombre`, `apellido`, `tipo`) VALUES ('54174542','Marcelo','de Souza','administrador')