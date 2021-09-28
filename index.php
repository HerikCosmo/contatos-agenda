<?php require "valida_autorizacao.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <a href="sair.php">Sair</a>
    <h1>olá <?php echo $_SESSION['nome'] ?></h1>
    <a href="cadastro_contato.php">Cadastrar Contato</a>

    <?php require "lista_contatos.php" ?>
    <table border=1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
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
                    <th><a href="edicao_contato.php?id=<?php echo $contato['id']?>">Editar</a></th>
                    <th><a href="excluir_contato.php?id=<?php echo $contato['id']?>">Excluir</a></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>