-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/04/2024 às 16:59
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
-- Banco de dados: `rift`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `botlane`
--

CREATE TABLE `botlane` (
  `idBot` int(11) NOT NULL,
  `idJg` int(11) NOT NULL,
  `nomeCamp` varchar(45) NOT NULL,
  `item` varchar(45) NOT NULL,
  `counterCamp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jungle`
--

CREATE TABLE `jungle` (
  `idJg` int(11) NOT NULL,
  `nomeCamp` varchar(45) NOT NULL,
  `item` varchar(45) NOT NULL,
  `counterCamp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jungle`
--

INSERT INTO `jungle` (`idJg`, `nomeCamp`, `item`, `counterCamp`) VALUES
(5, 'Poppy', 'Sunfire', 'Trundle'),
(6, 'Pyke', 'tiamat', 'poppy');

-- --------------------------------------------------------

--
-- Estrutura para tabela `midlane`
--

CREATE TABLE `midlane` (
  `idMid` int(11) NOT NULL,
  `idJg` int(11) NOT NULL,
  `nomeCamp` varchar(45) NOT NULL,
  `item` varchar(45) NOT NULL,
  `counterCamp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `toplane`
--

CREATE TABLE `toplane` (
  `idTop` int(11) NOT NULL,
  `idJg` int(11) NOT NULL,
  `nomeCamp` varchar(45) NOT NULL,
  `item` varchar(45) NOT NULL,
  `counterCamp` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `toplane`
--

INSERT INTO `toplane` (`idTop`, `idJg`, `nomeCamp`, `item`, `counterCamp`) VALUES
(6, 5, 'Camille', 'Trindade', 'Poppy');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `botlane`
--
ALTER TABLE `botlane`
  ADD PRIMARY KEY (`idBot`),
  ADD KEY `idJg` (`idJg`);

--
-- Índices de tabela `jungle`
--
ALTER TABLE `jungle`
  ADD PRIMARY KEY (`idJg`);

--
-- Índices de tabela `midlane`
--
ALTER TABLE `midlane`
  ADD PRIMARY KEY (`idMid`),
  ADD KEY `idJg` (`idJg`);

--
-- Índices de tabela `toplane`
--
ALTER TABLE `toplane`
  ADD PRIMARY KEY (`idTop`),
  ADD KEY `idJg` (`idJg`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `botlane`
--
ALTER TABLE `botlane`
  MODIFY `idBot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `jungle`
--
ALTER TABLE `jungle`
  MODIFY `idJg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `midlane`
--
ALTER TABLE `midlane`
  MODIFY `idMid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `toplane`
--
ALTER TABLE `toplane`
  MODIFY `idTop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `botlane`
--
ALTER TABLE `botlane`
  ADD CONSTRAINT `botlane_ibfk_1` FOREIGN KEY (`idJg`) REFERENCES `jungle` (`idJg`);

--
-- Restrições para tabelas `midlane`
--
ALTER TABLE `midlane`
  ADD CONSTRAINT `midlane_ibfk_1` FOREIGN KEY (`idJg`) REFERENCES `jungle` (`idJg`);

--
-- Restrições para tabelas `toplane`
--
ALTER TABLE `toplane`
  ADD CONSTRAINT `toplane_ibfk_1` FOREIGN KEY (`idJg`) REFERENCES `jungle` (`idJg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
