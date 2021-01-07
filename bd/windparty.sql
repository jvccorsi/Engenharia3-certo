-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Jan-2021 às 06:17
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `windparty`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `custos_fixos`
--

CREATE TABLE `custos_fixos` (
  `id_custosfixos` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `item` varchar(30) NOT NULL,
  `tipo_custos` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `gasto_final` float NOT NULL,
  `obs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `custos_variaveis`
--

CREATE TABLE `custos_variaveis` (
  `id_custos_variaveis` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `tipo_produto` varchar(50) NOT NULL,
  `unidade` varchar(20) NOT NULL,
  `preco` float NOT NULL,
  `qtd_esperada` int(11) NOT NULL,
  `gasto_esperado` float NOT NULL,
  `qtd_total` int(11) NOT NULL,
  `gasto_final` float NOT NULL,
  `obsvar` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `nome_evento` varchar(50) NOT NULL,
  `descricao_evento` varchar(400) NOT NULL,
  `qtd_pessoas` int(11) NOT NULL,
  `data_evento` varchar(20) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id_mensagem` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tipo_mensagem` varchar(20) NOT NULL,
  `telefone` varchar(24) NOT NULL,
  `descricao` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE `receita` (
  `id_receita` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `item` varchar(30) NOT NULL,
  `preco` float NOT NULL,
  `qtd_esperada` int(11) NOT NULL,
  `qtd_vendida` int(11) NOT NULL,
  `receita_esperada` float NOT NULL,
  `obs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `username`, `senha`, `nome`, `sobrenome`, `cpf`, `data_nasc`, `genero`, `telefone`) VALUES
(1, 'jvccorsiferrera@hotmail.com', 'joao', '23', 'joão', 'ferreira', '2147483647', '0000-00-00', 'masculino', '2147483647'),
(2, '0', 'corsi', 'jvccorsi145', 'joao', 'ferreira', '2147483647', '0000-00-00', 'masculino', '2147483647'),
(3, '0', 'corsi', '12345', 'joão victor corsi', 'ferreira', '2147483647', '0000-00-00', 'masculino', '2147483647'),
(4, 'asdad@asda.com', 'a', 'a', 'aa', 'ferreira', '0', '0000-00-00', 'masculino', '0'),
(5, 'jvccorsiferrerazzz22@hotmail.com', 'jvccorsi', 'jvccorsi145', 'João', 'ferreira', '2147483647', '0000-00-00', 'masculino', '2147483647'),
(6, 'jvccorsasdasiferrera@hotmail.com', 'asadsads', 'asdasda', 'plinio', 'fereira', '2147483647', '0000-00-00', 'masculino', '2147483647'),
(7, 'plinio_robert@hotmail.com', '1aaa', 'asdasd', 'plinio_robert', 'fereira', '1', '0000-00-00', 'masculino', ' 2147483647');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `custos_fixos`
--
ALTER TABLE `custos_fixos`
  ADD PRIMARY KEY (`id_custosfixos`),
  ADD KEY `fk_custosfixosEvento` (`id_evento`);

--
-- Índices para tabela `custos_variaveis`
--
ALTER TABLE `custos_variaveis`
  ADD PRIMARY KEY (`id_custos_variaveis`),
  ADD KEY `fk_custosvariaveisEvento` (`id_evento`);

--
-- Índices para tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id_mensagem`);

--
-- Índices para tabela `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`id_receita`),
  ADD KEY `fk_receitaEvento` (`id_evento`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `custos_fixos`
--
ALTER TABLE `custos_fixos`
  MODIFY `id_custosfixos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `custos_variaveis`
--
ALTER TABLE `custos_variaveis`
  MODIFY `id_custos_variaveis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id_mensagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `receita`
--
ALTER TABLE `receita`
  MODIFY `id_receita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `custos_fixos`
--
ALTER TABLE `custos_fixos`
  ADD CONSTRAINT `fk_custosfixosEvento` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`);

--
-- Limitadores para a tabela `custos_variaveis`
--
ALTER TABLE `custos_variaveis`
  ADD CONSTRAINT `fk_custosvariaveisEvento` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`);

--
-- Limitadores para a tabela `receita`
--
ALTER TABLE `receita`
  ADD CONSTRAINT `fk_receitaEvento` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id_evento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
