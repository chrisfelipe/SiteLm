<?php
    try{
        $dsn=("mysql:dbname=lmstoresite;host=localhost");
        $dbuser = "root";
        $dbpass = "";
        $pdo = new PDO($dsn,$dbuser,$dbpass);
        
        
    }catch(PDOExcpetion $e){
        echo "erro:".$e->GetMessage();
        exit;
    }
?>