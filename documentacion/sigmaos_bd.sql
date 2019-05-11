-- MySQL Script generated by MySQL Workbench
-- Sat May 11 13:43:18 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sigmaos_bd
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sigmaos_bd
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sigmaos_bd` DEFAULT CHARACTER SET utf8 ;
USE `sigmaos_bd` ;

-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_cate`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_cate` (
  `ident_cate` INT NOT NULL AUTO_INCREMENT,
  `nombr_cate` VARCHAR(100) NULL,
  PRIMARY KEY (`ident_cate`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_prod`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_prod` (
  `ident_prod` INT NOT NULL AUTO_INCREMENT,
  `nombr_prod` VARCHAR(100) NULL,
  `desco_prod` VARCHAR(200) NULL,
  `desla_prod` VARCHAR(400) NULL,
  `costo_prod` FLOAT NULL,
  `pesoo_prod` FLOAT NULL,
  `taman_prod` FLOAT NULL,
  `stock_prod` INT NULL,
  `estad_prod` VARCHAR(20) NULL,
  `imag1_prod` VARCHAR(300) NULL,
  `imag2_prod` VARCHAR(300) NULL,
  `imag3_prod` VARCHAR(300) NULL,
  `statu_prod` INT NULL,
  `tabla_cate_ident_cate` INT NOT NULL,
  PRIMARY KEY (`ident_prod`),
  INDEX `fk_tabla_prod_tabla_cate1_idx` (`tabla_cate_ident_cate` ASC),
  CONSTRAINT `fk_tabla_prod_tabla_cate1`
    FOREIGN KEY (`tabla_cate_ident_cate`)
    REFERENCES `sigmaos_bd`.`tabla_cate` (`ident_cate`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_clie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_clie` (
  `ident_clie` INT NOT NULL AUTO_INCREMENT,
  `nomb1_clie` VARCHAR(20) NULL,
  `nomb2_clie` VARCHAR(20) NULL,
  `apel1_clie` VARCHAR(20) NULL,
  `apel2_clie` VARCHAR(20) NULL,
  `gener_clie` VARCHAR(10) NULL,
  `telef_clie` INT NULL,
  `email_clie` VARCHAR(100) NULL,
  `usuar_clie` VARCHAR(20) NULL,
  `contra_clie` VARCHAR(20) NULL,
  `fecreg_clie` DATE NULL,
  `statu_clie` INT NULL,
  PRIMARY KEY (`ident_clie`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_stor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_stor` (
  `ident_stor` INT NOT NULL AUTO_INCREMENT,
  `descr_stor` VARCHAR(50) NULL,
  PRIMARY KEY (`ident_stor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_orde`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_orde` (
  `ident_orde` INT NOT NULL AUTO_INCREMENT,
  `fecha_orde` DATE NULL,
  `monta_orde` FLOAT NULL,
  `tabla_clie_ident_clie` INT NOT NULL,
  `tabla_stor_ident_stor` INT NOT NULL,
  PRIMARY KEY (`ident_orde`),
  INDEX `fk_tabla_orde_tabla_clie1_idx` (`tabla_clie_ident_clie` ASC),
  INDEX `fk_tabla_orde_tabla_stor1_idx` (`tabla_stor_ident_stor` ASC),
  CONSTRAINT `fk_tabla_orde_tabla_clie1`
    FOREIGN KEY (`tabla_clie_ident_clie`)
    REFERENCES `sigmaos_bd`.`tabla_clie` (`ident_clie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabla_orde_tabla_stor1`
    FOREIGN KEY (`tabla_stor_ident_stor`)
    REFERENCES `sigmaos_bd`.`tabla_stor` (`ident_stor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_pais` (
  `ident_pais` INT NOT NULL AUTO_INCREMENT,
  `nombr_pais` VARCHAR(50) NULL,
  PRIMARY KEY (`ident_pais`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_esta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_esta` (
  `ident_esta` INT NOT NULL AUTO_INCREMENT,
  `nombr_esta` VARCHAR(50) NULL,
  `tabla_pais_ident_pais` INT NOT NULL,
  PRIMARY KEY (`ident_esta`),
  INDEX `fk_tabla_esta_tabla_pais1_idx` (`tabla_pais_ident_pais` ASC),
  CONSTRAINT `fk_tabla_esta_tabla_pais1`
    FOREIGN KEY (`tabla_pais_ident_pais`)
    REFERENCES `sigmaos_bd`.`tabla_pais` (`ident_pais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_muni`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_muni` (
  `ident_muni` INT NOT NULL AUTO_INCREMENT,
  `nombr_muni` VARCHAR(50) NULL,
  `tabla_esta_ident_esta` INT NOT NULL,
  PRIMARY KEY (`ident_muni`),
  INDEX `fk_tabla_muni_tabla_esta1_idx` (`tabla_esta_ident_esta` ASC),
  CONSTRAINT `fk_tabla_muni_tabla_esta1`
    FOREIGN KEY (`tabla_esta_ident_esta`)
    REFERENCES `sigmaos_bd`.`tabla_esta` (`ident_esta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_dire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_dire` (
  `ident_dire` INT NOT NULL AUTO_INCREMENT,
  `calle_dire` VARCHAR(100) NULL,
  `aveni_dire` VARCHAR(100) NULL,
  `secto_dire` VARCHAR(100) NULL,
  `codpo_dire` INT NULL,
  `tabla_clie_ident_clie` INT NOT NULL,
  `tabla_muni_ident_muni` INT NOT NULL,
  INDEX `fk_tabla_dire_tabla_clie1_idx` (`tabla_clie_ident_clie` ASC),
  PRIMARY KEY (`ident_dire`),
  INDEX `fk_tabla_dire_tabla_muni1_idx` (`tabla_muni_ident_muni` ASC),
  CONSTRAINT `fk_tabla_dire_tabla_clie1`
    FOREIGN KEY (`tabla_clie_ident_clie`)
    REFERENCES `sigmaos_bd`.`tabla_clie` (`ident_clie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabla_dire_tabla_muni1`
    FOREIGN KEY (`tabla_muni_ident_muni`)
    REFERENCES `sigmaos_bd`.`tabla_muni` (`ident_muni`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_fact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_fact` (
  `ident_fact` INT NOT NULL AUTO_INCREMENT,
  `fecha_fact` DATE NULL,
  `monta_fact` FLOAT NULL,
  `statu_fact` VARCHAR(50) NULL,
  `tabla_orde_ident_orde` INT NOT NULL,
  PRIMARY KEY (`ident_fact`),
  INDEX `fk_tabla_fact_tabla_orde1_idx` (`tabla_orde_ident_orde` ASC),
  CONSTRAINT `fk_tabla_fact_tabla_orde1`
    FOREIGN KEY (`tabla_orde_ident_orde`)
    REFERENCES `sigmaos_bd`.`tabla_orde` (`ident_orde`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_empr`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_empr` (
  `ident_empr` INT NOT NULL AUTO_INCREMENT,
  `nombr_empr` VARCHAR(20) NULL,
  PRIMARY KEY (`ident_empr`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_envi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_envi` (
  `ident_envi` INT NOT NULL AUTO_INCREMENT,
  `fecha_envi` DATE NULL,
  `track_envi` INT NULL,
  `tabla_orde_ident_orde` INT NOT NULL,
  `tabla_dire_ident_dire` INT NOT NULL,
  `tabla_fact_ident_fact` INT NOT NULL,
  `tabla_empr_ident_empr` INT NOT NULL,
  PRIMARY KEY (`ident_envi`),
  INDEX `fk_tabla_envi_tabla_orde1_idx` (`tabla_orde_ident_orde` ASC),
  INDEX `fk_tabla_envi_tabla_dire1_idx` (`tabla_dire_ident_dire` ASC),
  INDEX `fk_tabla_envi_tabla_fact1_idx` (`tabla_fact_ident_fact` ASC),
  INDEX `fk_tabla_envi_tabla_empr1_idx` (`tabla_empr_ident_empr` ASC),
  CONSTRAINT `fk_tabla_envi_tabla_orde1`
    FOREIGN KEY (`tabla_orde_ident_orde`)
    REFERENCES `sigmaos_bd`.`tabla_orde` (`ident_orde`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabla_envi_tabla_dire1`
    FOREIGN KEY (`tabla_dire_ident_dire`)
    REFERENCES `sigmaos_bd`.`tabla_dire` (`ident_dire`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabla_envi_tabla_fact1`
    FOREIGN KEY (`tabla_fact_ident_fact`)
    REFERENCES `sigmaos_bd`.`tabla_fact` (`ident_fact`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabla_envi_tabla_empr1`
    FOREIGN KEY (`tabla_empr_ident_empr`)
    REFERENCES `sigmaos_bd`.`tabla_empr` (`ident_empr`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_deor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_deor` (
  `canti_orde` INT NULL,
  `monto_orde` FLOAT NULL,
  `tabla_orde_ident_orde` INT NOT NULL,
  `tabla_prod_ident_prod` INT NOT NULL,
  `tabla_envi_ident_envi` INT NOT NULL,
  INDEX `fk_tabla_deor_tabla_orde1_idx` (`tabla_orde_ident_orde` ASC),
  INDEX `fk_tabla_deor_tabla_prod1_idx` (`tabla_prod_ident_prod` ASC),
  INDEX `fk_tabla_deor_tabla_envi1_idx` (`tabla_envi_ident_envi` ASC),
  CONSTRAINT `fk_tabla_deor_tabla_orde1`
    FOREIGN KEY (`tabla_orde_ident_orde`)
    REFERENCES `sigmaos_bd`.`tabla_orde` (`ident_orde`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabla_deor_tabla_prod1`
    FOREIGN KEY (`tabla_prod_ident_prod`)
    REFERENCES `sigmaos_bd`.`tabla_prod` (`ident_prod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabla_deor_tabla_envi1`
    FOREIGN KEY (`tabla_envi_ident_envi`)
    REFERENCES `sigmaos_bd`.`tabla_envi` (`ident_envi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_cart`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_cart` (
  `ident_cart` INT NOT NULL AUTO_INCREMENT,
  `fecha_cart` DATE NULL,
  `monta_cart` FLOAT NULL,
  `tabla_clie_ident_clie` INT NOT NULL,
  PRIMARY KEY (`ident_cart`),
  INDEX `fk_tabla_cart_tabla_clie1_idx` (`tabla_clie_ident_clie` ASC),
  CONSTRAINT `fk_tabla_cart_tabla_clie1`
    FOREIGN KEY (`tabla_clie_ident_clie`)
    REFERENCES `sigmaos_bd`.`tabla_clie` (`ident_clie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_deca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_deca` (
  `canti_deca` INT NULL,
  `monto_deca` FLOAT NULL,
  `tabla_cart_ident_cart` INT NOT NULL,
  `tabla_prod_ident_prod` INT NOT NULL,
  INDEX `fk_tabla_deca_tabla_cart1_idx` (`tabla_cart_ident_cart` ASC),
  INDEX `fk_tabla_deca_tabla_prod1_idx` (`tabla_prod_ident_prod` ASC),
  CONSTRAINT `fk_tabla_deca_tabla_cart1`
    FOREIGN KEY (`tabla_cart_ident_cart`)
    REFERENCES `sigmaos_bd`.`tabla_cart` (`ident_cart`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabla_deca_tabla_prod1`
    FOREIGN KEY (`tabla_prod_ident_prod`)
    REFERENCES `sigmaos_bd`.`tabla_prod` (`ident_prod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_defa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_defa` (
  `canti_defa` INT NULL,
  `monto_defa` FLOAT NULL,
  `tabla_fact_ident_fact` INT NOT NULL,
  INDEX `fk_tabla_defa_tabla_fact1_idx` (`tabla_fact_ident_fact` ASC),
  CONSTRAINT `fk_tabla_defa_tabla_fact1`
    FOREIGN KEY (`tabla_fact_ident_fact`)
    REFERENCES `sigmaos_bd`.`tabla_fact` (`ident_fact`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_banc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_banc` (
  `ident_banc` INT NOT NULL AUTO_INCREMENT,
  `nombr_banc` VARCHAR(20) NULL,
  PRIMARY KEY (`ident_banc`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_pago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_pago` (
  `ident_pago` INT NOT NULL AUTO_INCREMENT,
  `fecha_pago` DATE NULL,
  `monto_pago` FLOAT NULL,
  `tipos_pago` VARCHAR(20) NULL,
  `refer_pago` VARCHAR(20) NULL,
  `image_pago` VARCHAR(300) NULL,
  `tabla_fact_ident_fact` INT NOT NULL,
  `tabla_banc_ident_banc` INT NOT NULL,
  PRIMARY KEY (`ident_pago`),
  INDEX `fk_tabla_pago_tabla_fact1_idx` (`tabla_fact_ident_fact` ASC),
  INDEX `fk_tabla_pago_tabla_banc1_idx` (`tabla_banc_ident_banc` ASC),
  CONSTRAINT `fk_tabla_pago_tabla_fact1`
    FOREIGN KEY (`tabla_fact_ident_fact`)
    REFERENCES `sigmaos_bd`.`tabla_fact` (`ident_fact`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tabla_pago_tabla_banc1`
    FOREIGN KEY (`tabla_banc_ident_banc`)
    REFERENCES `sigmaos_bd`.`tabla_banc` (`ident_banc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_admi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_admi` (
  `ident_admi` INT NOT NULL AUTO_INCREMENT,
  `nomb1_admi` VARCHAR(20) NULL,
  `nomb2_admi` VARCHAR(20) NULL,
  `apel1_admi` VARCHAR(20) NULL,
  `apel2_admi` VARCHAR(20) NULL,
  `usuar_admi` VARCHAR(20) NULL,
  `contra_admi` VARCHAR(20) NULL,
  PRIMARY KEY (`ident_admi`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigmaos_bd`.`tabla_acci`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigmaos_bd`.`tabla_acci` (
  `ident_acci` INT NOT NULL AUTO_INCREMENT,
  `descr_acci` VARCHAR(100) NULL,
  `tabla_admi_ident_admi` INT NOT NULL,
  PRIMARY KEY (`ident_acci`),
  INDEX `fk_tabla_acci_tabla_admi1_idx` (`tabla_admi_ident_admi` ASC),
  CONSTRAINT `fk_tabla_acci_tabla_admi1`
    FOREIGN KEY (`tabla_admi_ident_admi`)
    REFERENCES `sigmaos_bd`.`tabla_admi` (`ident_admi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;