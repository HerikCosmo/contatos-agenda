<?php

require "banco.php";
require_once "valida_autorizacao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$id = $_SESSION['id'];

$query = "INSERT INTO contatos(nome, email, telefone, id_usuario) VALUES(:nome, :email, :telefone, :id_usuario)";

try {
    $stmt = $banco->prepare($query);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->bindValue(":id_usuario", $id);
    $stmt->execute();

    header('Location: index.php');
} catch (PDOException $e) {
    echo $e;
}