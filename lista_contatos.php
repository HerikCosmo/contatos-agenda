<?php
require_once "valida_autorizacao.php";
require "banco.php";

$query = !isset($_GET['q']) ? 
            'SELECT id, nome, email, telefone from contatos where id_usuario = :id' :
            'SELECT id, nome, email, telefone from contatos where id_usuario = :id and
            (nome LIKE :q or email LIKE :q or telefone LIKE :q)';

try{
    $stmt = $banco->prepare($query);
    $stmt->bindValue(':id', $_SESSION['id']);
    if(isset($_GET['q'])) $stmt->bindValue(':q', '%' . $_GET['q'] . '%');
    $stmt->execute();

    $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    echo $e;
}