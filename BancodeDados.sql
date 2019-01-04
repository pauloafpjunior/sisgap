-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04/01/2019 às 00:23
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
  `PExpDoc` text,
  `ExpProf` text NOT NULL,
  `ExpEAD` text NOT NULL,
  `ConhecInfo` varchar(10) DEFAULT NULL,
  `Curriculo` varchar(30) NOT NULL,
  `AtuaTutor` varchar(5) NOT NULL,
  `OutrasInfo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `mensagem`
--

INSERT INTO `mensagem` (`Nome`, `Nascimento`, `RG`, `CPF`, `Senha`, `ConfSenha`, `Endereco`, `Bairro`, `Cidade`, `CEP`, `Estado`, `Pais`, `Telefone`, `Celular`, `Email`, `ConfEmail`, `Graduacao`, `PosGraduacao`, `AreaposGrad`, `PExpDoc`, `ExpProf`, `ExpEAD`, `ConhecInfo`, `Curriculo`, `AtuaTutor`, `OutrasInfo`) VALUES
('Fabio Junio Rolin de Oliveiira', '01/01/1998', 999999999, 2147483647, 'umasenha', 'umasenha', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'am', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'Teste', 'Teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Fabio Junio Rolin de Oliveiira', '01/01/1998', 999999999, 2147483647, 'Testesenha', 'Testesenha', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'go', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'Teste', 'Teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Juliano Henrique de Oliveira', '01/01/1998', 999999999, 2147483647, 'testesenha', 'testesenha', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'mt', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'teste', 'teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Juliano Henrique de Oliveira', '01/01/1998', 999999999, 2147483647, 'senhateste', 'senhateste', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'mt', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'teste', 'teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Jacinto Leite Aquino Rego', '01/01/1998', 999999999, 2147483647, 'senhaumdois', 'senhaumdois', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'ms', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'teste', 'teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Juliano Henrique de Oliveira', '01/01/1998', 999999999, 2147483647, 'testesenha', 'testesenha', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'am', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'Teste', 'Teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Rafael Hernandez Melo', '01/01/1998', 999999999, 2147483647, 'testesenha', 'testesenha', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'ba', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'teste', 'teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Juliano Henrique de Oliveira', '01/01/1998', 999999999, 2147483647, 'testesenha', 'testesenha', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'mg', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'teste', 'teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Juliano Henrique de Oliveira', '01/01/1998', 999999999, 2147483647, 'testesenha', 'testesenha', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'ba', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'teste', 'teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Marcos Pereira Antonio', '01/01/1998', 999999999, 2147483647, 'testesenha', 'testesenha', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'ba', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'teste', 'teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Erivelton Marcelo do Rego', '01/01/1998', 999999999, 2147483647, 'testesenha', 'testesenha', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'ba', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'teste', 'teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Jacinto Leite Aquino Rego', '01/01/1998', 999999999, 2147483647, 'testesenha', 'testesenha', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'ms', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'teste', 'teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL),
('Marcos Aurélio Matias', '01/01/1998', 999999999, 2147483647, 'testeteste', 'testeteste', 'Rua das Goiabas', 'Elias Raimundo', 'Oliveira', 35540000, 'ms', 'Brasil', '99999999999', '99999999999', 'fabio@teste.com.br', 'fabio@teste.com.br', 'Computação', '0', 'Nenhuma', NULL, 'teste', 'teste', 'option3', 'sitealeatorio.com.br', 'optio', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
