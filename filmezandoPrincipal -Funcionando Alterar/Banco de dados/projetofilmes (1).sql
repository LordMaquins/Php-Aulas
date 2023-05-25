-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Maio-2023 às 23:32
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

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
  `idFIlme` int(15) NOT NULL AUTO_INCREMENT,
  `nomeFilme` varchar(250) DEFAULT NULL,
  `imgFilme` varchar(250) DEFAULT NULL,
  `anoFilme` varchar(250) DEFAULT NULL,
  `idGenero` int(11) DEFAULT NULL,
  `duracao` varchar(250) DEFAULT NULL,
  `classificacao` varchar(250) DEFAULT NULL,
  `diretor` varchar(250) DEFAULT NULL,
  `roteiro` varchar(250) DEFAULT NULL,
  `elenco` varchar(250) DEFAULT NULL,
  `sinopse` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idFIlme`),
  KEY `idGenero` (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`idFIlme`, `nomeFilme`, `imgFilme`, `anoFilme`, `idGenero`, `duracao`, `classificacao`, `diretor`, `roteiro`, `elenco`, `sinopse`) VALUES
(1, 'flash', 'flash.png', '21 de julho', 3, '2h55', 'Livre', 'Sei la', 'Muito menos', 'Ezra miller', 'Flash point muito pika');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgenero`
--

DROP TABLE IF EXISTS `tbgenero`;
CREATE TABLE IF NOT EXISTS `tbgenero` (
  `idGen` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idGen`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbgenero`
--

INSERT INTO `tbgenero` (`idGen`, `genero`) VALUES
(1, 'Drama'),
(2, 'Ação'),
(3, 'Aventura'),
(4, 'Terror'),
(5, 'Animação'),
(6, 'Documentário');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
