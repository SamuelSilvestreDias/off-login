<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar para paginas</title>
    <link rel="stylesheet" href="css/stlye-Login.css">
    <?php
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            $url = "https://"; 

        else  
            $url = "http://";
 
        $url.= $_SERVER['REQUEST_URI'];
    ?>
</head>

<body>
    <form action="conexao.php" method="post">
        <p>Nome:</p>
        <input type="text" name="nome">
        <p>Senha</p>
        <input type="password" name="senha">
        <br>
        <br>
        <input type="submit" value="Enviar">
        <p>
            <?php
                if ($url == "http:///Login/index.php?res=Senha%20ou%20%C3%BAsuario%20incorretos"){
                    $erro = $_GET['res'];
                    echo $erro;
                }
            ?>
        </p>
    </form>
</body>

</html>