-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Abr-2021 às 21:22
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `turismo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Adulto'),
(2, 'Criança');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comissoes`
--

CREATE TABLE `comissoes` (
  `id_comissao` int(11) NOT NULL,
  `id_responsavel_fk` int(11) NOT NULL,
  `id_vendedor_fk` int(11) NOT NULL,
  `valor_enviado` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comissoes`
--

INSERT INTO `comissoes` (`id_comissao`, `id_responsavel_fk`, `id_vendedor_fk`, `valor_enviado`, `created_at`) VALUES
(2, 14, 23, 100, '2021-04-20 13:33:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destinos`
--

CREATE TABLE `destinos` (
  `id_destino` int(11) NOT NULL,
  `nome_destino` varchar(50) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `fk_login_destino_loja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `destinos`
--

INSERT INTO `destinos` (`id_destino`, `nome_destino`, `endereco`, `fk_login_destino_loja`) VALUES
(1, 'Beach Park', 'Rua Porto das Dunas, 2734 - Porto das Dunas, Aquiraz - CE, 61700-0001', 14),
(14, 'One Pience ', 'Bem longe, bem longe mesmo', 14),
(21, 'Canoa Quebrada', 'idajd aojkdo aodooado koasjdojodjo joajsdojaosjdajdojakodal soi', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `familia`
--

CREATE TABLE `familia` (
  `id_familia` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rg` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone1` varchar(20) NOT NULL,
  `telefone2` varchar(20) NOT NULL,
  `id_destino_fk` int(11) DEFAULT NULL,
  `id_veiculo_fk` int(11) DEFAULT NULL,
  `id_passagem_fk` int(11) DEFAULT NULL,
  `id_vendedor_fk` int(11) DEFAULT NULL,
  `valor_na_epoca` float DEFAULT NULL,
  `valor_de_venda` float DEFAULT NULL,
  `codigo_familia` varchar(20) NOT NULL,
  `dia` date NOT NULL,
  `dia_viagem` date DEFAULT NULL,
  `fk_login_familia_loja` int(11) NOT NULL,
  `viagem_finalizada` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `familia`
--

INSERT INTO `familia` (`id_familia`, `nome`, `rg`, `email`, `telefone1`, `telefone2`, `id_destino_fk`, `id_veiculo_fk`, `id_passagem_fk`, `id_vendedor_fk`, `valor_na_epoca`, `valor_de_venda`, `codigo_familia`, `dia`, `dia_viagem`, `fk_login_familia_loja`, `viagem_finalizada`) VALUES
(130, 'João Victo Sousa da Silva', '4564654654', 'vjoao3340@gmail.com', '(87)46847-6848', '(46)54684-8648', 1, 0, 47, 23, 50, 100, '7282c774', '2021-04-27', '2021-05-08', 14, 'NAO'),
(131, 'Karla', '6546548468486', '---', '---', '---', 1, 0, 48, 23, 30, 100, '7282c774', '2021-04-27', '2021-05-08', 14, 'NAO'),
(132, 'jonas', '5464654654656548', '---', '---', '---', 1, 0, 48, 23, 30, 200, '7282c774', '2021-04-27', '2021-05-08', 14, 'NAO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nome_hotel` varchar(200) NOT NULL,
  `fk_login_hotel_loja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nome_hotel`, `fk_login_hotel_loja`) VALUES
(0, 'não quis hotel', NULL),
(2, 'Disney\'s Grand Floridian Resort & Spa', 14),
(3, 'Fairmont Mayakoba Riviera Maya', 14),
(4, 'JW Marriott San Antonio Resort & Spa', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel_familia`
--

CREATE TABLE `hotel_familia` (
  `id_hotel_familia` int(11) NOT NULL,
  `id_destino_fk` int(11) DEFAULT NULL,
  `id_hotel_fk` int(11) DEFAULT NULL,
  `id_vendedor_fk` int(11) DEFAULT NULL,
  `codigo_familia` varchar(100) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `hotel_familia`
--

INSERT INTO `hotel_familia` (`id_hotel_familia`, `id_destino_fk`, `id_hotel_fk`, `id_vendedor_fk`, `codigo_familia`, `valor`) VALUES
(76, 1, 2, 23, '7282c774', 600);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nivel_acesso_fk` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nome_loja` varchar(200) DEFAULT NULL,
  `fk_login_loja` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_login`, `nivel_acesso_fk`, `email`, `senha`, `nome`, `nome_loja`, `fk_login_loja`, `status`) VALUES
(13, 3, 'admin@sistema.com', '21232f297a57a5a743894a0e4a801fc3', 'João Victo Sousa da Silva', 'SDI- Sintrome da dorsal Imaginaria', 13, NULL),
(14, 1, 'lojas@americanas.com', 'e728bf4a0282675f9a1701f77a8e8fee', 'Seu marcos ', 'Lojas Americanas', 13, 'ativo'),
(23, 2, 'mateus@gmail.com', 'e42b6a82864b7060c447ecebd62518a3', 'Matheus Feitosa', NULL, 14, NULL),
(26, 2, 'lucas@gmail.com', 'fb57741ccfb34321f0fc17eee416f735', 'Lucas Silva', NULL, 14, NULL),
(27, 2, 'lucaasdasasas@gmail.com', 'fb57741ccfb34321f0fc17eee416f735', 'a', NULL, 14, NULL),
(28, 2, 'asasas@gmail.com', 'c96c6b8e5c7a698f300bf130948a252c', 'sasasasasasa', NULL, 14, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acesso`
--

CREATE TABLE `nivel_acesso` (
  `id_nivel_acesso` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nivel_acesso`
--

INSERT INTO `nivel_acesso` (`id_nivel_acesso`, `nome`, `nivel`) VALUES
(1, 'Admin', 1),
(2, 'Vendedor', 2),
(3, 'Master', 3),
(4, 'administrador loja', 4),
(5, 'asdfas sdfg', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `passagem`
--

CREATE TABLE `passagem` (
  `id_passagem` int(11) NOT NULL,
  `id_destino_fk` int(11) NOT NULL,
  `id_categoria_fk` int(11) NOT NULL,
  `valor` float(10,2) NOT NULL,
  `data_ir` date DEFAULT NULL,
  `data_voltar` date DEFAULT NULL,
  `id_loja_login_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `passagem`
--

INSERT INTO `passagem` (`id_passagem`, `id_destino_fk`, `id_categoria_fk`, `valor`, `data_ir`, `data_voltar`, `id_loja_login_fk`) VALUES
(47, 1, 1, 50.00, NULL, NULL, 14),
(48, 1, 2, 30.00, NULL, NULL, 14),
(49, 14, 1, 120.00, NULL, NULL, 14),
(50, 14, 2, 45.00, NULL, NULL, 14),
(51, 21, 1, 100.00, NULL, NULL, 14),
(52, 21, 2, 30.00, NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `passeio`
--

CREATE TABLE `passeio` (
  `id_passeio` int(11) NOT NULL,
  `id_destino_fk` int(11) NOT NULL,
  `id_veiculo_fk` int(11) NOT NULL,
  `data_ir` date NOT NULL,
  `data_voltar` date NOT NULL,
  `fk_login_passeio_loja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `passeio2`
--

CREATE TABLE `passeio2` (
  `id_passeio` int(11) NOT NULL,
  `id_destino_fk` int(11) NOT NULL,
  `data_ir` date NOT NULL,
  `data_voltar` date NOT NULL,
  `id_passeio_loja_fk` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ponto_de_encontro`
--

CREATE TABLE `ponto_de_encontro` (
  `id_ponto_encontro` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `id_loja_ponto_encontro_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ponto_de_encontro`
--

INSERT INTO `ponto_de_encontro` (`id_ponto_encontro`, `descricao`, `id_loja_ponto_encontro_fk`) VALUES
(4, 'bbbbbbbbbbbbbbb', 14),
(5, 'ccccccccccccccccccccccccccccc', 14),
(6, 'aaaaaaaaaaa', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ponto_encontro`
--

CREATE TABLE `ponto_encontro` (
  `id_ponto_encontro` int(11) NOT NULL,
  `codigo_familia` varchar(100) NOT NULL,
  `id_destino_fk` int(11) NOT NULL,
  `id_vendedor_fk` int(11) NOT NULL,
  `id_ponto_de_encontro_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ponto_encontro`
--

INSERT INTO `ponto_encontro` (`id_ponto_encontro`, `codigo_familia`, `id_destino_fk`, `id_vendedor_fk`, `id_ponto_de_encontro_fk`) VALUES
(13, '7282c774', 1, 23, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacoes`
--

CREATE TABLE `transacoes` (
  `id_transacao` int(11) NOT NULL,
  `id_responsavel_fk` int(11) NOT NULL,
  `id_vendedor_fk` int(11) NOT NULL,
  `valor_enviado` float NOT NULL,
  `categoria` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `transacoes`
--

INSERT INTO `transacoes` (`id_transacao`, `id_responsavel_fk`, `id_vendedor_fk`, `valor_enviado`, `categoria`, `created_at`) VALUES
(5, 14, 23, 20, 1, '2021-04-20 19:20:06'),
(6, 14, 23, 420, 2, '2021-04-20 19:43:49'),
(7, 14, 23, 50, 1, '2021-04-20 19:47:45'),
(8, 14, 23, 50, 1, '2021-04-20 19:48:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaucher`
--

CREATE TABLE `vaucher` (
  `id_vaucher` int(11) NOT NULL,
  `id_vendedor_fk` int(11) NOT NULL,
  `codigo_familia` varchar(200) NOT NULL,
  `entrada` float NOT NULL,
  `restante` float NOT NULL,
  `forma_de_pagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vaucher`
--

INSERT INTO `vaucher` (`id_vaucher`, `id_vendedor_fk`, `codigo_familia`, `entrada`, `restante`, `forma_de_pagamento`) VALUES
(42, 23, '7282c774', 300, 0, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id_veiculo` int(11) NOT NULL,
  `nome_veiculo` varchar(30) NOT NULL,
  `capacidade` int(11) NOT NULL,
  `id_destino_fk` int(11) DEFAULT NULL,
  `disponivel` varchar(100) NOT NULL,
  `fk_login_veiculo_loja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`id_veiculo`, `nome_veiculo`, `capacidade`, `id_destino_fk`, `disponivel`, `fk_login_veiculo_loja`) VALUES
(0, 'sem veiculo', 2147483647, NULL, '', NULL),
(2, 'Mini Van', 30, NULL, 'SIM', 14),
(3, 'Onibus mega', 70, NULL, 'SIM', 14),
(4, 'Onibus mega grandão', 90, NULL, 'SIM', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo_familia`
--

CREATE TABLE `veiculo_familia` (
  `id_veiculo_familia` int(11) NOT NULL,
  `id_veiculo_fk` int(11) NOT NULL,
  `codigo_familia` varchar(70) NOT NULL,
  `fk_login_veiculo_familia_loja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_vendas` int(11) NOT NULL,
  `id_passagem_fk` int(11) NOT NULL,
  `id_vendedor_login_fk` int(11) NOT NULL,
  `dia` date NOT NULL,
  `valor_na_epoca` float NOT NULL,
  `valor_de_venda` float DEFAULT NULL,
  `fk_login_vendas_loja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `comissoes`
--
ALTER TABLE `comissoes`
  ADD PRIMARY KEY (`id_comissao`);

--
-- Índices para tabela `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`id_destino`),
  ADD KEY `fk_login_destino_loja` (`fk_login_destino_loja`);

--
-- Índices para tabela `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id_familia`);

--
-- Índices para tabela `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `fk_login_hotel_loja` (`fk_login_hotel_loja`);

--
-- Índices para tabela `hotel_familia`
--
ALTER TABLE `hotel_familia`
  ADD PRIMARY KEY (`id_hotel_familia`),
  ADD KEY `id_hotel_familia` (`id_hotel_fk`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `fk_login_loja` (`fk_login_loja`);

--
-- Índices para tabela `nivel_acesso`
--
ALTER TABLE `nivel_acesso`
  ADD PRIMARY KEY (`id_nivel_acesso`);

--
-- Índices para tabela `passagem`
--
ALTER TABLE `passagem`
  ADD PRIMARY KEY (`id_passagem`),
  ADD KEY `id_destino_fk` (`id_destino_fk`),
  ADD KEY `id_categoria_fk` (`id_categoria_fk`),
  ADD KEY `id_loja_login_fk` (`id_loja_login_fk`);

--
-- Índices para tabela `passeio`
--
ALTER TABLE `passeio`
  ADD PRIMARY KEY (`id_passeio`);

--
-- Índices para tabela `passeio2`
--
ALTER TABLE `passeio2`
  ADD PRIMARY KEY (`id_passeio`),
  ADD KEY `id_destino_fkdij` (`id_destino_fk`),
  ADD KEY `id_passeio_loja_fk21` (`id_passeio_loja_fk`);

--
-- Índices para tabela `ponto_de_encontro`
--
ALTER TABLE `ponto_de_encontro`
  ADD PRIMARY KEY (`id_ponto_encontro`);

--
-- Índices para tabela `ponto_encontro`
--
ALTER TABLE `ponto_encontro`
  ADD PRIMARY KEY (`id_ponto_encontro`);

--
-- Índices para tabela `transacoes`
--
ALTER TABLE `transacoes`
  ADD PRIMARY KEY (`id_transacao`);

--
-- Índices para tabela `vaucher`
--
ALTER TABLE `vaucher`
  ADD PRIMARY KEY (`id_vaucher`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id_veiculo`),
  ADD KEY `fk_login_veiculo_loja` (`fk_login_veiculo_loja`),
  ADD KEY `id_destino_fksda` (`id_destino_fk`);

--
-- Índices para tabela `veiculo_familia`
--
ALTER TABLE `veiculo_familia`
  ADD PRIMARY KEY (`id_veiculo_familia`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_vendas`),
  ADD KEY `id_vendedor_login_fk` (`id_vendedor_login_fk`),
  ADD KEY `id_passagem_fk` (`id_passagem_fk`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `comissoes`
--
ALTER TABLE `comissoes`
  MODIFY `id_comissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `destinos`
--
ALTER TABLE `destinos`
  MODIFY `id_destino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `familia`
--
ALTER TABLE `familia`
  MODIFY `id_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de tabela `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `hotel_familia`
--
ALTER TABLE `hotel_familia`
  MODIFY `id_hotel_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `nivel_acesso`
--
ALTER TABLE `nivel_acesso`
  MODIFY `id_nivel_acesso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `passagem`
--
ALTER TABLE `passagem`
  MODIFY `id_passagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `passeio`
--
ALTER TABLE `passeio`
  MODIFY `id_passeio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `passeio2`
--
ALTER TABLE `passeio2`
  MODIFY `id_passeio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `ponto_de_encontro`
--
ALTER TABLE `ponto_de_encontro`
  MODIFY `id_ponto_encontro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `ponto_encontro`
--
ALTER TABLE `ponto_encontro`
  MODIFY `id_ponto_encontro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `transacoes`
--
ALTER TABLE `transacoes`
  MODIFY `id_transacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `vaucher`
--
ALTER TABLE `vaucher`
  MODIFY `id_vaucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id_veiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `veiculo_familia`
--
ALTER TABLE `veiculo_familia`
  MODIFY `id_veiculo_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_vendas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `hotel_familia`
--
ALTER TABLE `hotel_familia`
  ADD CONSTRAINT `id_hotel_familia` FOREIGN KEY (`id_hotel_fk`) REFERENCES `hotel` (`id_hotel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `passagem`
--
ALTER TABLE `passagem`
  ADD CONSTRAINT `passagem_ibfk_1` FOREIGN KEY (`id_destino_fk`) REFERENCES `destinos` (`id_destino`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `passagem_ibfk_2` FOREIGN KEY (`id_categoria_fk`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `passagem_ibfk_3` FOREIGN KEY (`id_loja_login_fk`) REFERENCES `login` (`id_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `passeio2`
--
ALTER TABLE `passeio2`
  ADD CONSTRAINT `id_destino_fkasda` FOREIGN KEY (`id_destino_fk`) REFERENCES `destinos` (`id_destino`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_passeio_loja_fk21` FOREIGN KEY (`id_passeio_loja_fk`) REFERENCES `login` (`id_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`id_vendedor_login_fk`) REFERENCES `login` (`id_login`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`id_passagem_fk`) REFERENCES `passagem` (`id_passagem`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
