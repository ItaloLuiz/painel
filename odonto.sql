-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Abr-2019 às 02:30
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odonto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id_cliente` int(11) NOT NULL,
  `cod_cliente` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `cod_prestador` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `nome_cliente` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `email_cliente` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `documento_cliente` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `senha_cliente` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id_cliente`, `cod_cliente`, `cod_prestador`, `nome_cliente`, `email_cliente`, `documento_cliente`, `senha_cliente`, `data_cadastro`) VALUES
(2, '7lPpvE', 'bal0Fc', 'italo', 'italo@yahoo.com', '1234', '147', '2019-04-20 15:26:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_documento`
--

CREATE TABLE `tbl_documento` (
  `id_doc` int(11) NOT NULL,
  `cod_doc` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `cod_prestador` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `cod_cliente` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_doc` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_doc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_documento`
--

INSERT INTO `tbl_documento` (`id_doc`, `cod_doc`, `cod_prestador`, `cod_cliente`, `titulo_doc`, `tipo_doc`, `data_cadastro`) VALUES
(1, 'JeiXI6', 'mz4T3K', '7lPpvE', 'ffff', 'jpg', '2019-04-20 22:48:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_prestador`
--

CREATE TABLE `tbl_prestador` (
  `id_prestador` int(11) NOT NULL,
  `cod_prestador` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tbl_prestador`
--

INSERT INTO `tbl_prestador` (`id_prestador`, `cod_prestador`, `nome`, `email`, `senha`, `doc`, `data_cadastro`) VALUES
(2, 'iunD9w', 'rrrrr', 'email@email.com', '112233', 'tttt', '2019-04-19 18:09:00'),
(5, 'OjAyar', 'rr', 'email@email.com', '112233', 'rrr', '2019-04-19 18:21:43'),
(6, 'mz4T3K', 'luiz', 'luis@gmail.com', '112233', '1245', '2019-04-19 18:21:51'),
(7, 'bgcx1R', 'jjjj', 'email@email.comjj', '112233', 'lll', '2019-04-19 18:22:20'),
(8, 'bal0Fc', 'ssss', 'email@email.com', '112233', 'wwww', '2019-04-19 18:26:35'),
(9, '5BeI1Y', 'ssssf', 'email@email.com', '112233', 'ffss', '2019-04-19 18:27:54'),
(10, 'mBv5Ux', '\'\'\'eeet', 'email@email.com', '112233', 'ssse\'\'\'', '2019-04-19 18:30:56'),
(11, 'TcbYx7', 'fffff', 'admin@email.com', 'senha123', 'fffff', '2019-04-19 19:41:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `cod_cliente` (`cod_cliente`);

--
-- Indexes for table `tbl_documento`
--
ALTER TABLE `tbl_documento`
  ADD PRIMARY KEY (`id_doc`),
  ADD UNIQUE KEY `cod_doc` (`cod_doc`);

--
-- Indexes for table `tbl_prestador`
--
ALTER TABLE `tbl_prestador`
  ADD PRIMARY KEY (`id_prestador`),
  ADD UNIQUE KEY `cod_prestador` (`cod_prestador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_documento`
--
ALTER TABLE `tbl_documento`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_prestador`
--
ALTER TABLE `tbl_prestador`
  MODIFY `id_prestador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
