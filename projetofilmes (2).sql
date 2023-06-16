-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Jun-2023 às 21:08
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
  `imgFilme` varchar(220) DEFAULT NULL,
  `anoFilme` varchar(15) DEFAULT NULL,
  `idGenero` int DEFAULT NULL,
  `duracao` varchar(259) NOT NULL,
  `classificacao` varchar(259) NOT NULL,
  `diretor` varchar(250) DEFAULT NULL,
  `roteiro` varchar(250) DEFAULT NULL,
  `elenco` varchar(250) DEFAULT NULL,
  `sinopse` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idFilme`),
  KEY `genero` (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`idFilme`, `nomeFilme`, `imgFilme`, `anoFilme`, `idGenero`, `duracao`, `classificacao`, `diretor`, `roteiro`, `elenco`, `sinopse`) VALUES
(53, 'Homem-Aranha: Através do aranha verso', '', '4 de junho 2023', 2, '140', 'Livre', 'Kemp Powers, Joaquim Dos Santos', 'Kemp Powers, Joaquim Dos Santos', 'Shameik Moore,  Jake Johnson (XVI), Hailee Steinfeld, Mahershala Ali, Brian Tyree Henry, Lily Tomlin, Luna Lauren Velez, John Mulaney, Nicolas Cage', 'Miles Morales está de volta para o próximo capítulo da saga Aranhaverso; uma aventura épica que vai transportar o protetor em tempo integral do Brooklyn e amigão da vizinhança Homem-Aranha através do multiverso, para unir forças com Gwen Stacy e um n'),
(3, 'Flash', 'flash.png', '10 de outubro', 0, '2h55min', '12', 'James Gunn', 'James Cameron', 'Ezra Miller', 'dasdasd'),
(54, 'OPPENHEIMER', '', '20 de Julho de ', 1, '180', '14', 'Christopher Nolan', 'Christopher Nolan', 'Cillian Murphy, Robert Downey Jr., Matt Damon,Emily Blunt.', 'Oppenheimer é um filme histórico de drama dirigido por Christopher Nolan e baseado no livro biográfico vencedor do Prêmio Pulitzer, Prometeu Americano: O Triunfo e a Tragédia de J. Robert Oppenheimer, escrito por Kai Bird e Martin J. Sherwin. Ambient'),
(55, 'Transformers: O Despertar das Feras', '', '08 de Junho  20', 2, '124', '12', ' Steven Caple Jr, Jon Hoeber, Erich Hoeber.', ' Steven Caple Jr, Jon Hoeber, Erich Hoeber.', ' Anthony Ramos, Dominique Fishback, Luna Lauren Velez ', 'Transformers: O Despertar das Feras traz mais uma aventura épica pelo universo dos Transformers. Ambientada nos anos 1990, o filme levará o público a uma aventura global cheia de ação, enquanto os Maximals, Predacons e Terrorcons se juntam à batalha '),
(56, 'Naruto shippuden', '', '2007', 3, '9 temp', 'livre', '', '', '', ''),
(57, 'Akira', '', '1988', 2, '2 temporadas', 'livre', 'Katsuhiro Ôtomo, Izo Hashimoto.', 'Katsuhiro Ôtomo, Izo Hashimoto.', 'Mitsuo Iwata, Nozomu Sasaki, Mami Koyama, Taro Ishida, Mizuho Suzuki, Tetsusho Genda.', 'Kaneda lidera uma gangue de motoqueiros, no ano de 2019, em Neo-Tokyo, que consiste da cidade de Tóquio reconstruída, depois da original ter sido destruída por uma explosão que levou à terceira guerra mundial. Ao se defrontar com outra gangue que inv'),
(58, 'Indiana Jones: A relíquia do destino', '', '29 de Junho de ', 3, '134 minutos', '14', 'James Mangold, Jez Butterworth, John-Henry Butterworth.', 'James Mangold, Jez Butterworth, John-Henry Butterworth.', 'Harrison Ford, Phoebe Waller-Bridge, Mads Mikkelsen .', 'Em Indiana Jones e a Relíquia do Destino, Indiana Jones (Harrisson Ford), famoso arqueólogo aventureiro, embarca em mais uma missão inesperada. Neste retorno do herói lendário, Indiana Jones, na quinta parcela da icônica série de filmes, encontra-se '),
(59, ' Barbie', '', '20 de Julho de ', 3, '120 minutos', 'livre', 'Greta Gerwig, Noah Baumbach.', 'Greta Gerwig, Noah Baumbach.', 'Margot Robbie, Ryan Gosling, Emma Mackey .', 'No fabuloso live-action da boneca mais famosa do mundo, acompanhamos o dia a dia em Barbieland - o mundo mágico das Barbies, onde todas as versões da boneca vivem em completa harmonia e suas únicas preocupações são encontrar as melhores roupas para p'),
(60, ' A Pequena Sereia', '', '25 de maio 2023', 3, '136 minutos', 'livre', 'Rob Marshall, David Magee.', 'Rob Marshall, David Magee.', 'Halle Bailey, Jonah Hauer-King, Melissa McCarthy .', 'Remake live action do clássico desenho animado A Pequena Sereia, de 1989, da Disney. A caçula das filhas do Rei Tritão (Javier Bardem), Ariel (Halle Bailey) é uma bela e espirituosa jovem sereia com sede de aventura. Desejando descobrir mais sobre o '),
(61, ' Besouro Azul', '', '17 de agosto 20', 2, '136 minutos', '14', 'Angel Manuel Soto .', 'Angel Manuel Soto .', 'Xolo Maridueña, Bruna Marquezine, Susan Sarandon .', 'O 14º filme do Universo Estendido da DC, baseado nos quadrinhos da DC, Besouro Azul segue o jovem mexicano Jaime Reyes (Xolo Maridueña) que, recém-formado, volta para casa cheio de aspirações para o futuro. Enquanto ele busca seu propósito no mundo, ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbgenero`
--

DROP TABLE IF EXISTS `tbgenero`;
CREATE TABLE IF NOT EXISTS `tbgenero` (
  `idGenero` int NOT NULL AUTO_INCREMENT,
  `genero` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idGenero`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(7, 'Documentário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `senha` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nome`, `email`, `senha`) VALUES
(1, 'marcus', 'mv20040908@gmail.com', '1245'),
(27, 'Jubileu', 'jubi@gmail.com', '124567'),
(22, 'Markin', 'mv20040908@gmail.com', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
