CREATE DATABASE proyecto;
USE proyecto;
create table persona(
    ci int primary key,
    nombre varchar(100),
    apellido varchar(100),
    tipo enum(
        'Alumno',
        'Docente',
        'no Docente',
        'administrador',
        'invitado'
    )
);
create table ingreso(
    id int auto_increment,
    cedula int,
    fecha date,
    hora time,
    primary key (id),
    foreign key (cedula) references persona(ci)
);