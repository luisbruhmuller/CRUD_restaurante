CREATE DATABASE crud_restaurante;
USE crud_restaurante;

CREATE TABLE pratos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    descricao VARCHAR(200)NOT NULL,
    preco DECIMAL NOT NULL,
    categoria VARCHAR(200) NOT NULL,
    id_usuario INT,
    FOREIGN KEY id_usuario REFERENCES usuarios(id)
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
);