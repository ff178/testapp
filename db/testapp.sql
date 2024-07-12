SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `testapp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `testapp` ;

-- -----------------------------------------------------
-- Table `testapp`.`Users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `testapp`.`Users` (
  `idUsers` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(50) NOT NULL ,
  `pass` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idUsers`) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `testapp`.`Tests`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `testapp`.`Tests` (
  `idTests` INT NOT NULL AUTO_INCREMENT ,
  `idUsers` INT NOT NULL ,
  `name` VARCHAR(150) NOT NULL ,
  `desccrip` VARCHAR(400) NOT NULL ,
  PRIMARY KEY (`idTests`, `idUsers`) ,
  UNIQUE INDEX `name_UNIQUE` (`name` ASC) ,
  INDEX `fk_Tests_Users_idx` (`idUsers` ASC) ,
  CONSTRAINT `fk_Tests_Users`
    FOREIGN KEY (`idUsers` )
    REFERENCES `testapp`.`Users` (`idUsers` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `testapp`.`Questions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `testapp`.`Questions` (
  `idQuestions` INT NOT NULL ,
  `idTests` INT NOT NULL ,
  `descrip` VARCHAR(450) NOT NULL ,
  PRIMARY KEY (`idQuestions`, `idTests`) ,
  INDEX `fk_Questions_Tests1_idx` (`idTests` ASC) ,
  CONSTRAINT `fk_Questions_Tests1`
    FOREIGN KEY (`idTests` )
    REFERENCES `testapp`.`Tests` (`idTests` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `testapp` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
