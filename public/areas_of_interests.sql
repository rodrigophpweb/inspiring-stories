-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: senacHistory_db
-- Tempo de geração: 16/01/2025 às 17:20
-- Versão do servidor: 10.6.4-MariaDB-1:10.6.4+maria~focal
-- Versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `senacMyhistory`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `areas_of_interests`
--

CREATE TABLE `areas_of_interests` (
  `id` int(99) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `areas_of_interests`
--

INSERT INTO `areas_of_interests` (`id`, `name`) VALUES
(1, 'Beleza e Estética\r\n'),
(2, 'Bem-estar'),
(3, 'Comunicação e Marketing'),
(4, 'Desenvolvimento Social'),
(5, 'Design, Artes e Arquitetura'),
(6, 'Educação'),
(7, 'Gastronomia e Alimentação'),
(8, 'Gestão e negócios'),
(9, 'Idiomas'),
(10, 'Meio Ambiente, Segurança e Saúde no Trabalho'),
(11, 'Moda'),
(12, 'Saúde'),
(13, 'Tecnologia da Informação'),
(14, 'Turismo e Hospitalidade\r\n');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `areas_of_interests`
--
ALTER TABLE `areas_of_interests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `areas_of_interests`
--
ALTER TABLE `areas_of_interests`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
