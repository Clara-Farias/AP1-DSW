
<?php
$email=$_POST["email"];
$senha=$_POST["senha"];

 $validar=validaLogin($email,$senha);
function validaLogin($email,$senha){
   $emailBD="clara@gmail.com";
   $senhaBD="1234";
       
      if ($email==$emailBD && $senha==$senhaBD  ){
           ?>
         <link rel="stylesheet" type="text/css" href="style.css">
         <div class="main-login">
         <div class = "card-login">
         <p>Conectado</p>
         <p> MONTE UM NOTEBOOK OU DESKTOP </p>
         <h2>Notebook</h2>
         <a href="notebook.php"><img src="notebook.png" height=100px width=100px></a>
         <br>
         <h2>Desktop</h2>
         <a href="desk.php"><img src="desk.png" height=100px width=100px></a>
         </div>
      </div>
           <?php
        }else{
           echo "Você Não Possui Permissão";
         }
      }
 ?>