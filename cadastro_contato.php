<?php require "valida_autorizacao.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Cadastro de Contato</title>
</head>
<body>
    <form action="cadastrar_contato.php" method="post">
        <input type="text" name='nome' placeholder='nome'>
        <input type="email" name='email' placeholder='email'>
        <input type="tel" name='telefone' placeholder='telefone'>
        <input type="submit" value="Cadastrar contato">
    </form>
</body>
</html>