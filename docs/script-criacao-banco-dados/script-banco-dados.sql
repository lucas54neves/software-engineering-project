-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema imobiliaria
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema imobiliaria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `imobiliaria` DEFAULT CHARACTER SET utf8 ;
USE `imobiliaria` ;

-- -----------------------------------------------------
-- Table `imobiliaria`.`Proprietario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imobiliaria`.`Proprietario` (
  `cpf` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `nascimento` DATE NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `imobiliaria`.`Imovel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imobiliaria`.`Imovel` (
  `id` INT NOT NULL,
  `logradouro` VARCHAR(75) NOT NULL,
  `numero` INT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `aluguel` DOUBLE NOT NULL,
  `idProprietario` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `imobiliaria`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imobiliaria`.`Cliente` (
  `cpf` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `renda` DOUBLE NOT NULL,
  `nascimento` DATE NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `imobiliaria`.`Funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imobiliaria`.`Funcionario` (
  `cpf` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `nascimento` DATE NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`cpf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `imobiliaria`.`Contrato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imobiliaria`.`Contrato` (
  `idContrato` INT NOT NULL,
  `aluguelContrato` DOUBLE NULL,
  `idImovel` INT NOT NULL,
  `cpfProprietario` VARCHAR(11) NOT NULL,
  `cpfFuncionario` VARCHAR(11) NOT NULL,
  `cpfCliente` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`idContrato`),
  INDEX `fk_Contrato_Imovel1_idx` (`idImovel` ASC),
  INDEX `fk_Contrato_Proprietario1_idx` (`cpfProprietario` ASC),
  INDEX `fk_Contrato_Funcionario1_idx` (`cpfFuncionario` ASC),
  INDEX `fk_Contrato_Cliente1_idx` (`cpfCliente` ASC),
  CONSTRAINT `fk_Contrato_Imovel1`
    FOREIGN KEY (`idImovel`)
    REFERENCES `imobiliaria`.`Imovel` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contrato_Proprietario1`
    FOREIGN KEY (`cpfProprietario`)
    REFERENCES `imobiliaria`.`Proprietario` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contrato_Funcionario1`
    FOREIGN KEY (`cpfFuncionario`)
    REFERENCES `imobiliaria`.`Funcionario` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contrato_Cliente1`
    FOREIGN KEY (`cpfCliente`)
    REFERENCES `imobiliaria`.`Cliente` (`cpf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
