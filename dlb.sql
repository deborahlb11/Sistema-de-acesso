-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/07/2025 às 01:58
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dlb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `lce`
--

CREATE TABLE `lce` (
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `codigo` int(11) NOT NULL,
  `cpf` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `lce`
--

INSERT INTO `lce` (`nome`, `email`, `senha`, `codigo`, `cpf`) VALUES
('User', 'emai@email', 'aaaaaaa', 1, 1111111),
('34', '1@1', '34', 2, 22222222),
('q1', 'q1@q1', '12345', 3, 123456789);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `lce`
--
ALTER TABLE `lce`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `lce`
--
ALTER TABLE `lce`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
