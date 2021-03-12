-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Mar-2021 às 03:10
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_galeria_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `data` timestamp NULL DEFAULT current_timestamp(),
  `foto` varchar(225) DEFAULT NULL,
  `produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id`, `data`, `foto`, `produto_id`) VALUES
(2, '2021-03-11 22:35:16', './imgs/23-8.jpg', 21),
(3, '2021-03-11 22:35:25', './imgs/44-3.jpg', 21),
(4, '2021-03-11 22:35:33', './imgs/18639-1.jpg', 21),
(5, '2021-03-11 22:38:30', './imgs/19304.jpg', 24),
(6, '2021-03-11 22:38:30', './imgs/19305-3.jpg', 24),
(7, '2021-03-11 22:38:30', './imgs/19368-2.jpg', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `qtd` int(11) DEFAULT NULL,
  `foto` varchar(225) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `valor`, `qtd`, `foto`, `usuario_id`) VALUES
(21, 'Matematica', '33.00', 90, './imgs/23-2.jpg', 10),
(24, 'Eneylton Barros', '789.00', 3, './imgs/44.jpg', 10),
(25, 'Familia', '33.00', 34, './imgs/18642.jpeg', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `senha` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Eneylton Barros 2004', 'eneylton@hotmail.com', NULL),
(2, 'Ana Regina', 'ana@gmail.com', '$2y$10$XG2Sq73/m2zttVzn.2kHBOf0LeSV6WZuLq/pPRAxtqY2ZPp9ZX5Te'),
(3, 'Karol 900', 'kk@gmail.com', '123'),
(4, 'Eneylton Barros', 'admin@eneylton.com', '$2y$10$hZF34O//QTzlNUFI82fUvuJLgz1G3B9zT.4S.EwznTIs.vwIOrdmS'),
(5, 'Vanessa ', 'vanes@gmail.com', '$2y$10$xyDoTovMby9Uz3K.a8aI4OwCV7MFXi32imZtjNBzXFgN8w/4lywv2'),
(9, 'Eneylton Barros', 'eneylton@hotmail.com', '123'),
(10, 'ene', 'ene@gmail.com', '$2y$10$UxSCe4FtTjYb6d6DQ4tELuWP1RT.fGui1ZapmeJaUANo6csK3kdd6');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_galeria_produto1_idx` (`produto_id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produto_usuario_idx` (`usuario_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `fk_galeria_produto1` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
