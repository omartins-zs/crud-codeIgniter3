
CREATE DATABASE produtos-hardware

CREATE TABLE `produtos-hardware`.`produtos` ( `id` INT NULL AUTO_INCREMENT , `nome`  VARCHAR(100) NOT NULL , `preco` INT NOT NULL , `ativo` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `produtos` (`id`, `nome`, `preco`, `ativo`) VALUES (NULL, 'Placa Mae Gigabyte', '750', '1'), (NULL, 'Placa de Video Asus', '3.500', '1')
