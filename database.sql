CREATE DATABASE eleganceetluxe;


CREATE TABLE cadastro_pessoas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    sexo ENUM('Masculino', 'Feminino') NOT NULL,
    data_nascimento DATE NOT NULL,
    ddd CHAR(2) NOT NULL,
    numero_celular CHAR(9) NOT NULL,
	email VARCHAR(255) UNIQUE NOT NULL, -- Email deve ser único
    senha VARCHAR(255) NOT NULL, -- Para armazenar o hash da senha
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

select * from cadastro_pessoas;

drop database eleganceetluxe;