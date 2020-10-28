<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuários</title>
</head>
<body>
    <?php
        require_once "../sistema/classes/Conexao.php";
        require_once "../sistema/classes/Cadastro.php";

        $cadastro = Cadastro::getInstance();
        $cadastro->exibir();
    ?>
        <p>
            <button><a href="index.html">Cadastrar Usuário</a></button>
        </p> 
</body>
</html>