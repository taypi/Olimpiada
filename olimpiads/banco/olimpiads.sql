-- phpMyAdmin SQL Dump
-- version 4.3.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 04-Maio-2015 às 14:51
-- Versão do servidor: 5.5.42
-- PHP Version: 5.4.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `olimpiads`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `id_alunos` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `id_grupos` int(11) NOT NULL,
  `al_pontos` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id_alunos`, `usuario`, `senha`, `id_classe`, `id_grupos`, `al_pontos`) VALUES
(1, 'seta', 'senha', 1, 1, 0),
(2, 'kouga', 'senha', 4, 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id_classes` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `classes`
--

INSERT INTO `classes` (`id_classes`, `avatar`, `descricao`) VALUES
(1, 'guerreiro', 'O guerreiro é o defensor do grupo. Com seu grande escudo ele pode proteger um aliado de um ataque inimigo.'),
(2, 'ladino', 'O ladino usa de suas artimanhas para se manter na frente. Ele pode usar sua adaga escondida para atacar furtivamente um adversário e prejudicá-lo.'),
(3, 'clérigo', 'O clérigo é aquele mais próximo das divindades. Com o poder de suas preces, o clérigo consegue chamar o auxílio divino para lhe dar a luz sobre seus problemas.'),
(4, 'mago', 'O mago é o estudioso das artes arcanas. Com seu conhecimento mágico o mago pode alterar o tempo, conseguindo assim mais tempo para finalizar sua missão.'),
(5, 'arqueira', 'A arqueira é a vigilante que tudo vê. Com seus olhos élficos e arco de longo alcance, a arqueira pode atacar e atrasar os demônios vindo do portal.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id_grupos` int(11) NOT NULL,
  `gp_pontos` int(11) DEFAULT NULL,
  `num_habilidades` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id_grupos`, `gp_pontos`, `num_habilidades`) VALUES
(1, NULL, 3),
(2, NULL, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE IF NOT EXISTS `questoes` (
  `id_questoes` int(11) NOT NULL,
  `enunciado` varchar(1000) NOT NULL,
  `duracao` int(11) NOT NULL,
  `tempo_inicio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE IF NOT EXISTS `resposta` (
  `id_resposta` int(11) NOT NULL,
  `texto` varchar(500) DEFAULT NULL,
  `is_correta` tinyint(1) NOT NULL,
  `id_questoes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tempo`
--

CREATE TABLE IF NOT EXISTS `tempo` (
  `questoes_id_questoes` int(11) NOT NULL,
  `alunos_id_alunos` int(11) NOT NULL,
  `qnt_tempo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_alunos`), ADD KEY `fk_alunos_classes_idx` (`id_classe`), ADD KEY `fk_alunos_grupos1_idx` (`id_grupos`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id_classes`);

--
-- Indexes for table `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupos`);

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id_questoes`);

--
-- Indexes for table `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`id_resposta`), ADD KEY `fk_resposta_questoes1_idx` (`id_questoes`);

--
-- Indexes for table `tempo`
--
ALTER TABLE `tempo`
  ADD PRIMARY KEY (`questoes_id_questoes`,`alunos_id_alunos`), ADD KEY `fk_questoes_has_alunos_alunos1_idx` (`alunos_id_alunos`), ADD KEY `fk_questoes_has_alunos_questoes1_idx` (`questoes_id_questoes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_alunos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id_classes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id_questoes` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
ADD CONSTRAINT `fk_alunos_classes` FOREIGN KEY (`id_classe`) REFERENCES `classes` (`id_classes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_alunos_grupos1` FOREIGN KEY (`id_grupos`) REFERENCES `grupos` (`id_grupos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `resposta`
--
ALTER TABLE `resposta`
ADD CONSTRAINT `fk_resposta_questoes1` FOREIGN KEY (`id_questoes`) REFERENCES `questoes` (`id_questoes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tempo`
--
ALTER TABLE `tempo`
ADD CONSTRAINT `fk_questoes_has_alunos_questoes1` FOREIGN KEY (`questoes_id_questoes`) REFERENCES `questoes` (`id_questoes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_questoes_has_alunos_alunos1` FOREIGN KEY (`alunos_id_alunos`) REFERENCES `alunos` (`id_alunos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
