-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29/08/2024 às 19:53
-- Versão do servidor: 8.3.0
-- Versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `merenda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `permissao` int NOT NULL,
  `token` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `merenda`
--

DROP TABLE IF EXISTS `merenda`;
CREATE TABLE IF NOT EXISTS `merenda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `aluno` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `data` date NOT NULL,
  `status` int NOT NULL,
  `observacao` text COLLATE utf8mb4_general_ci NOT NULL,
  `matricula` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `merenda`
--

INSERT INTO `merenda` (`id`, `aluno`, `data`, `status`, `observacao`, `matricula`) VALUES
(1, 'Junior Gonçalves', '2024-08-29', 1, 'sss', '55666');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `aluno` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `matricula` varchar(22) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `obs` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
