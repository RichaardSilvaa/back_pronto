<?php
    try {
        // Conexão com o banco de dados usando PDO
        $dbh = new PDO('mysql:host=localhost;dbname=meu_banco_de_dados', 'root', '123456');
        
        // Defina o modo de erro do PDO para exceções
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Processar os dados do formulário
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["name"];
            $email = $_POST["email"];
            $senha = $_POST["password"];
            
            // Preparar a consulta SQL
            $stmt = $dbh->prepare("INSERT INTO dados_do_formulario (nome, email, senha) VALUES (:nome, :email, :senha)");
            
            // Bind dos parâmetros
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            
            // Executar a consulta
            $stmt->execute();
            
            echo "Dados inseridos com sucesso!";

            header('location: login.html');
        }
    } catch (PDOException $e) {
        echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    }
