<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="cadastrar_usuario.php" method="post">
        <input type="text" name='nome' placeholder="nome">
        <input type="email" name="email" placeholder="email">
        <input type="text" name="login" placeholder="login">
        <input type="password" name='senha' placeholder='senha'>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>