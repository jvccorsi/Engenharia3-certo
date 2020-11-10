-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2020 às 15:22
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eng_3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_usu` varchar(220) NOT NULL,
  `data_nascimento` varchar(220) NOT NULL,
  `cpf` varchar(220) NOT NULL,
  `telefone` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `username` varchar(220) NOT NULL,
  `senha_usu` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usu`, `data_nascimento`, `cpf`, `telefone`, `email`, `username`, `senha_usu`) VALUES
(1, 'joão', '19/07/2000', '47969321860', '19994753282', 'jvccorsiferrera@hotmail.com', 'joao', '12345'),
(2, 'joao', '19/07/2000', '4807040292929', '199957272727', '0', 'corsi', 'jvccorsi145'),
(3, 'joão victor corsi', '19/07/2000', '47969321860', '19995753282', '0', 'corsi', '12345'),
(4, 'aa', 'a', 'a', 'a', 'asdad@asda.com', 'a', 'a'),
(5, 'João', '19/07/2000', '47969321860', '19995753282', 'jvccorsiferrerazzz22@hotmail.com', 'jvccorsi', 'jvccorsi145');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
