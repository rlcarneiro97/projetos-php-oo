<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuários</title>
</head>
<body>
    <?php
        require_once "../sistema/conexao.php";
        $connDatabase = Conexao::getInstance();

        $sql = "SELECT * FROM cadastro";
        $tabela = $connDatabase->query($sql);

        if($tabela){
            echo "
            <table border='1'>
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>TELEFONE</td>
                    <td>EMAIL</td>
                </tr>
            ";

            foreach($tabela as $linha){
                $id = $linha['id'];
                echo "
                <tr>
                    <td>" . $linha['id'] . "</td>
                    <td>" . $linha['nome'] . "</td>
                    <td>" . $linha['telefone'] . "</td>
                    <td>" . $linha['email'] . "</td>
                    <!-- <td><a href='exemploDelete.php?id=$id'>Alterar</a></td> -->
                    <!-- <td><a href='exemploDelete.php?id=$id'>Excluir</a></td> -->
                </tr>";
            }

            echo "</table>";
        }

        $connDatabase = null;
    ?>
        <p>
            <button><a href="index.html">Cadastrar Usuário</a></button>
        </p> 
</body>
</html>