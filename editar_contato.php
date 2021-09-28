<?php

require "banco.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$id = $_POST['id'];

$query = "UPDATE contatos SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id";

try {
    $stmt = $banco->prepare($query);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    header('Location: index.php');
} catch (PDOException $e) {
    echo $e;
}