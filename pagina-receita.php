<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <title>GuiReceitas</title>
</head>
<body style="text-align: center;">
    <?php require_once 'includes/sistema.php' ?>
    <?php 
    $id = $_GET['i'] ?? 1;
    $busca = $sistem->query("select * from receitas where id = '$id'");
    if (!$busca){
        echo 'error';
    } else {
        if ($busca->num_rows == 0){
            echo 'error';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<img src='$reg->imagem' width='400'> <h1>$reg->nome</h1> <hr> $reg->descrição <br>";
            }
        }
    }
    ?>
    <button><a href="index.php" style="text-decoration: none;">Voltar</a></button>
    <?php $sistem->close() ?>
</body>
</html>