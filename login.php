<?php 
    $title = 'Agenda - Login';
    include_once "header.php";
?>

    <form action="login_autenticar.php" method="post">
        <input type="text" name='login'>
        <input type="password" name='senha'>
        <input type="submit" value="ENVIAR">
    </form>
    <a href="cadastro_usuario.php">Ainda não tem uma conta? cadastre-se</a>
</body>
</html>