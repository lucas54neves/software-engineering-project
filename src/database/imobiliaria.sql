-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2019 at 10:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(11) NOT NULL,
  `nome` text NOT NULL,
  `nascimento` date NOT NULL,
  `renda` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `nascimento`, `renda`) VALUES
('234', 'Maria', '2019-11-01', 300);

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `cpf` varchar(11) NOT NULL,
  `nome` text NOT NULL,
  `nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `nome`, `nascimento`) VALUES
('236', 'Marcela', '2019-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `imovel`
--

CREATE TABLE `imovel` (
  `idImovel` int(5) NOT NULL,
  `cpfProprietario` varchar(11) NOT NULL,
  `logradouro` text NOT NULL,
  `numero` int(5) NOT NULL,
  `bairro` text NOT NULL,
  `aluguel` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imovel`
--

INSERT INTO `imovel` (`idImovel`, `cpfProprietario`, `logradouro`, `numero`, `bairro`, `aluguel`) VALUES
(1, '123', 'Rua Dois', 5, 'Centro', 200),
(2, '123', 'Rua Um', 1, 'Centro', 400),
(3, '123', 'Rua Um', 2, 'Centro', 200),
(4, '444', 'Rua Sem Rua', 9, 'Sem Bairro', 600);

-- --------------------------------------------------------

--
-- Table structure for table `inquilino`
--

CREATE TABLE `inquilino` (
  `cpf` varchar(11) NOT NULL,
  `nome` text NOT NULL,
  `nascimento` date NOT NULL,
  `renda` float NOT NULL,
  `imovelAlugado` int(5) NOT NULL,
  `aluguel` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquilino`
--

INSERT INTO `inquilino` (`cpf`, `nome`, `nascimento`, `renda`, `imovelAlugado`, `aluguel`) VALUES
('222', 'Moura', '2019-11-01', 123, 1, 50),
('456', 'Lucas', '2019-11-01', 500, 2, 150);

-- --------------------------------------------------------

--
-- Table structure for table `proprietario`
--

CREATE TABLE `proprietario` (
  `cpf` varchar(11) NOT NULL,
  `nome` text NOT NULL,
  `nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proprietario`
--

INSERT INTO `proprietario` (`cpf`, `nome`, `nascimento`) VALUES
('123', 'Jose', '2019-11-01'),
('444', 'Marcos', '2019-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`idImovel`),
  ADD KEY `cpfProprietario` (`cpfProprietario`);

--
-- Indexes for table `inquilino`
--
ALTER TABLE `inquilino`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `imovelAlugado` (`imovelAlugado`);

--
-- Indexes for table `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imovel`
--
ALTER TABLE `imovel`
  MODIFY `idImovel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `imovel_ibfk_1` FOREIGN KEY (`cpfProprietario`) REFERENCES `proprietario` (`cpf`);

--
-- Constraints for table `inquilino`
--
ALTER TABLE `inquilino`
  ADD CONSTRAINT `inquilino_ibfk_1` FOREIGN KEY (`imovelAlugado`) REFERENCES `imovel` (`idImovel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
