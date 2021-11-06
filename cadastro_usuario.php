<?php 
    $title = 'Agenda - Cadastrar usuário';
    include_once "header.php";
?>

<div class="container d-flex justify-content-center align-items-center" style="height: 80%">
    <div class="card bg-light mt-5" style="min-width: 40vw">
        <div class="card-header"><h2>Cadastro</h2></div>
        <div class="card-body">
        <form action="cadastrar_usuario.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name='nome' placeholder="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" placeholder="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="login">Login: </label>
                <input type="text" name="login" placeholder="login" class="form-control">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name='senha' placeholder='senha' class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar" class="form-control btn btn-success">
            </div>
        </form>
        </div>
    
    </div>
</div>
<?php include_once "footer.php";