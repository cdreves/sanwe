/* This scripts creates sanwe model
 * Maybe it should be translated to english
 * however, objects in the app code is in english language
 */

create table Paciente (
id  serial unique,
nombre varchar(150) unique,
tipo_animal integer ,
tipo_raza integer ,
fecha_nacimiento date /* fecha actual - fecha nacimiento, se obtiene el campo edad */,
sexo varchar(15) ,
is_castrado boolean ,
inscripcion varchar(100) ,
codigo_chip varchar(100) ,
comentarios text ,
foto varchar(200) ,
estado integer ,
primary key (id, nombre)
);
comment on column Paciente.fecha_nacimiento is 'fecha actual - fecha nacimiento, se obtiene el campo edad';

create table Ficha_medica (
id  serial unique ,
id_paciente integer unique ,
nombre_paciente varchar(150) unique ,
id_atencion integer ,
id_usuario integer ,
inicio timestamp ,
fin timestamp ,
antecedentes text ,
diagnostico text ,
tratamiento text ,
foto varchar ,
proximo_control date ,
estado integer ,
primary key (id_paciente, nombre_paciente, id)
);

create table Cliente (
id  serial unique,
dni varchar(20) unique,
id_paciente integer ,
nombre_paciente varchar(150) not null default 'null' ,
nombre_cliente varchar(60) ,
apellido1 varchar(50) ,
apellido2 varchar(20) ,
fecha_nacimiento date ,
sexo integer ,
nacionalidad integer ,
direccion varchar(150) ,
ciudad varchar(100) ,
comuna varchar(100) ,
telefono varchar(20) ,
email varchar(60) ,
fecha_creacion date ,
password varchar(100) /* cuando se loguee e la web por primera vez se le pedira cambiar clave. */,
estado integer ,
primary key (id, dni)
);
comment on column Cliente.password is 'cuando se loguee e la web por primera vez se le pedira cambiar clave.';

create table Consumo (
id_ficha_medica integer ,
id_material integer ,
cantidad integer ,
fecha timestamp ,
primary key (id_ficha_medica, id_material)
);


create table Material (
id  serial ,
nombre varchar(200) ,
descripcion text ,
id_costo_material integer ,
primary key (id)
);

create table Atencion (
id  serial ,
id_paciente integer ,
nombre_paciente varchar(150) not null default 'null' ,
id_cliente integer ,
dni_cliente varchar(20) ,
id_clinica integer ,
id_usuario integer ,
tipo integer ,
fecha date ,
hora_inicio time ,
hora_fin time ,
antecedentes varchar ,
estado integer ,
primary key (id)
);

create table Costo_material (
id  serial ,
costo integer ,
fecha_inicio date ,
fecha_fin date ,
moneda integer ,
primary key (id)
);

create table Clinica (
id  serial ,
nombre varchar(60) ,
direccion varchar(150) ,
telefono varchar(20) ,
estado integer ,
primary key (id)
);

create table Usuario (
id  serial ,
id_clinica integer ,
tipo varchar(10) ,
dni varchar(20) ,
nombre varchar ,
apellido1 varchar(50) ,
apellido2 varchar(50) ,
fecha_nacimiento date ,
sexo integer ,
nacionalidad integer ,
direccion varchar(150) ,
email varchar(60) ,
fecha_creacion date ,
password varchar(100) ,
estado integer ,
primary key (id)
);

alter table Ficha_medica add foreign key (id_paciente) references Paciente (id);
alter table Ficha_medica add foreign key (nombre_paciente) references Paciente (nombre);
alter table Ficha_medica add foreign key (id_atencion) references Atencion (id);
alter table Ficha_medica add foreign key (id_usuario) references Usuario (id);
alter table Cliente add foreign key (id_paciente) references Paciente (id);
alter table Cliente add foreign key (nombre_paciente) references Paciente (nombre);
alter table Consumo add foreign key (id_ficha_medica) references Ficha_medica (id);
alter table Consumo add foreign key (id_material) references Material (id);
alter table Material add foreign key (id_costo_material) references Costo_material (id);
alter table Atencion add foreign key (id_paciente) references Paciente (id);
alter table Atencion add foreign key (nombre_paciente) references Paciente (nombre);
alter table Atencion add foreign key (id_cliente) references Cliente (id);
alter table Atencion add foreign key (dni_cliente) references Cliente (dni);
alter table Atencion add foreign key (id_clinica) references Clinica (id);
alter table Atencion add foreign key (id_usuario) references Usuario (id);
alter table Usuario add foreign key (id_clinica) references Clinica (id);
