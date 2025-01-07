<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <title>GuiReceitas</title>
</head>
<body>
    <button><a href="form-receita.php" style="text-decoration: none;">adcionar receita</a></button>
    <?php require_once 'includes/sistema.php' ?>
    <h1 style="color: brown;">GuiReceitas</h1>
    <hr>
    <table>
        <?php 
        $busca = $sistem->query('select * from receitas');
        if (!$busca){
            echo 'error';
        } else {
            if ($busca->num_rows == 0){
                echo 'error';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><a href='pagina-receita.php?i=$reg->id'><img src='$reg->imagem' width='200'></a></td><td>$reg->nome</td></tr>";
                }
            }
        }
        ?>
    </table>
    <?php $sistem->close() ?>
</body>
</html>