<?php 
    $title = 'Agenda - Cadastrar usuário';
    include_once "header.php";
?>
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