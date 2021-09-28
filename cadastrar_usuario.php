<?php

require_once 'banco.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$query = 'INSERT INTO usuarios(nome, email, login, senha) VALUES(:nome, :email, :login, :senha)';

try{
    $stmt = $banco->prepare($query);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':login', $login);
    $stmt->bindValue(':senha', $senha);
    $stmt->execute();

    header('Location: login.php');
}catch(PDOException $e){
    echo $e;
}

