<?php 
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if ($nome == "erick" && $senha == "erick123"){
        header("Location: pages/erick.html");
    } elseif ($nome == "gabriel" && $senha == "gabriel123") {
        header("Location: pages/gabriel.html");
    } elseif ($nome == "pedro" && $senha == "pedro123") {
        header("Location: pages/pedro.html");
    } elseif ($nome == "gabi" && $senha == "gabi123") {
        header("Location: pages/gabriela.html");
    } elseif ($nome == "samuel" && $senha == "samuel123") {
        header("Location: pages/samuel.html");
    }
    else {
        header("Location: index.php?res=Senha ou úsuario incorretos");
    }