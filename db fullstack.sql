-- MySQL Script generated by MySQL Workbench
-- Fri Jul  2 18:19:36 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema fullstackproject
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema fullstackproject
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `fullstackproject` DEFAULT CHARACTER SET latin1 ;
USE `fullstackproject` ;

-- -----------------------------------------------------
-- Table `fullstackproject`.`articles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fullstackproject`.`articles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(100) NULL DEFAULT NULL,
  `serie` VARCHAR(100) NULL DEFAULT NULL,
  `tekstvak` VARCHAR(1000) NULL DEFAULT NULL,
  `datum` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `fullstackproject`.`films`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fullstackproject`.`films` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `filmname` VARCHAR(100) NULL DEFAULT NULL,
  `datumschema` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `fullstackproject`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fullstackproject`.`users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(75) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email` (`email` ASC) VISIBLE)
ENGINE = MyISAM
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
