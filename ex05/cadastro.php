<?php
    require '../db.php';

    $name = $_GET['name'];
    $idade = $_GET['year'];
    $email = $_GET['email'];
    $senha = $_GET['pass'];

    $sql = "INSERT INTO users (nome, idade, senha, email) VALUES (:name, :idade, :senha, :email)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':idade', $idade);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    if ($stmt->execute()){
        echo "Usuário cadastrado com sucesso!";
        echo "<a href='index.html'>Voltar</a>";
        echo "<a href='fetch.php'>Ver Usuários</a>";
    } else {
        echo "Falha ao cadastrar usuário!";
    };

?>