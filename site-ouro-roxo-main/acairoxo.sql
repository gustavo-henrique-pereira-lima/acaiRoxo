-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Maio-2023 às 03:32
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `acairoxo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(8) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` int(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `telefone` int(11) NOT NULL,
  `pontos` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `litros` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `senha`, `rua`, `numero`, `bairro`, `telefone`, `pontos`, `email`, `litros`) VALUES
(3, 'Gustavo', '1234', '', 0, '', 0, NULL, 'gustavohenriquelive12@gmail.com', NULL),
(7, 'Gustavo', '3001', '', 0, '', 0, NULL, 'gustavohenriquelive12@gmail.com', NULL),
(8, 'Gustavo', '3001', '', 0, '', 0, NULL, 'gustavohenriquelive12@gmail.com', NULL),
(9, 'DAVI', '0000', '', 0, '', 0, NULL, 'uhbfhsdbfh@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregador`
--

CREATE TABLE `entregador` (
  `idEntregador` int(8) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cnh` bigint(11) NOT NULL,
  `telefone` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `entregador`
--

INSERT INTO `entregador` (`idEntregador`, `nome`, `cnh`, `telefone`) VALUES
(100014, 'Henrique', 77777777777, 98981347994),
(100016, 'Gustavo', 3522479951, 98982332842),
(100017, 'Gustavo', 54822179541, 98982332842),
(100018, 'wt', 77777777777777, 7777777777),
(100023, 'Gustavo', 2, 3000),
(100024, 'Gustavo', 2, 50),
(100025, 'Açaí', 2, 18),
(100026, 'roberto', 788887878787, 332225511),
(100027, 'Herminio Shaolin', 9999999999, 91997788525),
(100028, 'Herminio Shaolin', 9999999999, 91997788525),
(100029, 'XAXUXEXE', 854112360, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `Cliente` int(8) NOT NULL,
  `Entregador` int(8) NOT NULL,
  `Produto` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idPedido`, `Cliente`, `Entregador`, `Produto`) VALUES
(1, 3, 100014, 3),
(2, 9, 100018, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(8) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `preco` double NOT NULL,
  `quantidade` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `nome`, `preco`, `quantidade`) VALUES
(3, 'açaí', 15, 2),
(5, 'camarao', 36, 1),
(6, 'Farinha', 13, 20);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `entregador`
--
ALTER TABLE `entregador`
  ADD PRIMARY KEY (`idEntregador`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `Entregador` (`Entregador`),
  ADD KEY `Cliente` (`Cliente`),
  ADD KEY `Produto` (`Produto`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `entregador`
--
ALTER TABLE `entregador`
  MODIFY `idEntregador` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100030;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`Entregador`) REFERENCES `entregador` (`idEntregador`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`Cliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`Produto`) REFERENCES `produto` (`idProduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
