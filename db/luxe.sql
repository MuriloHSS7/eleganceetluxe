-- SQL para criar a tabela completa (se ainda não existir)
CREATE DATABASE eleganceetluxe;

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

-- Se a tabela já existe e você só precisa adicionar colunas:
-- ALTER TABLE cadastro_pessoas ADD COLUMN email VARCHAR(255) UNIQUE NOT NULL AFTER numero_celular;
-- ALTER TABLE cadastro_pessoas ADD COLUMN senha VARCHAR(255) NOT NULL AFTER email;
-- ALTER TABLE cadastro_pessoas ADD COLUMN cpf VARCHAR(14) UNIQUE AFTER senha;
-- ALTER TABLE cadastro_pessoas ADD COLUMN endereco VARCHAR(255) AFTER cpf;
-- ALTER TABLE cadastro_pessoas ADD COLUMN cep VARCHAR(10) AFTER endereco;
-- ALTER TABLE cadastro_pessoas ADD COLUMN complemento VARCHAR(255) AFTER cep;
-- ALTER TABLE cadastro_pessoas ADD COLUMN receber_whatsapp ENUM('sim', 'nao') DEFAULT 'nao' AFTER complemento;
-- ALTER TABLE cadastro_pessoas ADD COLUMN aceitar_termos ENUM('sim', 'nao') NOT NULL DEFAULT 'nao' AFTER receber_whatsapp;


 

-- tabela de produtos
CREATE TABLE cadastro_produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  tipo VARCHAR(20) NOT NULL,
  tamanho VARCHAR(20),
  cor VARCHAR(20),
  preco_aluguel DECIMAL(10,2) NOT NULL,
  descricao TEXT,
  disponivel BOOLEAN DEFAULT TRUE
);









