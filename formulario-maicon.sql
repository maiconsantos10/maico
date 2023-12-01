-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2023 às 07:28
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario-maicon`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(120) NOT NULL,
  `login` varchar(6) DEFAULT NULL,
  `senha` varchar(8) NOT NULL,
  `resposta_1` varchar(50) DEFAULT NULL,
  `resposta_2` varchar(50) DEFAULT NULL,
  `resposta_3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `email`, `login`, `senha`, `resposta_1`, `resposta_2`, `resposta_3`) VALUES
(2, '', 'adm@adm', NULL, 'adm', 'maria', '05052002', '21832090');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `nome_materno` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `data_nasc` date NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `login` varchar(10) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `senha2` varchar(8) NOT NULL,
  `permissao` varchar(20) DEFAULT NULL,
  `administrador` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `nome_materno`, `email`, `telefone`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`, `cpf`, `login`, `senha`, `senha2`, `permissao`, `administrador`) VALUES
(0, 'admin', 'admin materno', 'admin@gmail.com', '', 'masculino', '0000-00-00', 'Rio de Janeiro', 'RJ', 'Rua Tchakaka Na Botchaka', '11111111111', 'admin', 'admin', '', 'administrador', NULL),
(0, 'admin2', 'admin materno2', 'admin2@gmail.com', '', 'masculino', '0000-00-00', 'Rio de Janeiro', 'RJ', 'Rua Tchakaka Na Botchaka', '11111111111', 'admin', 'admin', '', '', NULL),
(0, 'Maicon Emanuel', 'Maicon Emanuel', 'teste@teste', '21984570898', 'masculino', '2002-05-05', 'RJ', 'RJ', 'Rua Octacilio Francesconi Porto', '13969422701', 'maico', 'maico', 'maico', NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
