-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 24-Jun-2019 às 14:41
-- Versão do servidor: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_concursos_calouros`
--
CREATE DATABASE IF NOT EXISTS `db_concursos_calouros` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_concursos_calouros`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`id`, `descricao`) VALUES
(1, 'Infantil'),
(2, 'Adulto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_participantes`
--

DROP TABLE IF EXISTS `tb_participantes`;
CREATE TABLE IF NOT EXISTS `tb_participantes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(10) DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsavel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_quesitos_casamento`
--

DROP TABLE IF EXISTS `tb_quesitos_casamento`;
CREATE TABLE IF NOT EXISTS `tb_quesitos_casamento` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_participante` int(100) DEFAULT NULL,
  `id_categoria` int(100) DEFAULT NULL,
  `id_usuario` int(100) DEFAULT NULL,
  `vest_tradicional` int(2) DEFAULT NULL,
  `originalidade` int(2) DEFAULT NULL,
  `deprec_preconceituoso` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_participante` (`id_participante`),
  KEY `id_tipo` (`id_categoria`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_quesitos_marcador`
--

DROP TABLE IF EXISTS `tb_quesitos_marcador`;
CREATE TABLE IF NOT EXISTS `tb_quesitos_marcador` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_participante` int(10) DEFAULT NULL,
  `id_categoria` int(10) DEFAULT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  `desenvoltura` int(2) DEFAULT NULL,
  `lideranca` int(2) DEFAULT NULL,
  `animacao` int(2) DEFAULT NULL,
  `figurino` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_participante` (`id_participante`,`id_categoria`,`id_usuario`),
  KEY `id_participante_2` (`id_participante`,`id_categoria`,`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_quesitos_quadrilha`
--

DROP TABLE IF EXISTS `tb_quesitos_quadrilha`;
CREATE TABLE IF NOT EXISTS `tb_quesitos_quadrilha` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_participante` int(100) DEFAULT NULL,
  `id_categoria` int(100) DEFAULT NULL,
  `id_usuario` int(100) DEFAULT NULL,
  `evolucao` int(2) DEFAULT NULL,
  `figurino` int(2) DEFAULT NULL,
  `animacao` int(2) DEFAULT NULL,
  `alinhamento` int(2) NOT NULL,
  `coreografia` int(2) DEFAULT NULL,
  `harmonia` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_participamte` (`id_participante`,`id_categoria`,`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` enum('jurado','comissao') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'jurado',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `login`, `senha`, `perfil`) VALUES
(1, 'Administrador', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'comissao');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
