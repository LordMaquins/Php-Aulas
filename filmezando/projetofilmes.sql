-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Maio-2023 às 20:55
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetofilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

DROP TABLE IF EXISTS `filmes`;
CREATE TABLE IF NOT EXISTS `filmes` (
  `idFilme` int NOT NULL AUTO_INCREMENT,
  `nomeFilme` varchar(250) DEFAULT NULL,
  `anoFilme` varchar(15) DEFAULT NULL,
  `genero` varchar(250) DEFAULT NULL,
  `diretor` varchar(250) DEFAULT NULL,
  `roteiro` varchar(250) DEFAULT NULL,
  `elenco` varchar(250) DEFAULT NULL,
  `sinopse` varchar(250) DEFAULT NULL,
  `imagemFilme` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idFilme`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`idFilme`, `nomeFilme`, `anoFilme`, `genero`, `diretor`, `roteiro`, `elenco`, `sinopse`, `imagemFilme`) VALUES
(1, 'Guardiões da galáxiaa', '2023', 'James Gun', 'sdasdasdasdasdasdasdasdasd', 'https://www.youtube.com/watch?v=d1yNc9skssk&ab_channel=MarvelBrasil', 'http://www.impawards.com/2023/posters/guardians_of_the_galaxy_vol_three_ver2_xlg.jpg', NULL, 'Doidera'),
(2, 'asdasd', 'asdas', 'asdasd', 'dasdasd', 'asdasd', 'asdasd', 'asdasdasd', 'asdasd'),
(3, 'asdasd', 'sdasd', 'sdasda', 'asdas', 'dasdas', 'dasdas', 'dasda', 'asdasda');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
