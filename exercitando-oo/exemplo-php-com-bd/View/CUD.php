<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Livro</title>
</head>
<body>
    <?php
         require_once "../Controller/LivroController.php";
    ?>
    <form action="../Controller/LivroController.php" method="POST">
        <button><a href="index.php">Voltar</a></button>
        <input type="text" placeholder="Nome do livro" name="nome" id="nome" required />
        <input type="number" placeholder="id (p/ o atualizar e deletar)" name="id" id="id" />
        <select name="tipo-requisicao" id="tipo-requisicao" required>
            <option value="create">Criar</option>
            <option value="update">Atualizar</option>
            <option value="delete">Deletar</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>