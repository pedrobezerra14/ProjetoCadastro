-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Ago-2023 às 17:22
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_3b`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_alunos`
--

CREATE TABLE `cad_alunos` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `ENDERECO` varchar(255) NOT NULL,
  `BAIRRO` varchar(255) DEFAULT NULL,
  `CIDADE` varchar(255) NOT NULL,
  `ESTADO` varchar(255) NOT NULL,
  `SEXO` enum('Masculino','Feminino') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cad_alunos`
--

INSERT INTO `cad_alunos` (`ID`, `NOME`, `ENDERECO`, `BAIRRO`, `CIDADE`, `ESTADO`, `SEXO`) VALUES
(370, 'dqqwdwqdqwdqwd', 'qdqwdqdqd', 'qwdqdqwdqd', 'qdwqdqwdqdqw', 'dqwdqwdqwdqw', 'Masculino');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_alunos`
--
ALTER TABLE `cad_alunos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_alunos`
--
ALTER TABLE `cad_alunos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=371;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
