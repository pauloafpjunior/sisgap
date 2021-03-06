-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 08/05/2019 às 20:47
-- Versão do servidor: 5.7.26-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sisgap`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Usuarios`
--

CREATE TABLE `Usuarios` (
  `status` tinyint(1) NOT NULL,
  `token_verificacao` varchar(225) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Nascimento` varchar(10) NOT NULL,
  `RG` varchar(20) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `Endereco` text NOT NULL,
  `Bairro` varchar(20) NOT NULL,
  `Cidade` varchar(20) NOT NULL,
  `CEP` varchar(20) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Pais` varchar(20) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Celular` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ConfEmail` varchar(30) NOT NULL,
  `Graduacao` varchar(20) NOT NULL,
  `PosGraduacao` varchar(30) NOT NULL,
  `AreaposGrad` varchar(50) NOT NULL,
  `PExpDoc` text,
  `ExpProf` varchar(500) NOT NULL,
  `ExpEAD` varchar(500) NOT NULL,
  `ConhecInfo` varchar(10) NOT NULL,
  `Curriculo` varchar(30) NOT NULL,
  `AtuaTutor` varchar(5) NOT NULL,
  `CursoTutor` varchar(30) DEFAULT NULL,
  `PeriodoTutor` varchar(20) DEFAULT NULL,
  `OutrasInfo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Usuarios`
--

INSERT INTO `Usuarios` (`status`, `token_verificacao`, `Nome`, `Nascimento`, `RG`, `CPF`, `Senha`, `Endereco`, `Bairro`, `Cidade`, `CEP`, `Estado`, `Pais`, `Telefone`, `Celular`, `Email`, `ConfEmail`, `Graduacao`, `PosGraduacao`, `AreaposGrad`, `PExpDoc`, `ExpProf`, `ExpEAD`, `ConhecInfo`, `Curriculo`, `AtuaTutor`, `CursoTutor`, `PeriodoTutor`, `OutrasInfo`) VALUES
(1, '809025b128761055df7af5b38a7bc434', 'Marcelo Mena Arantes', '26/03/1994', 'MG20596137', '141.208.426-12', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Rua das goiabas', 'Elias Raimundo', 'Oliveira', '35.540-000', 'mg', 'Brasil', '(37) 9919-0416', '(37) 99919-0416', 'fabiojunio385@outlook.com', 'fabiojunio385@outlook.com', 'Computação', '0', 'Nenhuma', '0', 'Teste Teste', 'Teste Teste', '2', 'sitealeatorio.com.br', '0', NULL, NULL, 'Teste Teste'),
(1, 'ddae2e291385ccc590aed9fa8d5c59ff', 'Juliano Henrique de Oliveira', '01/01/1998', 'MG20596135', '141.208.426-13', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Rua das goiabas', 'Elias Raimundo', 'Oliveira', '35.540-000', 'mg', 'Brasil', '(37) 9919-0416', '(37) 99919-0416', 'fabiojunio385@gmail.com', 'fabiojunio385@gmail.com', 'Computação', '0', 'Nenhuma', '0', 'Teste Teste', 'Teste Teste', '2', 'sitealeatorio.com.br', '0', NULL, NULL, 'Teste Teste'),
(1, 'b49bba9df52b024d2dc6b0d7b44d39db', 'Fabio Junio Rolin de Oliveira', '01/01/1998', 'MG20596136', '141.208.426-14', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Rua das Goiabas', 'Elias Raimundo', 'Lavras', '35.540-000', 'mg', 'Brasil', '(37) 9919-0417', '(37) 99919-0417', 'fabiojunio385@outlook.com', 'fabiojunio385@outlook.com', 'Computação', '0', 'Nenhuma', '0', 'Teste', 'Teste', '2', 'sitealeatorio.com.br', '0', NULL, NULL, 'Teste'),
(1, '8e83c87804e8abba5ac9ab6b2281efb2', 'Ernesto Marciel Trineto', '01/01/1998', 'MG20596134', '141.208.426-15', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Rua das goiabas', 'Elias Raimundo', 'Oliveira', '35.540-000', 'mg', 'Brasil', '(37) 9919-0416', '(37) 99919-0416', 'fabiojunio385@outlook.com', 'fabiojunio385@outlook.com', 'Computação', '0', 'Nenhuma', '0', 'Teste Teste', 'Teste Teste', '2', 'sitealeatorio.com.br', '0', NULL, NULL, 'Teste'),
(1, '33a6f7accc6e3b0ff7c093f97ab7fe1b', 'Otavio Augusto', '01/01/1998', 'MG20596131', '141.208.426-17', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Rua das goiabas', 'Elias Raimundo', 'Oliveira', '35.540-000', 'mg', 'Brasil', '(37) 9919-0416', '(37) 99919-041', 'otavioresende1998@gmail.com', 'otavioresende1998@gmail.com', 'Computação', '0', 'Nenhuma', '1', 'Teste', 'Teste', '2', 'sitealeatorio.com.br', '1', NULL, NULL, 'Teste'),
(1, '1de61ed1422b36774050861dfa7d51aa', 'Marcos Paulo Rolin de Oliveira', '13/06/1994', 'MG20596140', '141.208.426-18', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Rua das goiabas', 'Elias Raimundo', 'Oliveira', '35.550-000', 'mg', 'Brasil', '(37) 9919-0416', '(37) 99919-0416', 'fabiojunio385@gmail.com', 'fabiojunio385@gmail.com', 'Computação', '0', 'Nenhuma', '0', 'Teste', 'Teste', '2', 'sitealeatorio.com.br', '0', NULL, NULL, 'Teste');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`CPF`),
  ADD UNIQUE KEY `CPF` (`CPF`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
