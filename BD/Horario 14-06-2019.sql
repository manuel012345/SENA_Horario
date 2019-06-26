-- drop database horario;
create database horario;
use horario;

create table pais(
idPais int auto_increment primary key,
nombre varchar (45),
estado varchar (30)
);
insert into pais (nombre) values ('Colombia');

create table regional(
idRegional int auto_increment primary key,
idPais int, foreign key (idPais) references pais (idPais),
nombre mediumtext,
estado varchar (30)
);
insert into regional(idPais,nombre,estado) values (1,'Amazonas','Activo'),
(1,'Antioquia','Activo'),
(1,'Arauca','Activo'),
(1,'Atlantico','Activo'),
(1,'Atlantico','Activo'),
(1,'Bolivar','Activo'),
(1,'Boyaca','Activo'),
(1,'Caldas','Activo'),
(1,'Caqueta','Activo'),
(1,'Casanare','Activo'),
(1,'Cauca','Activo'),
(1,'Cesar','Activo'),
(1,'Choco','Activo'),
(1,'Cordoba','Activo'),
(1,'Cundinamarca','Activo'),
(1,'Distrito Capital','Activo'),
(1,'Guajira','Activo'),
(1,'Guainia','Activo'),
(1,'Guaviare','Activo'),
(1,'Huila','Activo'),
(1,'Magdalena','Activo'),
(1,'Meta','Activo'),
(1,'Nariño','Activo'),
(1,'Norte de Santander','Activo'),
(1,'Putumayo','Activo'),
(1,'Quindio','Activo'),
(1,'Risaralda','Activo'),
(1,'San Andres','Activo'),
(1,'Santander','Activo'),
(1,'Sucre','Activo'),
(1,'Tolima','Activo'),
(1,'Valle','Activo'),
(1,'Vaupes','Activo'),
(1,'Vichada','Activo');

create table municipio(
idMunicipio int auto_increment primary key,
idRegional int, foreign key (idRegional) references regional (idRegional),
nombre varchar (45),
estado varchar (30)
);

insert into municipio (idRegional,nombre,estado) values (1,'Leticia','Activo'),
(2,'Medellin','Activo'),
(2,'Medellin Caldas','Activo'),
(2,'Rionegro','Activo'),
(2,'Apartado','Activo'),
(3,'Auraca','Activo'),
(4,'Barranquilla','Activo'),
(5,'Cartagena','Activo'),
(6,'Sogamoso','Activo'),(6,'Duitama','Activo'),
(6,'Morca','Activo'),(6,'Tunja','Activo'),(7,'Manizales','Activo'),(8,'Florencia','Activo'),(9,'Yopal','Activo'),
(10,'Popayan','Activo'),(11,'Valledupar','Activo'),(12,'Quibdo','Activo'),(13,'Monteria','Activo'),(14,'Villeta','Activo'),
(14,'Girardot','Activo'),(14,'Mosquera','Activo'),(14,'soacha','Activo'),(15,'Bogota','Activo'),(16,'Guajira','Activo'),
(16,'Fonseca','Activo'),(17,'Puerto Inirida','Activo'),(18,'San Jose ','Activo'),
(19,'Neiva','Activo'),(19,'La Plata','Activo'),(19,'Pitalito','Activo'),('20','Santa Marta','Activo'),
(20,'Santa Marta Gaira','Activo'),(21,'Villavicencio','Activo'),(22,'Pasto','Activo'),(22,'Ipiales','Activo'),(22,'Tumaco','Activo'),(23,'Cucuta','Activo'),
(24,'Puerto Asis','Activo'),(25,'San Juan de Armenia','Activo'),(25,'Armenia','Activo'),(26,'Pereira','Activo'),(26,'Dos Quebradas','Activo'),(27,'San Andres','Activo'),
(28,'Bucaramanga','Activo'),(28,'Giron','Activo'),(28,'FloridaBlanca','Activo'), (28,'Barrancabermeja','Activo'),(29,'Sincelejo','Activo'),(30,'Ibague','Activo'),
(30,'Espinal','Activo'),(31,'Cali','Activo'),(31,'Buga','Activo'),
(31,'Cartago','Activo'),(31,'Palmira','Activo'),(32,'Mitu','Activo'),(33,'Puerto Carreño','Activo');


create table sede(
idSede int auto_increment primary key,
idMunicipio int, foreign key (idMunicipio) references municipio (idMunicipio),
nombre varchar(45),
direccion varchar(45),
telefono varchar(20),
correo varchar(45),
director varchar(45),
estado varchar (30)
);

insert into sede (idMunicipio,nombre,direccion,telefono,correo,director,estado) values (2,'SENA PEDREGAL','Diagonal 104 Nro
69- 120 Barrio','3168000484','senap@p.com','Honorio','Activo' );

create table centro(
idCentro int auto_increment primary key,
idSede int, foreign key (idSede) references sede (idSede),
nombre varchar (45),
direccion varchar(45),
telefono varchar(20),
correo varchar(45),
director varchar(45),
estado varchar (30)
);
insert into centro (idSede,nombre,direccion,telefono,correo,director,estado) values (1,'MANUFACTURA AVANZADA','Diagonal 104 Nro
69- 120 Barrio','3168000484','senap@p.com','Honorio','Activo' );
create table programa(
idPrograma int auto_increment primary key,
idCentro int, foreign key (idCentro) references centro (idCentro),
nombre varchar (100),
tipoFormacion varchar (40),
horario varchar (45),
estado varchar (30)
);

insert into programa (idCentro,nombre,tipoFormacion,horario,estado) values (1,'ADSI','Presencial','Mixto','Activo');
 
 create table trimestre(
 idTrimestre int auto_increment primary key not null,
  idPrograma int, foreign key (idPrograma) references programa (idPrograma),
 descripcion varchar(30),
estado varchar (30)
 );
 
 create table competencia(
 idCompetencia int auto_increment primary key not null,
 idPrograma int, foreign key (idPrograma) references programa (idPrograma),
 nombre varchar(45),
 codigo varchar (25),
estado varchar (30)
 );
 create table resultA(
 idResultA varchar (15) primary key not null,
 idTrimestre int, foreign key (idTrimestre) references trimestre (idTrimestre),
 idCompetencia int, foreign key (idCompetencia) references competencia (idCompetencia),
 nombre varchar (50) not null,
 estado varchar (30)
 );
 
 create table actiProy(
 idActiProy int auto_increment primary key not null,
idResultA varchar(15), foreign key (idResultA) references resultA (idResultA),
 nombre varchar (45) not null,
 estado varchar (30)
 );
 
 create table ficha(
 idFicha varchar(30) primary key not null,
 idPrograma int, foreign key (idPrograma) references programa (idPrograma),
 fechaInicio date not null,
 fechaFin date not null,
 cantidadAprendiz varchar (30)

 );
create table tipoAmbiente(
idTipoAmbien int auto_increment primary key,
nombre varchar (40) not null,
estado varchar (30)
);
 
 create table ambiente(
 idAmbiente int auto_increment primary key,
 idTipoAmbien int, foreign key (idTipoAmbien) references tipoAmbiente (idTipoAmbien),
 nombre varchar (40) not null,
 capacidad varchar(20) not null
 );


 
 create table dia(
 idDia int auto_increment primary key,
 nombre varchar (30) not null,
 estado varchar (30)
 );
 create table tipoUsuario(
 idTipoUsuario int auto_increment primary key,
 tipoUsuario varchar (25) not null
 );

 create table tipoDoc(
 idTipoDoc int auto_increment primary key not null,
 tipoDocumento varchar (25) not null
 );
 
 create table usuario(
 idUsuario int auto_increment primary key,
 idTipoUsuario int, foreign key (idTipoUsuario) references tipoUsuario (idTipoUsuario),
 idTipoDoc int, foreign key (idTipoDoc) references tipoDoc (idTipoDoc),
 documento varchar (45) unique not null,
 nombre varchar (45) not null,
 apellido varchar (45) not null,
 correo varchar (45) unique not null,
 telefono varchar (25) not null,
 genero varchar (20) not null,
 password varchar (45) not null,
 estado varchar (30)
 
 );
  create table detalleUsuario(
idDetalleUsu int auto_increment primary key,
idusuario int, foreign key (idusuario) references usuario (idUsuario),
profresion varchar (100),
añosExperiencia varchar (100),
descripcion mediumtext

);

 create table detalleFicha(
 idDetalleF int auto_increment primary key not null,
 idFicha varchar(30), foreign key (idFicha) references ficha (idFicha),
 idUsuario int, foreign key (idUsuario) references usuario (idUsuario),
 jornada varchar (30) not null,
 estado varchar (30)
 );
 create table detalleAsignacion(
 idDetalleA int auto_increment primary key,
 idFicha varchar(30), foreign key (idFicha) references ficha (idFicha),
 idResultA varchar(15), foreign key (idResultA) references resultA (idResultA),
 idAmbiente int, foreign key (idAmbiente) references ambiente (idAmbiente),
 idDia int, foreign key (idDia) references dia (idDia),
 idUsuario int, foreign key (idUsuario) references usuario (idUsuario),
 horaInicio time not null,
 horaFin time not null

 );
 ----------------------------------------------------------PROCEDIMIENTOS ALMACENADOS----------------------------------------
 
 
 ----------------------LOGIN---------------------------
 DELIMITER $$
create procedure login
(	
	p_documento varchar(45),
    p_password varchar(45)
)

begin
if exists( select * from usuario where documento=p_documento  ) then
select documento,password,idTipoUsuario,CONCAT(nombre, ' ', apellido) as nombre,  'datos correctos' as mensaje from usuario where documento=p_documento;
else
select 'contraseña o usuario incorrecto' as mensaje;
	end if;
end

call login ('1020485860','victormanuel22');

select * from usuario


 ----------------------GUARDAR USUARIO---------------------------

drop procedure guardar_usuario;
DELIMITER $$
create procedure guardar_usuario
(
	p_idTipoUsuario int,
	p_idTipoDoc int,
	p_documento varchar(20),
    p_nombre varchar(45),
    p_apellido varchar(45),
    p_correo varchar(45),
    p_telefono varchar(25),
    p_genero varchar(20),
    p_password varchar(40)
)

begin
set @estado ='Activo';
insert into usuario (idTipoUsuario,idTipoDoc,documento,nombre,apellido,correo,telefono,genero,password,estado ) values
    (p_idTipoUsuario,p_idTipoDoc,p_documento,p_nombre,p_apellido,p_correo,p_telefono,p_genero,p_password,@estado);
	

end $$

call guardar_usuario ('1','1','1020485865','Victor Manuel','Castellanos Tobon','castellanos45@hotmail.com','2752362','M','victormanuel22');

select * from usuario

 ----------------------ACTUALIZAR USUARIO---------------------------
DELIMITER $$
create procedure actualizar_usuario
(
	p_idTipoUsuario int,
	p_idTipoDoc int,
    p_idDetalleUsu int,
	p_documento varchar(20),
    p_nombre varchar(45),
    p_apellido varchar(45),
    p_correo varchar(45),
    p_telefono varchar(25),
    p_genero varchar(20),
    p_password varchar(40)
)
begin
declare codigo  int;
set codigo = (select idUsuario from usuario where documento=p_documento);
		
	update usuario set idTipoUsuario=p_idTipoUsuario,idTipoDoc=p_idTipoDoc,nombre=p_nombre,apellido=p_apellido,correo=p_correo,telefono=p_telefono,genero=p_genero,password=p_password,estado=p_estado where idUsuario=codigo;

end $$

call actualizar_usuario ('1','1','1020485860','victor Manuel','Castellanos Tobon','castellanos4567@hotmail.com','2752362','M','victormanuel22','1');

select * from usuario

 ----------------------GUARDAR FICHA---------------------------
DELIMITER $$
create procedure guardar_ficha
(
	p_idFicha varchar(30),
    p_idPrograma int,
    p_fechaInicio date,
    p_fechaFin date,
    p_cantidadAprendiz varchar(30)
)
begin
	insert into ficha (idFicha,idPrograma,fechaInicio,fechaFin,cantidadAprendiz) values (p_idFicha,p_idPrograma,p_fechaInicio,p_fechaFin,p_cantidadAprendiz);

end $$

call guardar_ficha('1367004','1','2019/01/01','2021/01/01','50')

select * from programa

select * from ficha

 ----------------------LISTAR FICHA---------------------------


DELIMITER $$
create procedure listar_ficha()
begin
select
	idFicha as 'Ficha',
    fechaInicio as 'Fecha Inicio',
    fechaFin as 'Fecha Fin'
from ficha;
end$$

call listar_ficha()

 ----------------------ACTUALIZAR FICHA---------------------------

DELIMITER $$
create procedure actualizar_ficha
(
	p_idFicha varchar(30),
    p_fechaInicio date,
    p_fechaFin date,
    p_cantidadAprendiz varchar(30)
)
begin

update ficha set fechaInicio = p_fechaInicio, fechaFin = p_fechaFin, cantidadAprendiz = p_cantidadAprendiz where idFicha = p_idFicha;

END $$

-- call actualizar_ficha('1367004','2017-05-23','2019-05-23','40')

select * from ficha

 ----------------------GUARDAR DETALLE FICHA---------------------------
 
drop procedure guardar_detalleficha;
DELIMITER $$
create procedure guardar_detalleficha
(
	p_idFicha varchar(30),
    p_idUsuario int,
    p_jornada varchar(30)
    
)

begin
SET @estado='Activo';
	insert into detalleficha (idFicha,idUsuario,jornada,estado) values (p_idFicha,p_idUsuario,p_jornada,@estado);
	
    
END $$

call guardar_detalleficha ('1367004','1','Diurna')


select * from detalleficha

select * from usuario

 ----------------------ACTUALIZAR DETALLE FICHA---------------------------

DELIMITER $$
create procedure actualizar_detalleficha
(
	p_idFicha varchar(30),
    p_idUsuario int,
    p_jornada varchar(30),
    p_estado varchar(30)
)


begin

update detalleficha set idFicha= p_idFicha,idUsuario= p_idUsuario,jornada= p_jornada, estado = P_estado where idDetalleF=p_idFicha; 



END $$

-- call actualizar_detalleficha ('1367004','1','Nocturno','40')

 ----------------------ELIMINAR DETALLE FICHA---------------------------

DELIMITER $$
create procedure eliminar_detalleficha(p_idDetalleF int)
begin
UPDATE detalleficha
SET estado = 0
WHERE idDetalleF = (p_idDetalleF);
END $$

-- call eliminar_detalleficha(1)

-- select * from detalleficha

 ----------------------LISTAR DETALLE FICHA---------------------------

DELIMITER $$
create procedure listar_detalleficha()
begin
select
	idFicha as 'Ficha',
    idUsuario as 'Usuario',
    jornada as 'Jornada',
    cantidadAprendices as 'Cantidad de Aprendices',
    estado as 'Estado'
from detalleficha;
end$$

call listar_detalleficha()

 ----------------------GUARDAR DETALLE ASIGNACION---------------------------

DELIMITER $$
create procedure guardar_detalleasignacion(
	p_horaInicio time,
    p_horaFin time,
    p_idFicha varchar(30),
    p_idResultA varchar(15),
    p_idAmbiente int,
    p_idDia int,
    p_idUsuario int
)
begin

	insert into detalleasignacion values (p_horaInicio,p_horaFin,p_idFicha,p_idResultA,p_idAmbiente,p_idDia,p_idUsuario);
	
END $$

call guardar_detalleasignacion('06:00:00[a.m]','12:00:00[p.m]','1367004')

-- select * from resulta

 ----------------------GUARDAR TIPO AMBIENTE---------------------------
drop procedure guardar_tipoAmbiente;
DELIMITER $$
create procedure guardar_tipoAmbiente(
	p_nombre varchar(40)

)

begin
	SET @estado='Activo';
	insert into ambiente (nombre,estado)values (p_nombre,@estado);
	
END $$
call guardar_tipoAmbiente ('Compartido',);

INSERT INTO ambiente (nombre, estado) values ('Compartido','Activo');

 ----------------------GUARDAR AMBIENTE---------------------------

drop procedure guardar_ambiente;
DELIMITER $$
create procedure guardar_ambiente(
	p_idTipoAmbien int,
    p_nombre varchar(40),
	p_capacidad varchar(20)
)

begin

	
insert into ambiente (idTipoAmbien,nombre,capacidad)values (p_idTipoAmbien,p_nombre,p_capacidad);
	
END $$
call guardar_ambiente (1,'Jennifer','50');

-- select* from ambiente

-- select * from tipoambiente

---------------------ACTUALIZAR AMBIENTE---------------------------


DELIMITER $$
create procedure actualizar_ambiente (
	p_nombre varchar(40),
    p_tipoAmbiente varchar(30),
    p_capacidad varchar(20)
)
begin
declare codigo  int;
	if (p_nombre='' or p_tipoAmbiente='' or p_capacidad='')then
    select'<p style="color:#C40606" >Debe ingresar todos los datos para realizar una actualizacion correctamente</p>' as mensaje;
else
	if not exists(select idAmbiente from ambiente where nombre=p_nombre)then
		select '<p style="color:#C40606" >No existe el ambiente con ese nombre</p>' as mensaje;
	else
		set codigo = (select idAmbiente from ambiente where nombre=p_nombre);
		
		update ambiente set nombre=p_nombre,tipoAmbiente=p_tipoAmbiente,capacidad=p_capacidad where idAmbiente=codigo;
		select'<p style="color:green" >Ambiente actualizada correctamente</p>' as mensaje;
	end if;
end if;
END $$

-- select * from ambiente

-- call actualizar_ambiente('Jennifer','arte','45')
 
 ---------------------ELIMINAR AMBIENTE---------------------------
 
DELIMITER $$
create procedure eliminar_ambiente(p_idAmbiente int)
begin
UPDATE ambiente
SET estado = 0
WHERE idAmbiente = (p_idAmbiente);
END $$

-- call eliminar_ambiente('1')


-- falta por hacerle pruebas con datos a los procedimientos almacenados de Resultado de Aprendizaje

DELIMITER $$
create procedure guardar_resulta
(
	p_idResultA varchar(15),
    p_nombre varchar(50),
    p_idTrimestre int,
    p_idCompetencia int
)
begin
if (p_idResultA='' or p_nombre='' or p_idTrimestre='' or p_idCompetencia='')then
	select'<p style="color:#C40606" >Debe ingresar todos los datos para registrar un resultado de aprendiz</p>' as mensaje;
else
	insert into resulta(idResultA,nombre,idTrimestre,idCompetencia)values
    (p_idResultA,p_nombre,p_idTrimestre,p_idCompetencia);
	select'<p style="color:green" >Registrado correctamente</p>' as mensaje;
    end if;
END $$

-- call guardar_resulta('1','Victor manuel castellanos tobon','1','1')

use horario
select * from trimestre
select * from competencia

DELIMITER $$
create procedure eliminar_resulta
(
	p_idResultA int
)
begin
UPDATE resulta
SET estado = 0
WHERE idResultA = (p_idResultA);
END $$

-- call eliminar_resulta('1')

-- select * from resulta

DELIMITER $$
create procedure consultar_resulta
(
	p_idResultA varchar(15)
)
begin
	SELECT * FROM resulta WHERE idResultA = p_idResultA;
END $$

-- call consultar_resulta('1')

DELIMITER $$
create procedure listar_resulta()
begin
select
	idResultA as 'Resultado de aprendizaje',
    nombre as 'Nombre',
    idTrimestre as 'Trimestre',
    idCompetencia as 'Competencia',
    estado as 'estado'
from resulta;
end$$

-- call listar_resulta()

DELIMITER $$
create procedure guardar_competencia
(
    p_nombre varchar(45),
    p_codigo varchar(25)
)
begin
if (p_nombre='' or p_codigo='')  then
	select'<p style="color:#C40606" >Debe ingresar todos los datos para registrarse una competencia correctamente</p>' as mensaje;
else
	insert into competencia(nombre,codigo)values
    (p_nombre,p_codigo);
	select'<p style="color:green" >Registrado correctamente</p>' as mensaje;
end if;
END $$

-- call guardar_competencia('ADSI','1020')

DELIMITER $$
create procedure eliminar_competencia
(
p_idCompetencia int
)
begin
UPDATE competencia
SET estado = 0
WHERE idcompetencia = (p_idCompetencia);
END $$

-- call eliminar_competencia('1')

DELIMITER $$
create procedure consultar_competencia
(
	p_nombre varchar(45)
)
begin
	SELECT * FROM competencia WHERE nombre = p_nombre;
END $$

-- call consultar_competencia('ADSI')

DELIMITER $$
create procedure listar_competencia()
begin
select
	idCompetencia as 'id',
    nombre as 'Nombre de la competencia',
    codigo as 'Codigo',
    estado as 'Estado'
from competencia;
end$$

-- call listar_competencia()

-- select * from competencia

DELIMITER $$
create procedure guardar_actiproy
(
	p_idActiProy varchar(15),
    p_nombre varchar(45),
    p_idResultA varchar(15)
)
begin
if (p_idActiProy='' or p_nombre='' or p_idResultA='')  then
	select'<p style="color:#C40606" >Debe ingresar todos los datos para registrarse una actividad de proyecto</p>' as mensaje;
else
	insert into actiproy(idActiProy,nombre,idResultA)values
    (p_idActiProy,p_nombre,p_idResultA);
	select'<p style="color:green" >Registrado correctamente</p>' as mensaje;
end if;
END $$

-- call guardar_actiproy('15','emprendedor','1')

DELIMITER $$
create procedure eliminar_actiproy(p_idActiProy varchar(15))
begin
UPDATE actiproy
SET estado = 0
WHERE idActiProy = (p_idActiProy);
END $$

-- call eliminar_actiproy('')

DELIMITER $$
create procedure consultar_actiproy
(
	p_nombre varchar(30)
)
begin
	SELECT * FROM actiproy WHERE nombre = p_nombre;
END $$

-- call consultar_actiproy('emprendedor')

DELIMITER $$
create procedure listar_actiproy()
begin
select
	idActiProy as 'Actividad de proyecto',
    nombre as 'Nombre del proyecto',
    idResultA as 'Resultado de aprendizaje',
    estado as 'Estado'
from actiproy;
END $$

-- call listar_actiproy()

DELIMITER $$
create procedure guardar_trimestre
(
	p_descripcion varchar(30),
    p_idPrograma int
)
begin
if (p_descripcion='' or p_idPrograma='' )  then
	select'<p style="color:#C40606" >Debe ingresar todos los datos para registrar un nuevo trimestre</p>' as mensaje;
else
	insert into trimestre(descripcion,idPrograma)values
    (p_descripcion,p_idPrograma);
	select'<p style="color:green" >Registrado correctamente</p>' as mensaje;
end if;
END $$

-- call guardar_trimestre ('Php','1')

DELIMITER $$
create procedure eliminar_trimestre
(
	p_idTrimestre int
)
begin
UPDATE trimestre
SET estado = 0
WHERE idTrimestre = (p_idTrimestre);
END $$

-- call eliminar_trimestre('1')

DELIMITER $$
create procedure listar_trimestre()
begin
select
	idTrimestre as 'Actividad de proyecto',
    descripcion as 'Descripcion',
    idPrograma as 'Programa',
    estado as 'Estado'
from trimestre;
END $$

-- call listar_trimestre()

DELIMITER $$
CREATE procedure actualizar_trimestre
(
 p_idTrimestre int,
 p_descripcion varchar(30),
 p_idPrograma int,
 p_estado tinyint(2)
) 
begin
	update trimestre 
		set  descripcion = p_descripcion, idPrograma = p_idPrograma, estado = p_estado
	where idTrimestre = (p_idTrimestre);
END $$      

-- call actualizar_trimestre ('1','Php','1','1')

-- select * from trimestre

-- falta hacerle prueba a los procedimientos de programa 

--------------------------------GUARDAR PROGRAMA-------------------------

DELIMITER $$
create procedure guardar_programa
(
	p_idCentro int,
    p_nombre varchar(100),
    p_tipoFormacion varchar(40),
    p_horario varchar(45)
   
)
begin
set @estado='Activo';

	insert into programa(idCentro,nombre,tipoFormacion,horario,estado)values
    (p_idCentro,p_nombre,p_tipoFormacion,p_horario,@estado);
	
END $$

-- call guardar_programa('1','descontrol','diurna','12:00:00 a 06:00:00')

-- select * from programa

 DELIMITER $$
 create procedure eliminar_programa
 (
	p_idPrograma int
 )
 begin
UPDATE programa
SET estado = 0
WHERE idPrograma = (p_idPrograma);
 END $$
 
 -- call eliminar_programa('1')

DELIMITER $$
create procedure listar_programa()
begin
select
	idPrograma as 'ID',
    nombre as 'Nombre',
    tipoFormacion as 'Tipo de formacion',
    horario as 'Hora de programa',
    idCentro as 'Centro',
    estado as 'estado'
from programa;
end$$

-- call listar_programa()

DELIMITER $$
create procedure guardar_centro
(
	p_nombre varchar(45),
    p_direccion varchar(45),
    p_telefono varchar(20),
    p_correo varchar(45),
    p_director varchar(45),
    p_idSede int
)
begin
if (p_nombre='' or p_direccion='' or p_telefono='' or  p_correo='' or p_director='' or p_idSede='')  then
	select'<p style="color:#C40606" >Debe ingresar todos los datos para registrar correctamente</p>' as mensaje;
else
	insert into centro(nombre,direccion,telefono,correo,director,idSede)values
    (p_nombre,p_direccion,p_telefono,p_correo,p_director,p_idSede);
	select'<p style="color:green" >Registrado correctamente</p>' as mensaje;
end if;
END $$

-- call guardar_centro('Bello','calle 60 # 58 - 33','2752362','castellanos4567@hotmail.com','Victor','1')

DELIMITER $$
create procedure listar_centro()
begin
select
    nombre as 'Nombre',
    direccion as 'Direccion',
    telefono as 'telefono',
    correo as 'correo',
    director as 'Director',
    idSede as 'Numero de la sede',
    estado as 'estado'
from centro;
END $$

-- call listar_centro()

DELIMITER $$
create procedure eliminar_centro
(
	p_idCentro int
)
begin
UPDATE centro
SET estado = 0
WHERE idCentro = (p_idCentro);
END $$

-- call eliminar_centro('5')

DELIMITER $$
CREATE procedure actualizar_centro
(
	p_idCentro int,
	p_nombre varchar(45),
	p_direccion varchar(45),
	p_telefono varchar(20),
    p_correo varchar(45),
    p_director varchar(45),
    p_idSede int
) 
begin
	update centro 
		set  nombre = p_nombre, direccion = p_direccion, telefono = p_telefono, correo = p_correo, director = p_director, idSede = p_idSede
	where idCentro = (p_idCentro);
END $$      

-- call actualizar_centro('5','Bellos','calle 60 # 58 - 33','2752362','castellanos4567@hotmail.com','Victor','1')

DELIMITER $$
create procedure consultar_centro
(
	p_nombre varchar(30)
)
begin
	SELECT * FROM centro WHERE nombre = p_nombre;
END $$

-- call consultar_centro('Bellos')

DELIMITER $$
create procedure guardar_sede
(
	p_nombre varchar(45),
    p_direccion varchar(45),
    p_telefono varchar(20),
    p_correo varchar(45),
    p_director varchar(45),
    p_idMunicipio int
)
begin
if (p_nombre='' or p_direccion='' or p_telefono='' or  p_correo='' or p_director='' or p_idMunicipio='')  then
	select'<p style="color:#C40606" >Debe ingresar todos los datos para registrar correctamente</p>' as mensaje;
else
	insert into sede(nombre,direccion,telefono,correo,director,idMunicipio)values
    (p_nombre,p_direccion,p_telefono,p_correo,p_director,p_idMunicipio);
	select'<p style="color:green" >Registrado correctamente</p>' as mensaje;
end if;
END $$

--  call guardar_sede('Bello','calle 60 # 58 - 33','2752362','castellanos4567@hotmail.com','Victor','9')

DELIMITER $$
create procedure listar_sede()
begin
select
    nombre as 'Nombre',
    direccion as 'Direccion',
    telefono as 'telefono',
    correo as 'correo',
    director as 'Director',
    idMunicipio as 'Numero del municipio',
    estado as 'estado'
from sede;
END $$

-- call listar_sede()

DELIMITER $$
create procedure eliminar_sede
(
	p_idSede int
)
begin
UPDATE sede
SET estado = 0
WHERE idSede = (p_idSede);
END $$

-- call eliminar_sede('1')

DELIMITER $$
CREATE procedure actualizar_sede
(
	p_idSede int,
	p_nombre varchar(45),
	p_direccion varchar(45),
	p_telefono varchar(20),
    p_correo varchar(45),
    p_director varchar(45),
	p_idMunicipio int
) 
begin
	update sede 
		set  nombre = p_nombre, direccion = p_direccion, telefono = p_telefono, correo = p_correo, director = p_director, idMunicipio = p_idMunicipio
	where idSede = (p_idSede);
END $$      

-- call actualizar_sede('2','Bellos','calle 60 # 58 - 33','2752362','castellanos4567@hotmail.com','Victor','1')

DELIMITER $$
create procedure consultar_sede
(
	p_nombre varchar(30)
)
begin
	SELECT * FROM sede WHERE nombre = p_nombre;
END $$

-- call consultar_sede('Bellos')

-- select * from sede

-- select * from municipio

-- select * from programa

-- select * from centro

-- select * from actiproy

-- select * from resulta

-- select * from usuario

-- select * from detalleficha

-- select * from tipousuario

-- insert into tipodoc (tipodocumento) values
('Cédula de Ciudadania'),
('Tarjeta de Identidad')

-- select * from tipodoc

-- insert into tipousuario (tipousuario) values
('Admin'),
('Aprendiz'),
('Coordinador'),
('Instructor')

-- select * from tipousuario

-- insert into detalleusuario (profresion,añosExperiencia,descripcion) values
('Experto en C#','6 años','fsfdgsdfgsdf'),
('Experto en Java','8 años','gsdfgaergfda'),
('Coordinador'),
('Profesor')

-- select * from detalleusuario

-- insert into tipoambiente (nombre) values
('Interno'),
('Externo')

-- select * from tipoambiente

-- insert into dia (nombre) values
('Lunes'),
('Martes'),
('Miercoles'),
('Jueves'),
('Viernes'),
('Sabado'),
('Domingo')

-- insert into trimestre (descripcionm,idPrograma,estado) values
-- ('','',''),
-- ('','','')

-- select * from usuario

-- select * from centro

-- select * from programa