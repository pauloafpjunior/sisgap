-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24/12/2018 às 00:05
-- Versão do servidor: 5.7.24-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.10-0ubuntu0.18.04.1

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
-- Estrutura para tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `Nome` varchar(50) NOT NULL,
  `Nascimento` varchar(10) NOT NULL,
  `RG` int(20) NOT NULL,
  `CPF` int(20) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `ConfSenha` varchar(50) NOT NULL,
  `Endereco` text NOT NULL,
  `Bairro` varchar(20) NOT NULL,
  `Cidade` varchar(20) NOT NULL,
  `CEP` int(20) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Pais` varchar(20) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Celular` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ConfEmail` varchar(30) NOT NULL,
  `Graduacao` varchar(20) NOT NULL,
  `PosGraduacao` varchar(30) NOT NULL,
  `AreaposGrad` varchar(50) NOT NULL,
  `PExpDoc` varchar(10) DEFAULT NULL,
  `ExpProf` text NOT NULL,
  `ExpEAD` text NOT NULL,
  `ConhecInfo` varchar(10) NOT NULL,
  `Curriculo` varchar(30) NOT NULL,
  `AtuaTutor` varchar(5) NOT NULL,
  `OutrasInfo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `mensagem`
--

INSERT INTO `mensagem` (`Nome`, `Nascimento`, `RG`, `CPF`, `Senha`, `ConfSenha`, `Endereco`, `Bairro`, `Cidade`, `CEP`, `Estado`, `Pais`, `Telefone`, `Celular`, `Email`, `ConfEmail`, `Graduacao`, `PosGraduacao`, `AreaposGrad`, `PExpDoc`, `ExpProf`, `ExpEAD`, `ConhecInfo`, `Curriculo`, `AtuaTutor`, `OutrasInfo`) VALUES
('', '', 0, 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', 0, 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', 0, 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('Fabio Junio', '01/01/1998', 234567, 234567, '21345678', '12345678', '23145678', '21345678', '2134567', 2345678, 'pe', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', '234567', NULL, 'Teste', 'Teste', 'option1', 'sitealeatorio.com.br', 'optio', ''),
('Fabio Junio', '01/01/1998', 234567, 234567, '21345678', '12345678', '23145678', '21345678', '2134567', 2345678, 'pe', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', '234567', NULL, 'Teste', 'Teste', 'option1', 'sitealeatorio.com.br', 'optio', ''),
('Rafael Assis', '01/02/1998', 987678908, 2147483647, 'teste', 'teste\'', 'LatifeSimao 12', 'EliasRaimundo', 'Lavras', 35540000, 'mg', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'Area de TI', 'Nao possui', 'option1', 'sitealeatorio.com.br', 'optio', ''),
('Fabio Junio', '01/01/1998', 234567, 234567, '21345678', '12345678', 'Rua das Goiabas', 'Santa Efigênia', 'Oliveira', 35540000, 'mg', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'Nao tenho nenhuma ainda', 'Nao', 'option1', 'sitealeatorio.com.br', 'optio', ''),
('Fabio Junio', '01/01/1998', 234567, 234567, '21345678', '12345678', 'Rua das Goiabas', 'Santa Efigênia', 'Oliveira', 35540000, 'mg', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'Nao tenho nenhuma ainda', 'Nao', 'option1', 'sitealeatorio.com.br', 'optio', ''),
('Marcos Augusto', '01/01/1998', 234567, 234567, '21345678', '12345678', '23145678', '21345678', '2134567', 2345678, 'mg', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '1', 'Ainda pensando', NULL, 'Todas possiveis', 'To quase lá', 'option1', 'sitealeatorio.com.br', 'optio', NULL),
('Marcos Augusto', '01/01/1998', 234567, 234567, '21345678', '12345678', '23145678', '21345678', '2134567', 2345678, 'mg', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '1', 'Ainda pensando', NULL, 'Todas possiveis', 'To quase lá', 'option1', 'sitealeatorio.com.br', 'optio', NULL),
('Paulo Lima', '01/01/1998', 234567, 234567, '21345678', '12345678', '23145678', '21345678', '2134567', 2345678, 'mg', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '1', 'Ainda pensando', NULL, 'Todas possiveis', 'To quase lá', 'option1', 'sitealeatorio.com.br', 'optio', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
