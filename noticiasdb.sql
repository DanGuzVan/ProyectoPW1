-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2020 a las 06:20:43
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticiasdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `clave` varchar(15) NOT NULL,
  `enb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `clave`, `enb`) VALUES
(1, 'root', 'root', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `noticias_id` int(11) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `contenido` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `noticias_id`, `autor`, `contenido`, `fecha`) VALUES
(1, 3, 'Luis Eduardo', 'Eso es, muy bien las Aguilas.', '2020-02-04 00:08:19'),
(2, 8, 'Andres', 'Las autoridades deberian apurarse y atraparlo ya.', '2020-02-04 08:09:05'),
(3, 2, 'María', 'Buenas noticias para huajuapan, ¡Felicidades!', '2020-02-05 10:26:40'),
(4, 9, 'Luisa Andrea', 'Que buena historia', '2020-02-10 03:29:23'),
(5, 4, 'Andres', 'Mucha suerte a los dos atletas', '2020-02-11 00:11:11'),
(6, 8, 'Manuel', 'Atencion con esta noticia', '2020-02-11 00:44:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `autor` varchar(25) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` int(11) NOT NULL DEFAULT 0,
  `contenido` varchar(1000) NOT NULL,
  `puntos` int(11) NOT NULL DEFAULT 0,
  `categoria` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `nombre`, `autor`, `fecha`, `img`, `contenido`, `puntos`, `categoria`) VALUES
(1, 'Incrementa la gasolina', 'Guzmán Jiménez Daniel ', '2020-01-03 14:40:19', 1, 'Apartir del Miercoles 1 de enero la gasolina tendra un incremento de hasta el 12%, esto debido a la constante devaluacion del peso mexicano contra el dolar.', 15, 2),
(2, 'Casa de Cultura', 'Morales García Luisa', '2020-01-08 03:20:43', 2, 'El pasado sabado 4 de enero del presente se inauguro la nueva casa de cultura en huajupan de leon, oaxaca.\r\nDonde se estaran impartiendo clases de danza, artesanias y musica para preservar la  cultura  oaxaqueña', 6, 3),
(3, 'Gran Triunfo del America', 'Guzmán Ramirez Enrique', '2020-01-13 10:37:52', 3, 'El pasasdo domingo 12 del presente el club deportivo America se enfrento con el club Cruz Azul en el estadio Azteca, apesar de que el encuentro estuvo rendido al final el club America reafirmo su dominio con un contundente 3-0.', 31, 1),
(4, 'Canelo vs Floyd', 'Guzmán Ramírez Enrique', '2020-01-15 15:12:34', 4, 'En una entrevista llevada a cabo el pasado martes 14 de enero al Canelo Alvarez, este sugirio que podriamos volver a ver al Canelo en el ring con Floyd Meywather para dar un gran espectaculo  y prometio esta ves no habria revancha.', 8, 1),
(5, 'Guelaguetza Fomentada', 'Morales García Luisa', '2020-01-18 10:23:32', 5, 'A traves de una entrevista el encargado del  turismo en el estado de oaxaca delcaro un incremente en el presupuesto para la festividad oaxaqueña mas grande de todas, fomentando asi la cultura y el turismo.', 12, 3),
(6, 'Problemas entre USA e Iran', 'Guzmán Jiménez Daniel', '2020-01-21 12:31:14', 6, 'El pasado domingo 19 de enero las relaciones entre USA e Iran fueron lesionadas cuando un artefacto detono cerca de la embajada de USA en Iran, esto provoco la furia del gigante mientras su presidente Trump afirmaba que sancionarian a los culpables.', 3, 2),
(7, 'Juegos Olimpicos', 'Guzmán Ramírez Enrique', '2020-01-24 12:29:09', 7, 'Los juegos olimpicos se aproximan cada vez mas y la cita es en tokyo, Mexico empieza a convocar a sus mejores  atletas para cada una de las disciplinas', 19, 1),
(8, 'Sigue profugo', 'Guzmán Jiménez Daniel ', '2020-02-11 05:19:45', 8, 'El diputado de Oaxaca Sigue profugo a la fecha', 16, 2),
(9, 'UTM Fomenta Eventos Culturales', 'Morales García Luisa', '2020-02-02 10:45:29', 9, 'A traves de un comunicado el vice-rector administrativo informo que a partir del proximo lunes 3 de febrero la utm fomentara actividades culturales a traves de su programa \"Actividades culturales de la Mixteca\".', 32, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
