-- Garantir que estamos no banco correto
USE codeigniter_db;

-- Criar a tabela 'produtos' com a estrutura correta
CREATE TABLE IF NOT EXISTS `produtos` ( 
    `id` INT AUTO_INCREMENT, 
    `nome` VARCHAR(100) NOT NULL, 
    `preco` INT NOT NULL, 
    `ativo` VARCHAR(20) NOT NULL, 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- Inserir os produtos no banco
INSERT INTO `produtos` (`nome`, `preco`, `ativo`) VALUES 
('Placa Mae Gigabyte', 750, '1'), 
('Placa de Video Asus', 3500, '1'),
('Teclado Mecânico', 250, '1'),
('Mouse Gamer', 120, '1');