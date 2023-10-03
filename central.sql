-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jul-2023 às 06:31
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `central`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `saldo` decimal(5,2) NOT NULL,
  `nivelacesso` int(2) NOT NULL,
  `webhook` varchar(100) DEFAULT NULL,
  `url` varchar(500) NOT NULL DEFAULT 'https://gifs.eco.br/wp-content/uploads/2022/10/gifs-da-lacoste-17.gif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `saldo`, `nivelacesso`, `webhook`, `url`) VALUES
(1, 'caio', 'sansao25', 999.44, 1, NULL, 'https://gifs.eco.br/wp-content/uploads/2022/10/gifs-da-lacoste-17.gif'),
(2, 'akashi', 'f58f440e0f956678ddb41c643abb5890', 211.44, 1, NULL, 'https://gifs.eco.br/wp-content/uploads/2022/10/gifs-da-lacoste-17.gif'),
(9, 'usuario', 'f8032d5cae3de20fcec887f395ec9a6a', 197.00, 2, NULL, 'https://gifs.eco.br/wp-content/uploads/2022/10/gifs-da-lacoste-17.gif');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
