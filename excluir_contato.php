<?php

require "banco.php";

$id = $_GET['id'];

$query = "DELETE FROM contatos WHERE id = :id";

try {
    $stmt = $banco->prepare($query);
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    header('Location: index.php');
} catch (PDOException $e) {
    echo $e;
}