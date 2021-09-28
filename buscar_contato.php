<?php
require_once "valida_autorizacao.php";

require "banco.php";

try{
    $stmt = $banco->prepare('SELECT id, nome, email, telefone from contatos where id = :id');
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();

    $contato = $stmt->fetch(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    echo $e;
}