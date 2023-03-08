CREATE TABLE persona(
  pk_persona serial primary key not null,
  nombre VARCHAR(45),
  primer_apellido VARCHAR(35) not null,
  segundo_apellido VARCHAR(35) not null,
  hora time not null,
  fecha date not null,
  activo int not null
);
 create table nino (
  pk_nino serial PRIMARY KEY not null,
  num_matricula varchar (20) not null,
  fecha_nacimiento date not null,
  fecha_baja date,
  fecha_ingreso date not null,
  fk_persona int not null,
  hora time not null,
  fecha date not null,
  activo int not null,
  foreign key(fk_persona) references persona(pk_persona)
); 
CREATE TABLE tipo_familiar(
  pk_tipo_familiar serial PRIMARY KEY NOT NULL,
  tipo_familiar VARCHAR(25) not null,
  hora time not null,
  fecha date not null,
  activo int not null
);
create table familiar (
  pk_familiar serial not null primary key,
  dni int not null,
  direccion varchar (60) not null,
  telefono varchar(15) not null,
  num_cuenta varchar not null,
  fk_tipo_familiar int not null,
  fk_persona int not null,
  hora time not null,
  fecha date not null,
  activo int not null,
  foreign key(fk_persona) references persona(pk_persona),
  foreign key(fk_tipo_familiar) references tipo_familiar(pk_tipo_familiar)
);
 create table recoger (
  pk_relacion serial primary key not null,
  fk_nino int not null,
  fk_familiar int not null,
  fech_recogida DATE NOT NULL,
  hora_recogida time not null,
  fecha DATE NOT NULL,
  hora time not null,
  activo int not null,
  foreign key (fk_nino) references nino (pk_nino),
  foreign key (fk_familiar) references familiar(pk_familiar)
);
 CREATE TABLE menu (
  pk_menu serial PRIMARY KEY not null,
  num_menu not null,
  fk_plato int not null,
  fecha date not null,
  hora time not null,
  activo int not null,
  foreign key (fk_plato) references plato(pk_plato)
);
CREATE TABLE plato (
  pk_plato serial PRIMARY KEY not null,
  nombre_plato VARCHAR(50) not null,
  fecha time not null,
  hora time not null,
  activo int not null,
  fk_ingrediente int not null,
  foreign key(fk_ingrediente) references Ingrediente(pk_ingrediente)
);
CREATE TABLE ingrediente (
  pk_ingrediente serial PRIMARY KEY not null,
  nombre_ingrediente VARCHAR(50) not null,
  fecha date not null,
  hora time not null,
  activo int not null
);
CREATE TABLE alergia (
  pk_alergia serial primary key not null,
  fk_ingrediente int not null,
  fk_nino int not null,
  fecha date not null,
  hora time not null,
  activo int not null,
  FOREIGN KEY (fk_nino) REFERENCES nino(pk_nino),
  FOREIGN KEY (fk_ingrediente) REFERENCES Ingrediente(pk_ingrediente)
);
CREATE TABLE Consumo (
  pk_consumo serial primary key not null,
  fk_nino int not null,
  fecha_consumo date not null,
  fk_plato int not null,
  num_dias int not null,
  fecha date not null,
  hora time not null,
  activo int not null,
  fk_asistencia INT NOT NULL,
  FOREIGN KEY (fk_nino) REFERENCES nino(pk_nino),
  FOREIGN KEY (fk_plato) REFERENCES plato(pk_plato),
FOREIGN KEY (fk_asistencia) REFERENCES asistencia(pk_asistencia)
);

CREATE TABLE asistencias(
  pk_asistencias SERIAL PRIMARY KEY NOT NULL,
  asistencia INT NOT NULL,
  coste_asistencia DECIMAL(8, 2) NOT NULL fk_nino INT NOT NULL,
  fecha DATE NOT NULL,
  hora DATE NOT NULL,
  activo INT NOT NULL,
  FOREIGN KEY (fk_nino) REFERENCES nino(pk_nino)
);

 CREATE TABLE enlaces(
  pk_enlaces SERIAL PRIMARY KEY NOT NULL,
  desc
  ruta VARCHAR(10000) NOT NULL,
  descripcion varchar(50) not null,
  fecha DATE NOT NULL,
  hora DATE NOT NULL,
  activo INT NOT NULL
);