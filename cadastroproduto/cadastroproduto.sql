CREATE DATABASE eleganceetluxe;
USE eleganceetluxe;


CREATE TABLE produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tipo_produto VARCHAR(100),          -- Tipo de produto (ex: vestido, decoração)
    codigo_produto VARCHAR(50) UNIQUE,  -- Código interno do produto
    unidade VARCHAR(10),                -- Unidade de medida (ex: UN)
    preco_custo DECIMAL(10, 2),         -- Preço de custo do produto
    lucro_percentual DECIMAL(5, 2),     -- Lucro percentual desejado
    valor_min DECIMAL(10, 2),           -- Valor mínimo de venda
    valor_max DECIMAL(10, 2),           -- Valor máximo de venda
    descricao TEXT                      -- Descrição detalhada do produto
);
