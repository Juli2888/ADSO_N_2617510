create database registro;
use registro;
create table usuarios ( nombre varchar (30),
correo varchar (40),
confirmar_correo varchar (40),
contraseña varchar (30),
confirmar_contraseña varchar (30),
direccion varchar (40),
movil int (11),
primary key (movil)

);
describe usuarios;
select * from usuarios;