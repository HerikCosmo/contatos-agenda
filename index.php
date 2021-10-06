<?php 
    require "valida_autorizacao.php"; 
    require "lista_contatos.php";
    $title = 'Agenda Contatos';
    include_once "header.php";

?>

    <a href="sair.php">Sair</a>
    <h1>olá <?php echo $_SESSION['nome'] ?></h1>
    <a href="contato.php">Cadastrar Contato</a><hr>
    
    <form action="index.php" method="get">
        <input type="text" name='q' placeholder="pesquisar por qualquer campo: " value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
        <input type="submit" value="Pesquisar">
    </form>
    <hr>
    <div class="container">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>ZAP</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contatos as $id => $contato) { ?>
                <tr>
                    <th><?php echo $id + 1 ?></th>
                    <th><?php echo $contato['nome'] ?></th>
                    <th><?php echo $contato['email'] ?></th>
                    <th><?php echo $contato['telefone'] ?></th>
                    <th><a href="https://api.whatsapp.com/send?phone=55<?php echo filter_var(str_replace('-', '', $contato['telefone']), FILTER_SANITIZE_NUMBER_INT) ?>" target='_blank'>Conversar</a></th>
                    <th><a href="contato.php?id=<?php echo $contato['id']?>">Editar</a></th>
                    <th><a href="excluir_contato.php?id=<?php echo $contato['id']?>">Excluir</a></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>

<?php include_once "footer.php";