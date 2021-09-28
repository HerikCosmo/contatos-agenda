<?php
require_once "valida_autorizacao.php";

require "banco.php";

try{
    $stmt = $banco->prepare('SELECT id, nome, email, telefone from contatos where id_usuario = :id');
    $stmt->bindValue(':id', $_SESSION['id']);
    $stmt->execute();

    $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    echo $e;
}