<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style2.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="assets/js/script.js"></script>
</head>
<body>
<?php

require 'config.php';
require 'FORM.PHP';
?>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Sistema de Patrimonios</h3>
            </div>

            <ul class="list-unstyled components">
                <p style="text-align: center;">Menu </p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu" style="color:white;">
                        <li>
                            <a href="patrimonios.php" style="color:black;text-decoration:none;"></a>
                        </li>
                        <li>
                            <a href="reparos.php" style="color:black;text-decoration:none;"></a>
                        </li>
                        <li>
                            <a href="lm.html" style="color:black;text-decoration:none;"></a>
                        </li>
                    </ul>
                </li>
                
                
                    </ul>
                </li>
               
            </ul>

           
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Esconder Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       
                    </div>
                </div>
            </nav>
            
            <div class="container-fluid">
                <table class="table table-dark table-striped" width="100%">
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Idade</th>
                        <th>Area de interesse</th>
                       
                     
                      
                    </tr>
                    <?php
                    require 'config.php';


    $sql = "SELECT * FROM vagas ";
    $sql =$pdo->query($sql);
   
    if($sql->rowCount() > 0){

        foreach($sql->fetchAll() as $maquina){
            
            echo '<tr>';
            echo '<td>'.$maquina['nome'].'</td>';
            echo '<td>'.$maquina['telefone'].'</td>';
            echo '<td>'.$maquina['idade'].'</td>';
            echo '<td>'.$maquina['area_interesse'].'</td>';
            
          
           
        }
    };

?>
                </table>
            </div>
            
        </div>
    </div>
</body>
</html>