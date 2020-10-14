-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/10/2020 às 20:25
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `delivery`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `rua` varchar(120) NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(120) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `rua`, `numero`, `bairro`, `cidade`, `telefone`, `email`) VALUES
(1, 'Novo Cliente', 'Rua qualquer', 11, 'Bairro novo', 'Cidade Nova', '8188994455', 'mail@mail.com'),
(2, 'Italo Roberto', 'Rua das Flores', 37, 'Córrego do Jenipapo', 'Recife', '(81)99287-3311', 'italoroberto@sitesaqui.com.br');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `prato` varchar(150) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `cliente` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `entrega` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pratos`
--

CREATE TABLE `pratos` (
  `id` int(11) NOT NULL,
  `nome_imagem` varchar(270) NOT NULL,
  `prato` varchar(150) NOT NULL,
  `ingredientes` varchar(250) NOT NULL,
  `valor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pratos`
--

INSERT INTO `pratos` (`id`, `nome_imagem`, `prato`, `ingredientes`, `valor`) VALUES
(1, 'burger.jpg', 'Hamburguer Simples', 'Carne de Hamburguer, pão, queijo, alface, tomate e cebola', '10'),
(2, 'pizza.jpg', 'Pizza de Calabresa', 'Massa, molho de tomate, queijo e calabresa', '15'),
(3, 'can-87995_1280.jpg', 'Coca Cola Lata', 'Coca lata 350ml', '2.50'),
(4, 'business-woman-edit.jpg', 'Cliente', 'nome', '15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'italo', '395df54889b9fa64ab1f2b73473e8e4e'),
(2, 'teste', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'teste2', '25d55ad283aa400af464c76d713c07ad');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pratos`
--
ALTER TABLE `pratos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pratos`
--
ALTER TABLE `pratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
