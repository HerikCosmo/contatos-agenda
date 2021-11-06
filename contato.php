<?php 
    require "valida_autorizacao.php";
    $modo = isset($_GET['id']) ? 'Edição' : 'Cadastro';
    $title = 'Agenda - '. $modo .' de Contato';

    if(isset($_GET['id'])){
        require_once "buscar_contato.php";
        $action = 'editar_contato.php';
        $submit = "Editar Contato";
    }else{
        $action = 'cadastrar_contato.php';
        $submit = "Cadastrar Contato";
    }

    include_once "header.php"; 
    include_once "header_principal.php"; 
?>
<div class="container d-flex justify-content-center align-items-center" style="height: 80%">
    <div class="card bg-light" style="min-width: 40vw">
        <div class="card-header"><h2>Contato</h2></div>
        <div class="card-body">
            <form action="<?php echo $action ?>" method="post">
                <?php if(isset($_GET['id'])) { ?>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <?php } ?>
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" name='nome' class="form-control" placeholder='nome' value="<?php echo $contato['nome'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" name='email' class="form-control" placeholder='Email' value="<?php echo $contato['email'] ?? '' ?>">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" name='telefone' class="form-control" placeholder='Telefone' value="<?php echo $contato['telefone'] ?? '' ?>">
                </div> 
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="<?php echo $submit ?>">
                </div>
            </form>
        </div>
        
    </div>
</div>
    
</body>
</html>
<?php include_once "footer.php";