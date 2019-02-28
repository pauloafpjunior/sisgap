-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 27/02/2019 às 23:52
-- Versão do servidor: 5.7.25-0ubuntu0.18.04.2
-- Versão do PHP: 7.2.15-0ubuntu0.18.04.1

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
  `OutrasInfo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Usuarios`
--

INSERT INTO `Usuarios` (`status`, `token_verificacao`, `Nome`, `Nascimento`, `RG`, `CPF`, `Senha`, `Endereco`, `Bairro`, `Cidade`, `CEP`, `Estado`, `Pais`, `Telefone`, `Celular`, `Email`, `ConfEmail`, `Graduacao`, `PosGraduacao`, `AreaposGrad`, `PExpDoc`, `ExpProf`, `ExpEAD`, `ConhecInfo`, `Curriculo`, `AtuaTutor`, `OutrasInfo`) VALUES
(1, 'b49bba9df52b024d2dc6b0d7b44d39db', 'Fabio Junio Rolin de Oliveira', '01/01/1998', 'MG20596136', '141.208.426-14', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', '35.540-000', 'mg', 'Brasil', '(37) 9919-0416', '(37) 99919-0416', 'fabiojunio385@outlook.com', 'fabiojunio385@outlook.com', 'Computação', '0', 'Nenhuma', '0', 'Teste', 'Teste', '2', 'sitealeatorio.com.br', '0', 'Teste'),
(1, 'ddae2e291385ccc590aed9fa8d5c59ff', 'Juliano Henrique de Oliveira', '01/01/1998', 'MG20596135', '141.208.426-13', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Rua das goiabas', 'Elias Raimundo', 'Oliveira', '35.540-000', 'mg', 'Brasil', '(37) 9919-0416', '(37) 99919-0416', 'fabiojunio385@gmail.com', 'fabiojunio385@gmail.com', 'Computação', '0', 'Nenhuma', '0', 'Teste Teste', 'Teste Teste', '2', 'sitealeatorio.com.br', '0', 'Teste Teste'),
(1, '809025b128761055df7af5b38a7bc434', 'Marcelo Mena Arantes', '26/03/1994', 'MG20596137', '141.208.426-12', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Rua das goiabas', 'Elias Raimundo', 'Oliveira', '35.540-000', 'mg', 'Brasil', '(37) 9919-0416', '(37) 99919-0416', 'fabiojunio385@outlook.com', 'fabiojunio385@outlook.com', 'Computação', '0', 'Nenhuma', '0', 'Teste Teste', 'Teste Teste', '2', 'sitealeatorio.com.br', '0', 'Teste Teste'),
(1, '8e83c87804e8abba5ac9ab6b2281efb2', 'Ernesto Marciel Trineto', '01/01/1998', 'MG20596134', '141.208.426-15', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Rua das goiabas', 'Elias Raimundo', 'Oliveira', '35.540-000', 'mg', 'Brasil', '(37) 9919-0416', '(37) 99919-0416', 'fabiojunio385@outlook.com', 'fabiojunio385@outlook.com', 'Computação', '0', 'Nenhuma', '0', 'Teste Teste', 'Teste Teste', '2', 'sitealeatorio.com.br', '0', 'Teste');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
