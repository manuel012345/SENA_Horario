-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2019 a las 06:19:48
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horario`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_ambiente` (`p_nombre` VARCHAR(40), `p_tipoAmbiente` VARCHAR(30), `p_capacidad` VARCHAR(20))  begin
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
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_centro` (`p_idCentro` INT, `p_nombre` VARCHAR(45), `p_direccion` VARCHAR(45), `p_telefono` VARCHAR(20), `p_correo` VARCHAR(45), `p_director` VARCHAR(45), `p_idSede` INT)  begin
	update centro 
		set  nombre = p_nombre, direccion = p_direccion, telefono = p_telefono, correo = p_correo, director = p_director, idSede = p_idSede
	where idCentro = (p_idCentro);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_detalleficha` (`p_idFicha` VARCHAR(30), `p_idUsuario` INT, `p_jornada` VARCHAR(30), `p_estado` VARCHAR(30))  begin

update detalleficha set idFicha= p_idFicha,idUsuario= p_idUsuario,jornada= p_jornada, estado = P_estado where idDetalleF=p_idFicha; 



END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_ficha` (`p_idFicha` VARCHAR(30), `p_fechaInicio` DATE, `p_fechaFin` DATE, `p_cantidadAprendiz` VARCHAR(30))  begin

update ficha set fechaInicio = p_fechaInicio, fechaFin = p_fechaFin, cantidadAprendiz = p_cantidadAprendiz where idFicha = p_idFicha;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_sede` (`p_idSede` INT, `p_nombre` VARCHAR(45), `p_direccion` VARCHAR(45), `p_telefono` VARCHAR(20), `p_correo` VARCHAR(45), `p_director` VARCHAR(45), `p_idMunicipio` INT)  begin
	update sede 
		set  nombre = p_nombre, direccion = p_direccion, telefono = p_telefono, correo = p_correo, director = p_director, idMunicipio = p_idMunicipio
	where idSede = (p_idSede);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_trimestre` (`p_idTrimestre` INT, `p_descripcion` VARCHAR(30), `p_idPrograma` INT, `p_estado` TINYINT(2))  begin
	update trimestre 
		set  descripcion = p_descripcion, idPrograma = p_idPrograma, estado = p_estado
	where idTrimestre = (p_idTrimestre);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_usuario` (`p_idTipoUsuario` INT, `p_idTipoDoc` INT, `p_idDetalleUsu` INT, `p_documento` VARCHAR(20), `p_nombre` VARCHAR(45), `p_apellido` VARCHAR(45), `p_correo` VARCHAR(45), `p_telefono` VARCHAR(25), `p_genero` VARCHAR(20), `p_password` VARCHAR(40))  begin
declare codigo  int;
set codigo = (select idUsuario from usuario where documento=p_documento);
		
	update usuario set idTipoUsuario=p_idTipoUsuario,idTipoDoc=p_idTipoDoc,nombre=p_nombre,apellido=p_apellido,correo=p_correo,telefono=p_telefono,genero=p_genero,password=p_password,estado=p_estado where idUsuario=codigo;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_actiproy` (`p_nombre` VARCHAR(30))  begin
	SELECT * FROM actiproy WHERE nombre = p_nombre;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_centro` (`p_nombre` VARCHAR(30))  begin
	SELECT * FROM centro WHERE nombre = p_nombre;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_competencia` (`p_nombre` VARCHAR(45))  begin
	SELECT * FROM competencia WHERE nombre = p_nombre;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_resulta` (`p_idResultA` VARCHAR(15))  begin
	SELECT * FROM resulta WHERE idResultA = p_idResultA;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultar_sede` (`p_nombre` VARCHAR(30))  begin
	SELECT * FROM sede WHERE nombre = p_nombre;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_actiproy` (`p_idActiProy` VARCHAR(15))  begin
UPDATE actiproy
SET estado = 0
WHERE idActiProy = (p_idActiProy);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_ambiente` (`p_idAmbiente` INT)  begin
UPDATE ambiente
SET estado = 0
WHERE idAmbiente = (p_idAmbiente);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_centro` (`p_idCentro` INT)  begin
UPDATE centro
SET estado = 0
WHERE idCentro = (p_idCentro);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_competencia` (`p_idCompetencia` INT)  begin
UPDATE competencia
SET estado = 0
WHERE idcompetencia = (p_idCompetencia);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_detalleficha` (`p_idDetalleF` INT)  begin
UPDATE detalleficha
SET estado = 0
WHERE idDetalleF = (p_idDetalleF);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_programa` (`p_idPrograma` INT)  begin
UPDATE programa
SET estado = 0
WHERE idPrograma = (p_idPrograma);
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_resulta` (`p_idResultA` INT)  begin
UPDATE resulta
SET estado = 0
WHERE idResultA = (p_idResultA);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_sede` (`p_idSede` INT)  begin
UPDATE sede
SET estado = 0
WHERE idSede = (p_idSede);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_trimestre` (`p_idTrimestre` INT)  begin
UPDATE trimestre
SET estado = 0
WHERE idTrimestre = (p_idTrimestre);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_actiproy` (`p_idActiProy` VARCHAR(15), `p_nombre` VARCHAR(45), `p_idResultA` VARCHAR(15))  begin
if (p_idActiProy='' or p_nombre='' or p_idResultA='')  then
	select'<p style="color:#C40606" >Debe ingresar todos los datos para registrarse una actividad de proyecto</p>' as mensaje;
else
	insert into actiproy(idActiProy,nombre,idResultA)values
    (p_idActiProy,p_nombre,p_idResultA);
	select'<p style="color:green" >Registrado correctamente</p>' as mensaje;
end if;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_ambiente` (`p_idTipoAmbien` INT, `p_nombre` VARCHAR(40), `p_capacidad` VARCHAR(20))  begin

	
insert into ambiente (idTipoAmbien,nombre,capacidad)values (p_idTipoAmbien,p_nombre,p_capacidad);
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_centro` (`p_nombre` VARCHAR(45), `p_direccion` VARCHAR(45), `p_telefono` VARCHAR(20), `p_correo` VARCHAR(45), `p_director` VARCHAR(45), `p_idSede` INT)  begin
if (p_nombre='' or p_direccion='' or p_telefono='' or  p_correo='' or p_director='' or p_idSede='')  then
	select'<p style="color:#C40606" >Debe ingresar todos los datos para registrar correctamente</p>' as mensaje;
else
	insert into centro(nombre,direccion,telefono,correo,director,idSede)values
    (p_nombre,p_direccion,p_telefono,p_correo,p_director,p_idSede);
	select'<p style="color:green" >Registrado correctamente</p>' as mensaje;
end if;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_competencia` (IN `p_nombre` VARCHAR(45), IN `p_codigo` VARCHAR(25))  begin
set @estado='Activo';
	insert into competencia(idPrograma,nombre,codigo,estado)values
    (p_idPrograma,p_nombre,p_codigo,@estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_detalleasignacion` (`p_horaInicio` TIME, `p_horaFin` TIME, `p_idFicha` VARCHAR(30), `p_idResultA` VARCHAR(15), `p_idAmbiente` INT, `p_idDia` INT, `p_idUsuario` INT)  begin

	insert into detalleasignacion values (p_horaInicio,p_horaFin,p_idFicha,p_idResultA,p_idAmbiente,p_idDia,p_idUsuario);
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_detalleficha` (`p_idFicha` VARCHAR(30), `p_idUsuario` INT, `p_jornada` VARCHAR(30))  begin
SET @estado='Activo';
	insert into detalleficha (idFicha,idUsuario,jornada,estado) values (p_idFicha,p_idUsuario,p_jornada,@estado);
	
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_ficha` (`p_idFicha` VARCHAR(30), `p_idPrograma` INT, `p_fechaInicio` DATE, `p_fechaFin` DATE, `p_cantidadAprendiz` VARCHAR(30))  begin
	insert into ficha (idFicha,idPrograma,fechaInicio,fechaFin,cantidadAprendiz) values (p_idFicha,p_idPrograma,p_fechaInicio,p_fechaFin,p_cantidadAprendiz);

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_programa` (IN `p_idCentro` INT, IN `p_nombre` VARCHAR(100), IN `p_tipoFormacion` VARCHAR(40), IN `p_horario` VARCHAR(45))  begin
set @estado='Activo';

	insert into programa(idCentro,nombre,tipoFormacion,horario,estado)values
    (p_idCentro,p_nombre,p_tipoFormacion,p_horario,@estado);
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_resulta` (IN `p_idResultA` VARCHAR(15), IN `p_nombre` VARCHAR(50), IN `p_idTrimestre` INT, IN `p_idCompetencia` INT)  begin
set @estado='Activo';

	insert into resulta(idResultA,idTrimestre,idCompetencia,estado)values
    (p_idResultA,p_idTrimestre,p_idCompetencia,@estado);
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_sede` (`p_nombre` VARCHAR(45), `p_direccion` VARCHAR(45), `p_telefono` VARCHAR(20), `p_correo` VARCHAR(45), `p_director` VARCHAR(45), `p_idMunicipio` INT)  begin
if (p_nombre='' or p_direccion='' or p_telefono='' or  p_correo='' or p_director='' or p_idMunicipio='')  then
	select'<p style="color:#C40606" >Debe ingresar todos los datos para registrar correctamente</p>' as mensaje;
else
	insert into sede(nombre,direccion,telefono,correo,director,idMunicipio)values
    (p_nombre,p_direccion,p_telefono,p_correo,p_director,p_idMunicipio);
	select'<p style="color:green" >Registrado correctamente</p>' as mensaje;
end if;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_tipoAmbiente` (`p_nombre` VARCHAR(40))  begin
	SET @estado='Activo';
	insert into ambiente (nombre,estado)values (p_nombre,@estado);
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_trimestre` (IN `p_idPrograma` INT, IN `p_descripcion` VARCHAR(30))  begin
set @estado='Activo';

	insert into trimestre(idPrograma,descripcion,estado)values
    (p_idPrograma,p_descripcion,@estado);
	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `guardar_usuario` (`p_idTipoUsuario` INT, `p_idTipoDoc` INT, `p_documento` VARCHAR(20), `p_nombre` VARCHAR(45), `p_apellido` VARCHAR(45), `p_correo` VARCHAR(45), `p_telefono` VARCHAR(25), `p_genero` VARCHAR(20), `p_password` VARCHAR(40))  begin
set @estado ='Activo';
insert into usuario (idTipoUsuario,idTipoDoc,documento,nombre,apellido,correo,telefono,genero,password,estado ) values
    (p_idTipoUsuario,p_idTipoDoc,p_documento,p_nombre,p_apellido,p_correo,p_telefono,p_genero,p_password,@estado);
	

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_actiproy` ()  begin
select
	idActiProy as 'Actividad de proyecto',
    nombre as 'Nombre del proyecto',
    idResultA as 'Resultado de aprendizaje',
    estado as 'Estado'
from actiproy;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_centro` ()  begin
select
    nombre as 'Nombre',
    direccion as 'Direccion',
    telefono as 'telefono',
    correo as 'correo',
    director as 'Director',
    idSede as 'Numero de la sede',
    estado as 'estado'
from centro;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_competencia` ()  begin
select
	idCompetencia as 'id',
    nombre as 'Nombre de la competencia',
    codigo as 'Codigo',
    estado as 'Estado'
from competencia;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_detalleficha` ()  begin
select
	idFicha as 'Ficha',
    idUsuario as 'Usuario',
    jornada as 'Jornada',
    cantidadAprendices as 'Cantidad de Aprendices',
    estado as 'Estado'
from detalleficha;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_ficha` ()  begin
select
	idFicha as 'Ficha',
    fechaInicio as 'Fecha Inicio',
    fechaFin as 'Fecha Fin'
from ficha;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_programa` ()  begin
select
	idPrograma as 'ID',
    nombre as 'Nombre',
    tipoFormacion as 'Tipo de formacion',
    horario as 'Hora de programa',
    idCentro as 'Centro',
    estado as 'estado'
from programa;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_resulta` ()  begin
select
	idResultA as 'Resultado de aprendizaje',
    nombre as 'Nombre',
    idTrimestre as 'Trimestre',
    idCompetencia as 'Competencia',
    estado as 'estado'
from resulta;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_sede` ()  begin
select
    nombre as 'Nombre',
    direccion as 'Direccion',
    telefono as 'telefono',
    correo as 'correo',
    director as 'Director',
    idMunicipio as 'Numero del municipio',
    estado as 'estado'
from sede;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listar_trimestre` ()  begin
select
	idTrimestre as 'Actividad de proyecto',
    descripcion as 'Descripcion',
    idPrograma as 'Programa',
    estado as 'Estado'
from trimestre;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actiproy`
--

CREATE TABLE `actiproy` (
  `idActiProy` int(11) NOT NULL,
  `idResultA` varchar(15) DEFAULT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ambiente`
--

CREATE TABLE `ambiente` (
  `idAmbiente` int(11) NOT NULL,
  `idTipoAmbien` int(11) DEFAULT NULL,
  `nombre` varchar(40) NOT NULL,
  `capacidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ambiente`
--

INSERT INTO `ambiente` (`idAmbiente`, `idTipoAmbien`, `nombre`, `capacidad`) VALUES
(2, 1, 'Victor Manueel', '24'),
(3, 2, 'jennifer', '20'),
(12, 2, 'Victor Manueel', '10'),
(13, NULL, 'oscar', '5'),
(14, NULL, 'jenniferr', '6'),
(15, NULL, 'valeria', '50'),
(16, 2, 'jennifer', '100'),
(17, 2, 'valeria', '80'),
(18, 1, 'oscar', '90'),
(19, 2, 'manuel', '20'),
(20, 1, 'castellanos', '24'),
(21, 2, 'jennifer', '24'),
(22, 2, 'yeison', '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `idCentro` int(11) NOT NULL,
  `idSede` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `director` varchar(45) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`idCentro`, `idSede`, `nombre`, `direccion`, `telefono`, `correo`, `director`, `estado`) VALUES
(1, 1, 'MANUFACTURA AVANZADA', 'Diagonal 104 Nro\r\n69- 120 Barrio', '3168000484', 'senap@p.com', 'Honorio', 'Activo'),
(2, 1, 'TEXTIL', 'CRR 60 # 58 - 33', '2512961', 'textil@hotmail.com', 'Victor Manuel', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencia`
--

CREATE TABLE `competencia` (
  `idCompetencia` int(11) NOT NULL,
  `idPrograma` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `codigo` varchar(25) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `competencia`
--

INSERT INTO `competencia` (`idCompetencia`, `idPrograma`, `nombre`, `codigo`, `estado`) VALUES
(1, 3, 'cualquier cosa', '1367004', 'Activo'),
(2, 1, 'Victor', '12312321', 'Activo'),
(3, 2, 'Kevin', '1515', 'Activo'),
(4, 3, 'mateo', '25', 'Activo'),
(5, 2, 'Victor', '12345687', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleasignacion`
--

CREATE TABLE `detalleasignacion` (
  `idDetalleA` int(11) NOT NULL,
  `idFicha` varchar(30) DEFAULT NULL,
  `idResultA` varchar(15) DEFAULT NULL,
  `idAmbiente` int(11) DEFAULT NULL,
  `idDia` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalleasignacion`
--

INSERT INTO `detalleasignacion` (`idDetalleA`, `idFicha`, `idResultA`, `idAmbiente`, `idDia`, `idUsuario`, `horaInicio`, `horaFin`) VALUES
(1, '1367004', '123123', 12, 1, 1, '12:00:00', '06:00:00'),
(2, '1367003', '123123', 16, 2, 2, '12:00:00', '18:00:00'),
(3, '1367003', '12', 2, 3, 2, '12:00:00', '18:00:00'),
(4, '1367003', '12', 2, 4, 2, '12:00:00', '18:00:00'),
(5, '1367003', '12', 2, 5, 2, '12:00:00', '18:00:00'),
(6, '1367004', '12', 2, 6, 2, '18:00:00', '21:00:00'),
(7, '1367004', '12', 15, 7, 1, '06:00:00', '12:00:00'),
(8, '1367005', '123123', 13, 1, 2, '06:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleficha`
--

CREATE TABLE `detalleficha` (
  `idDetalleF` int(11) NOT NULL,
  `idFicha` varchar(30) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `jornada` varchar(30) NOT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleusuario`
--

CREATE TABLE `detalleusuario` (
  `idDetalleUsu` int(11) NOT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `profresion` varchar(100) DEFAULT NULL,
  `añosExperiencia` varchar(100) DEFAULT NULL,
  `descripcion` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalleusuario`
--

INSERT INTO `detalleusuario` (`idDetalleUsu`, `idusuario`, `profresion`, `añosExperiencia`, `descripcion`) VALUES
(1, 1, 'Experto en C#', '6 años', 'fsfdgsdfgsdf'),
(2, 2, 'Experto en Java', '8 años', 'gsdfgaergfda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE `dia` (
  `idDia` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dia`
--

INSERT INTO `dia` (`idDia`, `nombre`, `estado`) VALUES
(1, 'Lunes', NULL),
(2, 'Martes', NULL),
(3, 'Miercoles', NULL),
(4, 'Jueves', NULL),
(5, 'Viernes', NULL),
(6, 'Sabado', NULL),
(7, 'Domingo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `idFicha` varchar(30) NOT NULL,
  `idPrograma` int(11) DEFAULT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `cantidadAprendiz` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`idFicha`, `idPrograma`, `fechaInicio`, `fechaFin`, `cantidadAprendiz`) VALUES
('', 2, '0000-00-00', '0000-00-00', ''),
('1367003', 1, '2019-05-22', '2021-05-22', '100'),
('1367004', 1, '2021-09-05', '2019-09-05', '50'),
('1367005', 1, '2019-06-01', '2019-06-30', '60');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idMunicipio` int(11) NOT NULL,
  `idRegional` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idMunicipio`, `idRegional`, `nombre`, `estado`) VALUES
(1, 1, 'Leticia', 'Activo'),
(2, 2, 'Medellin', 'Activo'),
(3, 2, 'Medellin Caldas', 'Activo'),
(4, 2, 'Rionegro', 'Activo'),
(5, 2, 'Apartado', 'Activo'),
(6, 3, 'Auraca', 'Activo'),
(7, 4, 'Barranquilla', 'Activo'),
(8, 5, 'Cartagena', 'Activo'),
(9, 6, 'Sogamoso', 'Activo'),
(10, 6, 'Duitama', 'Activo'),
(11, 6, 'Morca', 'Activo'),
(12, 6, 'Tunja', 'Activo'),
(13, 7, 'Manizales', 'Activo'),
(14, 8, 'Florencia', 'Activo'),
(15, 9, 'Yopal', 'Activo'),
(16, 10, 'Popayan', 'Activo'),
(17, 11, 'Valledupar', 'Activo'),
(18, 12, 'Quibdo', 'Activo'),
(19, 13, 'Monteria', 'Activo'),
(20, 14, 'Villeta', 'Activo'),
(21, 14, 'Girardot', 'Activo'),
(22, 14, 'Mosquera', 'Activo'),
(23, 14, 'soacha', 'Activo'),
(24, 15, 'Bogota', 'Activo'),
(25, 16, 'Guajira', 'Activo'),
(26, 16, 'Fonseca', 'Activo'),
(27, 17, 'Puerto Inirida', 'Activo'),
(28, 18, 'San Jose ', 'Activo'),
(29, 19, 'Neiva', 'Activo'),
(30, 19, 'La Plata', 'Activo'),
(31, 19, 'Pitalito', 'Activo'),
(32, 20, 'Santa Marta', 'Activo'),
(33, 20, 'Santa Marta Gaira', 'Activo'),
(34, 21, 'Villavicencio', 'Activo'),
(35, 22, 'Pasto', 'Activo'),
(36, 22, 'Ipiales', 'Activo'),
(37, 22, 'Tumaco', 'Activo'),
(38, 23, 'Cucuta', 'Activo'),
(39, 24, 'Puerto Asis', 'Activo'),
(40, 25, 'San Juan de Armenia', 'Activo'),
(41, 25, 'Armenia', 'Activo'),
(42, 26, 'Pereira', 'Activo'),
(43, 26, 'Dos Quebradas', 'Activo'),
(44, 27, 'San Andres', 'Activo'),
(45, 28, 'Bucaramanga', 'Activo'),
(46, 28, 'Giron', 'Activo'),
(47, 28, 'FloridaBlanca', 'Activo'),
(48, 28, 'Barrancabermeja', 'Activo'),
(49, 29, 'Sincelejo', 'Activo'),
(50, 30, 'Ibague', 'Activo'),
(51, 30, 'Espinal', 'Activo'),
(52, 31, 'Cali', 'Activo'),
(53, 31, 'Buga', 'Activo'),
(54, 31, 'Cartago', 'Activo'),
(55, 31, 'Palmira', 'Activo'),
(56, 32, 'Mitu', 'Activo'),
(57, 33, 'Puerto Carreño', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idPais`, `nombre`, `estado`) VALUES
(1, 'Colombia', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `idPrograma` int(11) NOT NULL,
  `idCentro` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `tipoFormacion` varchar(40) DEFAULT NULL,
  `horario` varchar(45) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`idPrograma`, `idCentro`, `nombre`, `tipoFormacion`, `horario`, `estado`) VALUES
(1, 1, 'ADSI', 'Presencial', 'Mixto', 'Activo'),
(2, 1, 'cualquier cosa', 'otra cosa', 'Mixta', 'Activo'),
(3, 2, 'MER', 'Presencial', 'Diurna', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regional`
--

CREATE TABLE `regional` (
  `idRegional` int(11) NOT NULL,
  `idPais` int(11) DEFAULT NULL,
  `nombre` mediumtext,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `regional`
--

INSERT INTO `regional` (`idRegional`, `idPais`, `nombre`, `estado`) VALUES
(1, 1, 'Amazonas', 'Activo'),
(2, 1, 'Antioquia', 'Activo'),
(3, 1, 'Arauca', 'Activo'),
(4, 1, 'Atlantico', 'Activo'),
(5, 1, 'Atlantico', 'Activo'),
(6, 1, 'Bolivar', 'Activo'),
(7, 1, 'Boyaca', 'Activo'),
(8, 1, 'Caldas', 'Activo'),
(9, 1, 'Caqueta', 'Activo'),
(10, 1, 'Casanare', 'Activo'),
(11, 1, 'Cauca', 'Activo'),
(12, 1, 'Cesar', 'Activo'),
(13, 1, 'Choco', 'Activo'),
(14, 1, 'Cordoba', 'Activo'),
(15, 1, 'Cundinamarca', 'Activo'),
(16, 1, 'Distrito Capital', 'Activo'),
(17, 1, 'Guajira', 'Activo'),
(18, 1, 'Guainia', 'Activo'),
(19, 1, 'Guaviare', 'Activo'),
(20, 1, 'Huila', 'Activo'),
(21, 1, 'Magdalena', 'Activo'),
(22, 1, 'Meta', 'Activo'),
(23, 1, 'Nariño', 'Activo'),
(24, 1, 'Norte de Santander', 'Activo'),
(25, 1, 'Putumayo', 'Activo'),
(26, 1, 'Quindio', 'Activo'),
(27, 1, 'Risaralda', 'Activo'),
(28, 1, 'San Andres', 'Activo'),
(29, 1, 'Santander', 'Activo'),
(30, 1, 'Sucre', 'Activo'),
(31, 1, 'Tolima', 'Activo'),
(32, 1, 'Valle', 'Activo'),
(33, 1, 'Vaupes', 'Activo'),
(34, 1, 'Vichada', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resulta`
--

CREATE TABLE `resulta` (
  `idResultA` varchar(15) NOT NULL,
  `idTrimestre` int(11) DEFAULT NULL,
  `idCompetencia` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resulta`
--

INSERT INTO `resulta` (`idResultA`, `idTrimestre`, `idCompetencia`, `nombre`, `estado`) VALUES
('12', 2, 1, 'Victor', NULL),
('123123', 5, 3, 'cualquier cosa', 'Activo'),
('15', 5, 3, 'Victor', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `idSede` int(11) NOT NULL,
  `idMunicipio` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `director` varchar(45) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`idSede`, `idMunicipio`, `nombre`, `direccion`, `telefono`, `correo`, `director`, `estado`) VALUES
(1, 2, 'SENA PEDREGAL', 'Diagonal 104 Nro\r\n69- 120 Barrio', '3168000484', 'senap@p.com', 'Honorio', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoambiente`
--

CREATE TABLE `tipoambiente` (
  `idTipoAmbien` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoambiente`
--

INSERT INTO `tipoambiente` (`idTipoAmbien`, `nombre`, `estado`) VALUES
(1, 'Interno', 'Activo'),
(2, 'Externo', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

CREATE TABLE `tipodoc` (
  `idTipoDoc` int(11) NOT NULL,
  `tipoDocumento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodoc`
--

INSERT INTO `tipodoc` (`idTipoDoc`, `tipoDocumento`) VALUES
(1, 'Cédula de Ciudadania'),
(2, 'Tarjeta de Identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL,
  `tipoUsuario` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `tipoUsuario`) VALUES
(1, 'Admin'),
(2, 'Aprendiz'),
(3, 'Coordinador'),
(4, 'Instructor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trimestre`
--

CREATE TABLE `trimestre` (
  `idTrimestre` int(11) NOT NULL,
  `idPrograma` int(11) DEFAULT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trimestre`
--

INSERT INTO `trimestre` (`idTrimestre`, `idPrograma`, `descripcion`, `estado`) VALUES
(1, 1, 'el estudiante se encuentra ', 'Activo'),
(2, 2, 'afsdfasd', 'Activo'),
(3, 2, 'dsagfasd', 'Activo'),
(4, 3, 'gsdfgadsf', 'Activo'),
(5, 1, 'victormanuel', 'Activo'),
(6, 1, 'kevin', 'Activo'),
(7, 3, 'monqui', 'Activo'),
(8, 2, 'fasasda', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `idTipoUsuario` int(11) DEFAULT NULL,
  `idTipoDoc` int(11) DEFAULT NULL,
  `documento` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `idTipoUsuario`, `idTipoDoc`, `documento`, `nombre`, `apellido`, `correo`, `telefono`, `genero`, `password`, `estado`) VALUES
(1, 4, 1, '1020485860', 'Victor Manuel', 'Castellanos Tobon', 'Castellanos4567@hotmail.com', '2752362', 'Masculino', '$2y$10$7IJ.ZTdaSYs1rJQInGK/zOnZ.Y1Xahs62', 'Activo'),
(2, 4, 1, '1020485861', 'jennifer', 'Lopez', 'Jenifer@hotmail.com', '27523623', 'Femenino', '$2y$10$TP4IQISfWVJn06.Sknn.RetCNCrBH5lN4', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actiproy`
--
ALTER TABLE `actiproy`
  ADD PRIMARY KEY (`idActiProy`),
  ADD KEY `idResultA` (`idResultA`);

--
-- Indices de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD PRIMARY KEY (`idAmbiente`),
  ADD KEY `idTipoAmbien` (`idTipoAmbien`);

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`idCentro`),
  ADD KEY `idSede` (`idSede`);

--
-- Indices de la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD PRIMARY KEY (`idCompetencia`),
  ADD KEY `idPrograma` (`idPrograma`);

--
-- Indices de la tabla `detalleasignacion`
--
ALTER TABLE `detalleasignacion`
  ADD PRIMARY KEY (`idDetalleA`),
  ADD KEY `idFicha` (`idFicha`),
  ADD KEY `idResultA` (`idResultA`),
  ADD KEY `idAmbiente` (`idAmbiente`),
  ADD KEY `idDia` (`idDia`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `detalleficha`
--
ALTER TABLE `detalleficha`
  ADD PRIMARY KEY (`idDetalleF`),
  ADD KEY `idFicha` (`idFicha`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `detalleusuario`
--
ALTER TABLE `detalleusuario`
  ADD PRIMARY KEY (`idDetalleUsu`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`idDia`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`idFicha`),
  ADD KEY `idPrograma` (`idPrograma`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`idMunicipio`),
  ADD KEY `idRegional` (`idRegional`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idPais`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`idPrograma`),
  ADD KEY `idCentro` (`idCentro`);

--
-- Indices de la tabla `regional`
--
ALTER TABLE `regional`
  ADD PRIMARY KEY (`idRegional`),
  ADD KEY `idPais` (`idPais`);

--
-- Indices de la tabla `resulta`
--
ALTER TABLE `resulta`
  ADD PRIMARY KEY (`idResultA`),
  ADD KEY `idTrimestre` (`idTrimestre`),
  ADD KEY `idCompetencia` (`idCompetencia`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`idSede`),
  ADD KEY `idMunicipio` (`idMunicipio`);

--
-- Indices de la tabla `tipoambiente`
--
ALTER TABLE `tipoambiente`
  ADD PRIMARY KEY (`idTipoAmbien`);

--
-- Indices de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  ADD PRIMARY KEY (`idTipoDoc`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  ADD PRIMARY KEY (`idTrimestre`),
  ADD KEY `idPrograma` (`idPrograma`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `documento` (`documento`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `idTipoUsuario` (`idTipoUsuario`),
  ADD KEY `idTipoDoc` (`idTipoDoc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actiproy`
--
ALTER TABLE `actiproy`
  MODIFY `idActiProy` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ambiente`
--
ALTER TABLE `ambiente`
  MODIFY `idAmbiente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `centro`
--
ALTER TABLE `centro`
  MODIFY `idCentro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `competencia`
--
ALTER TABLE `competencia`
  MODIFY `idCompetencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detalleasignacion`
--
ALTER TABLE `detalleasignacion`
  MODIFY `idDetalleA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `detalleficha`
--
ALTER TABLE `detalleficha`
  MODIFY `idDetalleF` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleusuario`
--
ALTER TABLE `detalleusuario`
  MODIFY `idDetalleUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `dia`
--
ALTER TABLE `dia`
  MODIFY `idDia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `idPrograma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `regional`
--
ALTER TABLE `regional`
  MODIFY `idRegional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `idSede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipoambiente`
--
ALTER TABLE `tipoambiente`
  MODIFY `idTipoAmbien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  MODIFY `idTipoDoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `trimestre`
--
ALTER TABLE `trimestre`
  MODIFY `idTrimestre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actiproy`
--
ALTER TABLE `actiproy`
  ADD CONSTRAINT `actiproy_ibfk_1` FOREIGN KEY (`idResultA`) REFERENCES `resulta` (`idResultA`);

--
-- Filtros para la tabla `ambiente`
--
ALTER TABLE `ambiente`
  ADD CONSTRAINT `ambiente_ibfk_1` FOREIGN KEY (`idTipoAmbien`) REFERENCES `tipoambiente` (`idTipoAmbien`);

--
-- Filtros para la tabla `centro`
--
ALTER TABLE `centro`
  ADD CONSTRAINT `centro_ibfk_1` FOREIGN KEY (`idSede`) REFERENCES `sede` (`idSede`);

--
-- Filtros para la tabla `competencia`
--
ALTER TABLE `competencia`
  ADD CONSTRAINT `competencia_ibfk_1` FOREIGN KEY (`idPrograma`) REFERENCES `programa` (`idPrograma`);

--
-- Filtros para la tabla `detalleasignacion`
--
ALTER TABLE `detalleasignacion`
  ADD CONSTRAINT `detalleasignacion_ibfk_1` FOREIGN KEY (`idFicha`) REFERENCES `ficha` (`idFicha`),
  ADD CONSTRAINT `detalleasignacion_ibfk_2` FOREIGN KEY (`idResultA`) REFERENCES `resulta` (`idResultA`),
  ADD CONSTRAINT `detalleasignacion_ibfk_3` FOREIGN KEY (`idAmbiente`) REFERENCES `ambiente` (`idAmbiente`),
  ADD CONSTRAINT `detalleasignacion_ibfk_4` FOREIGN KEY (`idDia`) REFERENCES `dia` (`idDia`),
  ADD CONSTRAINT `detalleasignacion_ibfk_5` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `detalleficha`
--
ALTER TABLE `detalleficha`
  ADD CONSTRAINT `detalleficha_ibfk_1` FOREIGN KEY (`idFicha`) REFERENCES `ficha` (`idFicha`),
  ADD CONSTRAINT `detalleficha_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `detalleusuario`
--
ALTER TABLE `detalleusuario`
  ADD CONSTRAINT `detalleusuario_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `ficha_ibfk_1` FOREIGN KEY (`idPrograma`) REFERENCES `programa` (`idPrograma`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`idRegional`) REFERENCES `regional` (`idRegional`);

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`idCentro`) REFERENCES `centro` (`idCentro`);

--
-- Filtros para la tabla `regional`
--
ALTER TABLE `regional`
  ADD CONSTRAINT `regional_ibfk_1` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`);

--
-- Filtros para la tabla `resulta`
--
ALTER TABLE `resulta`
  ADD CONSTRAINT `resulta_ibfk_1` FOREIGN KEY (`idTrimestre`) REFERENCES `trimestre` (`idTrimestre`),
  ADD CONSTRAINT `resulta_ibfk_2` FOREIGN KEY (`idCompetencia`) REFERENCES `competencia` (`idCompetencia`);

--
-- Filtros para la tabla `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `sede_ibfk_1` FOREIGN KEY (`idMunicipio`) REFERENCES `municipio` (`idMunicipio`);

--
-- Filtros para la tabla `trimestre`
--
ALTER TABLE `trimestre`
  ADD CONSTRAINT `trimestre_ibfk_1` FOREIGN KEY (`idPrograma`) REFERENCES `programa` (`idPrograma`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idTipoDoc`) REFERENCES `tipodoc` (`idTipoDoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
