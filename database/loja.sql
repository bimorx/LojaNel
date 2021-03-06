-- MySQL Script generated by MySQL Workbench
-- 01/24/15 18:01:10
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lojanel
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lojanel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lojanel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `lojanel` ;

-- -----------------------------------------------------
-- Table `lojanel`.`GrupoDeAcesso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`GrupoDeAcesso` (
  `IdGrupoDeAcesso` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdGrupoDeAcesso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`Usuario` (
  `IdUsuario` INT NOT NULL AUTO_INCREMENT,
  `Alias` VARCHAR(255) NOT NULL,
  `Senha` VARCHAR(40) NOT NULL,
  `GrupoDeAcesso_IdGrupoDeAcesso` INT NOT NULL,
  PRIMARY KEY (`IdUsuario`),
  INDEX `fk_Usuario_GrupoDeAcesso1_idx` (`GrupoDeAcesso_IdGrupoDeAcesso` ASC),
  CONSTRAINT `fk_Usuario_GrupoDeAcesso1`
    FOREIGN KEY (`GrupoDeAcesso_IdGrupoDeAcesso`)
    REFERENCES `lojanel`.`GrupoDeAcesso` (`IdGrupoDeAcesso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`Produto` (
  `IdProduto` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(100) NOT NULL,
  `Valor` FLOAT(12,2) NOT NULL,
  `Descricao` TEXT NOT NULL,
  `DtInsercao` DATETIME NOT NULL,
  `Usuario_IdUsuario` INT NOT NULL,
  PRIMARY KEY (`IdProduto`),
  INDEX `fk_Produto_Usuario1_idx` (`Usuario_IdUsuario` ASC),
  CONSTRAINT `fk_Produto_Usuario1`
    FOREIGN KEY (`Usuario_IdUsuario`)
    REFERENCES `lojanel`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`Categoria` (
  `IdCategoria` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `Usuario_IdUsuario` INT NOT NULL,
  PRIMARY KEY (`IdCategoria`),
  INDEX `fk_Categoria_Usuario1_idx` (`Usuario_IdUsuario` ASC),
  CONSTRAINT `fk_Categoria_Usuario1`
    FOREIGN KEY (`Usuario_IdUsuario`)
    REFERENCES `lojanel`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`SubCategoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`SubCategoria` (
  `IdSubCategoria` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `Categoria_IdCategoria` INT NOT NULL,
  PRIMARY KEY (`IdSubCategoria`),
  INDEX `fk_SubCategoria_Categoria1_idx` (`Categoria_IdCategoria` ASC),
  CONSTRAINT `fk_SubCategoria_Categoria1`
    FOREIGN KEY (`Categoria_IdCategoria`)
    REFERENCES `lojanel`.`Categoria` (`IdCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`Produto_SubCategoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`Produto_SubCategoria` (
  `Produto_IdProduto` INT NOT NULL,
  `SubCategoria_IdSubCategoria` INT NOT NULL,
  PRIMARY KEY (`Produto_IdProduto`, `SubCategoria_IdSubCategoria`),
  INDEX `fk_Produto_has_SubCategoria_SubCategoria1_idx` (`SubCategoria_IdSubCategoria` ASC),
  INDEX `fk_Produto_has_SubCategoria_Produto_idx` (`Produto_IdProduto` ASC),
  CONSTRAINT `fk_Produto_has_SubCategoria_Produto`
    FOREIGN KEY (`Produto_IdProduto`)
    REFERENCES `lojanel`.`Produto` (`IdProduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produto_has_SubCategoria_SubCategoria1`
    FOREIGN KEY (`SubCategoria_IdSubCategoria`)
    REFERENCES `lojanel`.`SubCategoria` (`IdSubCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`PermissaoDeAcesso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`PermissaoDeAcesso` (
  `IdPermissaoDeAcesso` INT NOT NULL AUTO_INCREMENT,
  `ArqPagina` VARCHAR(45) NOT NULL COMMENT 'Arquivo da página para limitar acesso.',
  `GrupoDeAcesso_IdGrupoDeAcesso` INT NOT NULL,
  PRIMARY KEY (`IdPermissaoDeAcesso`),
  INDEX `fk_PermissaoDeAcesso_GrupoDeAcesso1_idx` (`GrupoDeAcesso_IdGrupoDeAcesso` ASC),
  CONSTRAINT `fk_PermissaoDeAcesso_GrupoDeAcesso1`
    FOREIGN KEY (`GrupoDeAcesso_IdGrupoDeAcesso`)
    REFERENCES `lojanel`.`GrupoDeAcesso` (`IdGrupoDeAcesso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`Endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`Endereco` (
  `IdEndereco` INT NOT NULL AUTO_INCREMENT,
  `Logradouro` VARCHAR(200) NOT NULL,
  `Cep` VARCHAR(8) NOT NULL,
  `Uf` VARCHAR(100) NOT NULL,
  `Cidade` VARCHAR(200) NOT NULL,
  `Bairro` VARCHAR(150) NOT NULL,
  `Numero` VARCHAR(6) NOT NULL,
  `Complemento` VARCHAR(300) NULL,
  PRIMARY KEY (`IdEndereco`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`Funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`Funcionario` (
  `IdFuncionario` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(80) NOT NULL,
  `Cpf` INT(11) UNSIGNED NOT NULL,
  `Rg` VARCHAR(12) NULL,
  `DtNascimento` DATE NOT NULL,
  `Usuario_IdUsuario` INT NOT NULL,
  `Endereco_IdEndereco` INT NOT NULL,
  PRIMARY KEY (`IdFuncionario`),
  INDEX `fk_Funcionario_Usuario1_idx` (`Usuario_IdUsuario` ASC),
  INDEX `fk_Funcionario_Endereco1_idx` (`Endereco_IdEndereco` ASC),
  CONSTRAINT `fk_Funcionario_Usuario1`
    FOREIGN KEY (`Usuario_IdUsuario`)
    REFERENCES `lojanel`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Funcionario_Endereco1`
    FOREIGN KEY (`Endereco_IdEndereco`)
    REFERENCES `lojanel`.`Endereco` (`IdEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`Cliente` (
  `IdFuncionario` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(80) NOT NULL,
  `Cpf` INT(11) UNSIGNED NOT NULL,
  `Rg` VARCHAR(12) NULL,
  `DtNascimento` DATE NOT NULL,
  `Usuario_IdUsuario` INT NOT NULL,
  `Endereco_IdEndereco` INT NOT NULL,
  PRIMARY KEY (`IdFuncionario`),
  INDEX `fk_Cliente_Usuario1_idx` (`Usuario_IdUsuario` ASC),
  INDEX `fk_Cliente_Endereco1_idx` (`Endereco_IdEndereco` ASC),
  CONSTRAINT `fk_Cliente_Usuario1`
    FOREIGN KEY (`Usuario_IdUsuario`)
    REFERENCES `lojanel`.`Usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cliente_Endereco1`
    FOREIGN KEY (`Endereco_IdEndereco`)
    REFERENCES `lojanel`.`Endereco` (`IdEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`Compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`Compra` (
  `IdCompra` INT NOT NULL AUTO_INCREMENT,
  `DtCompra` DATETIME NOT NULL,
  `Cliente_IdFuncionario` INT NOT NULL,
  PRIMARY KEY (`IdCompra`),
  INDEX `fk_Compra_Cliente1_idx` (`Cliente_IdFuncionario` ASC),
  CONSTRAINT `fk_Compra_Cliente1`
    FOREIGN KEY (`Cliente_IdFuncionario`)
    REFERENCES `lojanel`.`Cliente` (`IdFuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`ItemCompra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`ItemCompra` (
  `IdItemCompra` INT NOT NULL AUTO_INCREMENT,
  `Produto_IdProduto` INT NOT NULL,
  `Compra_IdCompra` INT NOT NULL,
  PRIMARY KEY (`IdItemCompra`),
  INDEX `fk_ItemCompra_Produto1_idx` (`Produto_IdProduto` ASC),
  INDEX `fk_ItemCompra_Compra1_idx` (`Compra_IdCompra` ASC),
  CONSTRAINT `fk_ItemCompra_Produto1`
    FOREIGN KEY (`Produto_IdProduto`)
    REFERENCES `lojanel`.`Produto` (`IdProduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ItemCompra_Compra1`
    FOREIGN KEY (`Compra_IdCompra`)
    REFERENCES `lojanel`.`Compra` (`IdCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lojanel`.`Entrega`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lojanel`.`Entrega` (
  `IdEntrega` INT NOT NULL AUTO_INCREMENT,
  `NmResponsavel` VARCHAR(200) NOT NULL,
  `CpfResponsavel` VARCHAR(11) NULL,
  `Compra_IdCompra` INT NOT NULL,
  `Endereco_IdEndereco` INT NOT NULL,
  PRIMARY KEY (`IdEntrega`),
  INDEX `fk_Entrega_Compra1_idx` (`Compra_IdCompra` ASC),
  INDEX `fk_Entrega_Endereco1_idx` (`Endereco_IdEndereco` ASC),
  CONSTRAINT `fk_Entrega_Compra1`
    FOREIGN KEY (`Compra_IdCompra`)
    REFERENCES `lojanel`.`Compra` (`IdCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Entrega_Endereco1`
    FOREIGN KEY (`Endereco_IdEndereco`)
    REFERENCES `lojanel`.`Endereco` (`IdEndereco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
