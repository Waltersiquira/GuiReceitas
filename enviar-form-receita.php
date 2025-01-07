<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <title>GuiReceitas</title>
</head>
<body>
    <?php 
    require_once 'includes/sistema.php';
    $nome = $_GET['nome'] ?? '';
    $descricao = $_GET['descricao'] ?? '';
    $imagem = $_GET['imagem'] ?? '';
    if (!empty($nome) and !empty($descricao) and !empty($imagem)){
        if ($sistem->query("INSERT INTO `receitas` (`id`, `nome`, `descrição`, `imagem`) VALUES (DEFAULT, '$nome', '$descricao', '$imagem')") == true){
            echo "Receita adcionada com sucesso <br>";
        } else {
            echo 'erro ao inserir dados <br>';
        }
    } else {
        echo "erro não pode ter nome, descricao, imagem vazia <br>";
    }
    ?>
    <button><a href="index.php" style="text-decoration: none;">Voltar</a></button>
    <?php $sistem->close() ?>
</body>
</html>