
CREATE DATABASE eleganceetluxe2;

CREATE TABLE cadastro_pessoas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    sexo VARCHAR(10),
    data_nascimento DATE,
    ddd VARCHAR(3),
    numero_celular VARCHAR(15), -- Ajuste o tamanho se precisar
    email VARCHAR(255) UNIQUE NOT NULL, -- Email deve ser único
    senha VARCHAR(255) NOT NULL, -- Para armazenar o hash da senha
    cpf VARCHAR(14) UNIQUE, -- CPF também pode ser UNIQUE
    endereco VARCHAR(255),
    cep VARCHAR(10),
    complemento VARCHAR(255),
    receber_whatsapp ENUM('sim', 'nao') DEFAULT 'nao',
    aceitar_termos ENUM('sim', 'nao') NOT NULL DEFAULT 'nao',
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

select * from cadastro_pessoas;