<?php

include("../back/logado.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/home.css">
        <title>Document</title>
</head>
<body>
        

        <div class="container3">
        <?php require("cabecario.php"); ?>
                <div class="div">
                        <br><br><H2>Produtos</H2><hr>
                        <?php include("card.php")?>
                        
                </div>
                
      
        </div>
        
        <footer class="footer">
                <div  class="footer1">
                <div>
                        <img src="../css/icons/facebook.png" alt="">
                        <p>Facebbok</p>
                </div>
                <div>
                        <img src="../css/icons/instagram.png" alt="">
                        <p>Instagran</p>
                </div>
                <div>
                        <img src="../css/icons/whatsapp.png" alt="">        
                        <p>Whats</p>
                </div>
                <div>
                        <img src="../css/icons/twitter.png" alt="">
                        <p>Twitter</p>
                </div>
                </div>
                
        </footer>
</body>
</html>