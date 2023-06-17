-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Jun-2023 às 01:01
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
  `idFilme` int(15) NOT NULL AUTO_INCREMENT,
  `nomeFilme` varchar(250) DEFAULT NULL,
  `imgFilme` varchar(250) DEFAULT NULL,
  `anoFilme` varchar(250) DEFAULT NULL,
  `idGenero` int(11) DEFAULT NULL,
  `duracao` varchar(259) DEFAULT NULL,
  `classificacao` varchar(250) DEFAULT NULL,
  `diretor` varchar(250) DEFAULT NULL,
  `roteiro` varchar(259) DEFAULT NULL,
  `elenco` varchar(250) DEFAULT NULL,
  `sinopse` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idFilme`),
  KEY `idGenero` (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`idFilme`, `nomeFilme`, `imgFilme`, `anoFilme`, `idGenero`, `duracao`, `classificacao`, `diretor`, `roteiro`, `elenco`, `sinopse`) VALUES
(54, 'OPPENHEIMER', '', '20 de Julho de ', 1, '180', '14', 'Christopher Nolan', 'Christopher Nolan', 'Cillian Murphy, Robert Downey Jr., Matt Damon,Emily Blunt.', 'Oppenheimer e um filme historico de drama dirigido por Christopher Nolan e baseado no livro biografico vencedor do Premio Pulitzer, Prometeu Americano: O Triunfo e a Tragedia de J. Robert Oppenheimer, escrito por Kai Bird e Martin J. Sherwin. Ambient'),
(55, 'Transformers: O Despertar das Feras', '', '08 de Junho  20', 2, '124', '12', ' Steven Caple Jr, Jon Hoeber, Erich Hoeber.', ' Steven Caple Jr, Jon Hoeber, Erich Hoeber.', ' Anthony Ramos, Dominique Fishback, Luna Lauren Velez ', 'Transformers: O Despertar das Feras traz mais uma aventura epica pelo universo dos Transformers. Ambientada nos anos 1990, o filme levara o publico a uma aventura global cheia de acao, enquanto os Maximals, Predacons e Terrorcons se juntam a batalha '),
(56, 'Naruto shippuden', '', '2007', 3, '9 temp', 'livre', '', '', '', ''),
(57, 'Akira', '', '1988', 2, '2 temporadas', 'livre', 'Katsuhiro Otomo, Izo Hashimoto.', 'Katsuhiro Otomo, Izo Hashimoto.', 'Mitsuo Iwata, Nozomu Sasaki, Mami Koyama, Taro Ishida, Mizuho Suzuki, Tetsusho Genda.', 'Kaneda lidera uma gangue de motoqueiros, no ano de 2019, em Neo Tokyo, que consiste da cidade de Toquio reconstruida, depois da original ter sido destruida por uma explosao que levou a terceira guerra mundial. Ao se defrontar com outra gangue que inv'),
(58, 'Indiana Jones: A reliquia do destino', '', '29 de Junho de ', 3, '134 minutos', '14', 'James Mangold, Jez Butterworth, John-Henry Butterworth.', 'James Mangold, Jez Butterworth, John-Henry Butterworth.', 'Harrison Ford, Phoebe Waller-Bridge, Mads Mikkelsen .', 'Em Indiana Jones e a Reliquia do Destino, Indiana Jones (Harrisson Ford), famoso arqueologo aventureiro, embarca em mais uma missao inesperada. Neste retorno do heroi lendario, Indiana Jones, na quinta parcela da iconica serie de filmes, encontra-se '),
(59, ' Barbie', '', '20 de Julho de ', 3, '120 minutos', 'livre', 'Greta Gerwig, Noah Baumbach.', 'Greta Gerwig, Noah Baumbach.', 'Margot Robbie, Ryan Gosling, Emma Mackey .', 'No fabuloso live-action da boneca mais famosa do mundo, acompanhamos o dia a dia em Barbieland - o mundo magico das Barbies, onde todas as versoes da boneca vivem em completa harmonia e suas unicas preocupacoes sao encontrar as melhores roupas para p'),
(60, ' A Pequena Sereia', '', '25 de maio 2023', 3, '136 minutos', 'livre', 'Rob Marshall, David Magee.', 'Rob Marshall, David Magee.', 'Halle Bailey, Jonah Hauer-King, Melissa McCarthy .', 'Remake live action do classico desenho animado A Pequena Sereia, de 1989, da Disney. A cacula das filhas do Rei Tritao (Javier Bardem), Ariel (Halle Bailey) e uma bela e espirituosa jovem sereia com sede de aventura. Desejando descobrir mais sobre o '),
(61, ' Besouro Azul', '', '17 de agosto 20', 2, '136 minutos', '14', 'Angel Manuel Soto .', 'Angel Manuel Soto .', 'Xolo Mariduena, Bruna Marquezine, Susan Sarandon .', 'O 14 filme do Universo Estendido da DC, baseado nos quadrinhos da DC, Besouro Azul segue o jovem mexicano Jaime Reyes (Xolo Mariduena) que, recem-formado, volta para casa cheio de aspiracoes para o futuro. Enquanto ele busca seu proposito no mundo, ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgenero`
--

DROP TABLE IF EXISTS `tbgenero`;
CREATE TABLE IF NOT EXISTS `tbgenero` (
  `idGenero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbgenero`
--

INSERT INTO `tbgenero` (`idGenero`, `genero`) VALUES
(1, 'Comédia'),
(2, 'Ação'),
(3, 'Aventura'),
(4, 'Drama'),
(5, 'Terror'),
(6, 'Animação'),
(7, 'Documentário'),
(8, 'Ficção científica'),
(9, 'Comédia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
