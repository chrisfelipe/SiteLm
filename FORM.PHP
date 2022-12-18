<?php
session_start();

?>

<?php
     require 'config.php';

     if(isset($_POST['nome'])&& isset($_POST['tel']) && isset($_POST['idade']) && isset($_POST['op'])){
        $nome = $_POST['nome'];
        $tel =$_POST['tel'];
        $idade = $_POST['idade'];
        $cargo = $_POST['op'];
        $sql = "insert into vagas set nome = '$nome', telefone= '$tel', idade = '$idade', area_interesse = '$cargo'";
        $pdo->query($sql);
       
     }
   if(isset($_POST['recebe'])){
    $arquivo = $_FILES['arquivo'];
    $arquivo1 = explode('.',$arquivo['name']);
    if($arquivo1[sizeof($arquivo1)-1]!='docx'){
        die('Você não pode subir esse tipo de arquivo');
}else{
    move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
}
   }
?>


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Trabalhe Conosco</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Trabalhe Conosco</h2>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="name">Nome:</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nome" placeholder="nome completo">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Whats App/Telefone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="tel" placeholder="(ddd) 9999-9999">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Idade</div>
                            <div class="value">
                                <input class="input--style-6" type="number" name="idade" placeholder="Insira sua idade">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Area de interesse</div>
                            <div class="value">
                                <div class="input-group">
                                    <select name="op" id="">
                                        <option value="aux_loja">Auxiliar de Loja</option>
                                        <option value="aux_caixa">Auxiliar de Caixa</option>
                                        <option value="caixa">Caixa</option>
                                        <option value="Vendedor">Vendedor</option>
                                        <option value="Limpeza">Limpeza</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="name">Envie seu curriculo</div>
                            <div class="value">
                                <input class="input--style-6" type="file" name="arquivo">
                            </div>
                        </div>

                        <div class="card-footer">
                            <input class="btn btn--radius-2 btn--blue-2" type="submit" name="recebe" value="Enviar">
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>




  

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<!-- end document-->