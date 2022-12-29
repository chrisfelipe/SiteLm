<?php
require 'config.php';
    if(isset($_POST['email']) && empty($_POST['senha'])==false && empty($_POST['nome'])==false && empty($_POST['numero'])==false){
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $nome = $_POST['nome'];
        $numero = $_POST['numero'];
        $sql = "insert into login set email = '$email', senha = '$senha', nome = '$nome', telefone = '$numero', nivel = '1'";
        $pdo->query($sql);
        echo "cadastro efetuado";

    }
    else{
        echo "erro de cadastro";
    }

?>