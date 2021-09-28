<?php require_once "valida_autorizacao.php" ;
require_once "buscar_contato.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Edição de Contato</title>
</head>
<body>
    <h2>Editar contato</h2>
    <form action="editar_contato.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <input type="text" name='nome' placeholder='nome' value="<?php echo $contato['nome'] ?>">
        <input type="email" name='email' placeholder='email' value="<?php echo $contato['email'] ?>">
        <input type="tel" name='telefone' placeholder='telefone' value="<?php echo $contato['telefone'] ?>">
        <input type="submit" value="Editar contato">
    </form>
</body>
</html>