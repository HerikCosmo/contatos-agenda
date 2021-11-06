<?php 
    $title = 'Agenda - Login';
    include_once "header.php";
?>  
<style></style>
    <main style="min-height: 100vh">
        <div class="container d-flex justify-content-center align-items-center"  style="min-height: 100vh">
            <div class="card bg-light">
                <div class="card-header"><h2>Agenda</h2></div>
                <div class="card-body">
                    <form action="login_autenticar.php" method="post" class="mb-3">
                        <div class="form-group">
                            <label for="login">Login: </label>
                            <input type="text" name='login' id="login" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha: </label>
                            <input type="password" name='senha' id="senha" class="form-control">
                        </div>
                            <input type="submit" value="Enviar" class="btn btn-dark">
                    </form>
                    <a class="card-link" href="cadastro_usuario.php">Ainda não tem uma conta? Cadastre-se</a>
                </div> 
            </div>        
        </div>
    </main>
    <?php include_once "footer.php";