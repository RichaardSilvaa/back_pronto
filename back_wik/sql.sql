-- Conecte-se ao seu servidor MySQL
create database wik;
-- Crie um banco de dados (se ainda não tiver um)
CREATE DATABASE meu_banco_de_dados;

-- Use o banco de dados recém-criado
USE meu_banco_de_dados;

-- Crie uma tabela para armazenar os dados do formulário
CREATE TABLE dados_do_formulario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255)
);

select * from dados_do_formulario;