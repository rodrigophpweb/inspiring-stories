-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: senacHistory_db
-- Tempo de geração: 16/01/2025 às 12:18
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `copyright`
--

CREATE TABLE `copyright` (
  `id` int(11) NOT NULL,
  `id_history` int(11) NOT NULL,
  `allow_copyright` tinyint(1) NOT NULL,
  `file_copytight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `id_history` int(11) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `data_contato` date NOT NULL,
  `data_atualizacao_historia` date NOT NULL,
  `codigo_crm` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` varchar(255) NOT NULL,
  `pagante_bolsista` tinyint(1) NOT NULL,
  `resumo_historia` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `link_historia` varchar(255) NOT NULL,
  `observacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `history_areas_interests`
--

CREATE TABLE `history_areas_interests` (
  `id_historia` int(11) NOT NULL,
  `id_area_interesse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `history_school`
--

CREATE TABLE `history_school` (
  `id` int(11) NOT NULL,
  `id_school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `history_school_level`
--

CREATE TABLE `history_school_level` (
  `id` int(11) NOT NULL,
  `id_school_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `history_type_history`
--

CREATE TABLE `history_type_history` (
  `id` int(11) NOT NULL,
  `id_history` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `midia`
--

CREATE TABLE `midia` (
  `id` int(11) NOT NULL,
  `id_history` int(11) NOT NULL,
  `type_midia` varchar(255) NOT NULL,
  `file_midia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `regions`
--

INSERT INTO `regions` (`id`, `region`) VALUES
(1, 'Capital'),
(2, 'Grande São Paulo'),
(3, 'Interior');

-- --------------------------------------------------------

--
-- Estrutura para tabela `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `school` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `schools`
--

INSERT INTO `schools` (`id`, `id_region`, `school`) VALUES
(2, 1, 'Centro Universitário Senac - Santo Amaro'),
(3, 1, 'Aclimação'),
(4, 1, 'Francisco Matarazzo'),
(5, 1, 'Itaquera'),
(6, 1, 'Jabaquara'),
(7, 1, 'Jardim'),
(8, 1, 'Primavera'),
(9, 1, 'Lapa Faustolo'),
(10, 1, 'Lapa Scipião'),
(11, 1, 'Lapa Tito'),
(12, 1, 'Largo Treze'),
(13, 1, 'Penha'),
(14, 1, 'Nações Unidas'),
(15, 1, 'Santana'),
(16, 1, 'São Miguel Paulista'),
(17, 1, 'Tatuapé Cel. Luís Americano'),
(18, 1, 'Tatuapé Serra de Bragança'),
(19, 1, 'Tiradentes'),
(20, 1, 'Vila Prudente'),
(21, 2, 'Bertioga'),
(22, 2, 'Guarulhos'),
(23, 2, 'Celestino'),
(24, 2, 'Guarulhos Faccini'),
(25, 2, 'Osasco'),
(26, 2, 'Santos'),
(27, 2, 'Santo André'),
(28, 2, 'São Bernardo do Campo'),
(29, 2, 'Taboão da Serra'),
(30, 3, 'Americana'),
(31, 3, 'Araçatuba'),
(32, 3, 'Araraquara'),
(33, 3, 'Barretos'),
(34, 3, 'Bauru'),
(35, 3, 'Bebedouro'),
(36, 3, 'Botucatu'),
(37, 3, 'Campinas'),
(38, 3, 'Catanduva'),
(39, 3, 'Centro Universitário Senac - Águas de São Pedro'),
(40, 3, 'Centro Universitário Senac - Campos do Jordão'),
(41, 3, 'Franca'),
(42, 3, 'Guaratinguetá'),
(43, 3, 'Itapetininga'),
(44, 3, 'Itapira'),
(45, 3, 'Itu'),
(46, 3, 'Jaboticabal'),
(47, 3, 'Jaú'),
(48, 3, 'Jundiaí'),
(49, 3, 'Limeira'),
(50, 3, 'Marília'),
(51, 3, 'Mogi Guaçu'),
(52, 3, 'Ourinhos'),
(53, 3, 'Pindamonhangaba'),
(54, 3, 'Piracicaba'),
(55, 3, 'Presidente'),
(56, 3, 'Prudente'),
(57, 3, 'Registro'),
(58, 3, 'Ribeirão Preto'),
(59, 3, 'Rio Claro'),
(60, 3, 'Salto'),
(61, 3, 'São Carlos'),
(62, 3, 'São João da Boa Vista'),
(63, 3, 'São José do Rio Preto'),
(64, 3, 'São José dos Campos'),
(65, 3, 'Sorocaba'),
(66, 3, 'Taubaté'),
(67, 3, 'Votuporanga');

-- --------------------------------------------------------

--
-- Estrutura para tabela `school_level`
--

CREATE TABLE `school_level` (
  `id` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `school_level`
--

INSERT INTO `school_level` (`id`, `level`) VALUES
(1, 'emed'),
(2, 'Aprendizagem'),
(3, 'Live'),
(4, 'Técnico'),
(5, 'Idioma'),
(6, 'Graduação'),
(7, 'Pós-graduação/Extensão');

-- --------------------------------------------------------

--
-- Estrutura para tabela `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `id_history` int(11) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `type_history`
--

CREATE TABLE `type_history` (
  `id` int(11) NOT NULL,
  `type_history` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `type_history`
--

INSERT INTO `type_history` (`id`, `type_history`) VALUES
(1, 'Fiz Senac!'),
(2, 'Transição de Carreira'),
(3, 'Coletividade'),
(4, 'Empreenda'),
(5, 'Tempo de Realizar');

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(99) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `email_usuer` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `level_user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `email_usuer`, `password_user`, `level_user`) VALUES
(1, 'admin', 'rodrigo.vesilva@sp.senac.br', '39240aa83ffbd9cceb3bb1672f2d084a', 0),
(2, 'senacMH', 'seo@sp.senac.br', '1a63fe2adce54f7ef62369dd38692024', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `areas_of_interests`
--
ALTER TABLE `areas_of_interests`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `history_areas_interests`
--
ALTER TABLE `history_areas_interests`
  ADD PRIMARY KEY (`id_historia`);

--
-- Índices de tabela `history_school`
--
ALTER TABLE `history_school`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `history_school_level`
--
ALTER TABLE `history_school_level`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `history_type_history`
--
ALTER TABLE `history_type_history`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `midia`
--
ALTER TABLE `midia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `school_level`
--
ALTER TABLE `school_level`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `type_history`
--
ALTER TABLE `type_history`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `areas_of_interests`
--
ALTER TABLE `areas_of_interests`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `history_areas_interests`
--
ALTER TABLE `history_areas_interests`
  MODIFY `id_historia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `history_school`
--
ALTER TABLE `history_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `history_school_level`
--
ALTER TABLE `history_school_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `history_type_history`
--
ALTER TABLE `history_type_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `midia`
--
ALTER TABLE `midia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de tabela `school_level`
--
ALTER TABLE `school_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `type_history`
--
ALTER TABLE `type_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
