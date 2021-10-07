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
?>
    <form action="<?php echo $action ?>" method="post">
        <?php if(isset($_GET['id'])) { ?>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <?php } ?>
        <input type="text" name='nome' placeholder='nome' value="<?php echo $contato['nome'] ?? '' ?>">
        <input type="email" name='email' placeholder='email' value="<?php echo $contato['email'] ?? '' ?>">
        <input type="tel" name='telefone' placeholder='telefone' value="<?php echo $contato['telefone'] ?? '' ?>">
        <input type="submit" value="<?php echo $submit ?>">
    </form>
</body>
</html>