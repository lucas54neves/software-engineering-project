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
  `id` INT NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `nascimento` DATE NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
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
  PRIMARY KEY (`id`),
  INDEX `fk_Imovel_Proprietario_idx` (`idProprietario` ASC),
  CONSTRAINT `fk_Imovel_Proprietario`
    FOREIGN KEY (`idProprietario`)
    REFERENCES `imobiliaria`.`Proprietario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `imobiliaria`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imobiliaria`.`Cliente` (
  `id` INT NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `renda` DOUBLE NOT NULL,
  `nascimento` DATE NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `imobiliaria`.`Funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imobiliaria`.`Funcionario` (
  `id` INT NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `nascimento` DATE NOT NULL,
  `senha` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `imobiliaria`.`Contrato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imobiliaria`.`Contrato` (
  `idContrato` INT NOT NULL,
  `aluguelContrato` DOUBLE NULL,
  `idProprietario` INT NOT NULL,
  `idCliente` INT NOT NULL,
  `idImovel` INT NOT NULL,
  `idFuncionario` INT NOT NULL,
  PRIMARY KEY (`idContrato`),
  INDEX `fk_Contrato_Proprietario1_idx` (`idProprietario` ASC),
  INDEX `fk_Contrato_Cliente1_idx` (`idCliente` ASC),
  INDEX `fk_Contrato_Imovel1_idx` (`idImovel` ASC),
  INDEX `fk_Contrato_Funcionario1_idx` (`idFuncionario` ASC),
  CONSTRAINT `fk_Contrato_Proprietario1`
    FOREIGN KEY (`idProprietario`)
    REFERENCES `imobiliaria`.`Proprietario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contrato_Cliente1`
    FOREIGN KEY (`idCliente`)
    REFERENCES `imobiliaria`.`Cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contrato_Imovel1`
    FOREIGN KEY (`idImovel`)
    REFERENCES `imobiliaria`.`Imovel` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contrato_Funcionario1`
    FOREIGN KEY (`idFuncionario`)
    REFERENCES `imobiliaria`.`Funcionario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
