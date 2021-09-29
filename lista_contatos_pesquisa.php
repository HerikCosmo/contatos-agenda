<?php

require_once "banco.php";

try{
    $stmt = $banco->prepare('SELECT id, nome, email, telefone from contatos where id_usuario = :id and
        nome LIKE :q');
    $stmt->bindValue(':id', $_SESSION['id']);
    $stmt->bindValue(":q", '%' . $_GET['q'] . '%');
    $stmt->execute();

    $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    echo $e;
}