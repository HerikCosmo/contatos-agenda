<?php 
    require "valida_autorizacao.php"; 
    require "lista_contatos.php";
    $title = 'Agenda Contatos';
    include_once "header.php";
    include_once "header_principal.php";
?>

<main>
    <div class="container py-4">
        <div class="row my-2">
            <div class="col-md-10 px-0">
            <form action="index.php" method="get" class="form-inline">
                <div class="input-group">
                <input type="text" class="form-control" name='q' placeholder="Nome / Email / Telefone " value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
                <input type="submit" value="Pesquisar" class="btn btn-dark ml-1">
                </div>
                
            </form>
            </div>
            <a href="contato.php" class="btn btn-dark col-md-2">Adicionar Contato <i class="fa fa-plus-square" aria-hidden="true"></i></a>
        </div>
        <div class="row">
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
                            <th><a href="https://api.whatsapp.com/send?phone=55<?php echo filter_var(str_replace('-', '', $contato['telefone']), FILTER_SANITIZE_NUMBER_INT) ?>" target='_blank'><i class="fa fa-whatsapp btn btn-lg btn-success" aria-hidden="true"></i></a></th>
                            <th><a href="contato.php?id=<?php echo $contato['id']?>"><i class="fa fa-pencil-square-o btn btn-lg btn-dark" aria-hidden="true"></i></a></th>
                            <th><a href="excluir_contato.php?id=<?php echo $contato['id']?>"><i class="fa fa-trash btn btn-lg btn-danger" aria-hidden="true"></i></a></th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include_once "footer.php";