<?php

require "banco.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$query = 'SELECT id, nome, login from usuarios where login = :login and senha = :senha';

try{
    $stmt = $banco->prepare($query);
    $stmt->bindValue(':login', $login);
    $stmt->bindValue(':senha', $senha);
    $stmt->execute();
    if($stmt->rowCount() == 1){
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        session_start();
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['login'] = $usuario['login'];

        header("Location: index.php");
        exit;
    }else{
        header("Location: login.php");
        exit;
    }

}catch(PDOException $e){
    echo $e;
}
