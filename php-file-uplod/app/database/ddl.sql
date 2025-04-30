CREATE DATABASE arquivosdb;
Use arquivosdb;

CREATE TABLE imagens(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    nome_original VARCHAR(255) NOT NULL,
    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP,
    caminho VARCHAR(255) NOT NULL
);

INSER INTO imagens (nome, nome_original, caminho)