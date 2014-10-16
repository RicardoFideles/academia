-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16-Out-2014 às 00:09
-- Versão do servidor: 5.6.15
-- PHP Version: 5.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `championships`
--

CREATE TABLE IF NOT EXISTS `championships` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `data_encerramento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nome` int(11) NOT NULL,
  `liga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `competitors`
--

CREATE TABLE IF NOT EXISTS `competitors` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(200) NOT NULL,
  `team_id` int(10) unsigned NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `peso` int(11) NOT NULL,
  `pesocategoria_id` int(10) unsigned NOT NULL,
  `idade` int(11) NOT NULL,
  `idadecategoria_id` int(10) unsigned NOT NULL,
  `faixa_id` int(10) unsigned NOT NULL,
  `pago` int(11) NOT NULL,
  `sexo` int(11) NOT NULL,
  `teacher_id` int(10) unsigned DEFAULT NULL,
  `posicao_chave` int(11) NOT NULL,
  `pagina` int(11) NOT NULL DEFAULT '1',
  `championship_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faixas`
--

CREATE TABLE IF NOT EXISTS `faixas` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `idadecategorias`
--

CREATE TABLE IF NOT EXISTS `idadecategorias` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesocategorias`
--

CREATE TABLE IF NOT EXISTS `pesocategorias` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(100) NOT NULL,
  `peso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `team_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `nome` int(11) NOT NULL,
  `representante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `nome` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `championships`
--
ALTER TABLE `championships`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `competitors`
--
ALTER TABLE `competitors`
 ADD PRIMARY KEY (`id`), ADD KEY `team_compt_fk` (`team_id`), ADD KEY `peso_cat_fk` (`pesocategoria_id`), ADD KEY `idade_cat_fk` (`idadecategoria_id`), ADD KEY `faixa_fk` (`faixa_id`), ADD KEY `prof_fk` (`teacher_id`), ADD KEY `camp_fk` (`championship_id`);

--
-- Indexes for table `faixas`
--
ALTER TABLE `faixas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idadecategorias`
--
ALTER TABLE `idadecategorias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesocategorias`
--
ALTER TABLE `pesocategorias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
 ADD PRIMARY KEY (`id`), ADD KEY `user_teachers_fk` (`user_id`), ADD KEY `team_prof_fk` (`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `championships`
--
ALTER TABLE `championships`
ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `competitors`
--
ALTER TABLE `competitors`
ADD CONSTRAINT `camp_fk` FOREIGN KEY (`championship_id`) REFERENCES `championships` (`id`),
ADD CONSTRAINT `equipe_compt_fk` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`),
ADD CONSTRAINT `faixa_fk` FOREIGN KEY (`faixa_id`) REFERENCES `faixas` (`id`),
ADD CONSTRAINT `idade_cat_fk` FOREIGN KEY (`idadecategoria_id`) REFERENCES `idadecategorias` (`id`),
ADD CONSTRAINT `peso_cat_fk` FOREIGN KEY (`pesocategoria_id`) REFERENCES `pesocategorias` (`id`),
ADD CONSTRAINT `prof_fk` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Limitadores para a tabela `teachers`
--
ALTER TABLE `teachers`
ADD CONSTRAINT `equipe_prof_fk` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`),
ADD CONSTRAINT `admin_prof_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
