CREATE DATABASE loja_jolyne;
USE loja_jolyne;

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    nome VARCHAR(255),
    descricao TEXT
);

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    id_categoria INT NOT NULL,
    preco FLOAT NOT NULL,
    imagem VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id)
);

CREATE TABLE usuarios (
    id INT(11) AUTO_INCREMENT PRIMARY KEY UNIQUE,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    telefone VARCHAR(30) NOT NULL,
    data_nascimento DATE NOT NULL,
    cpf VARCHAR(14) UNIQUE NOT NULL
);