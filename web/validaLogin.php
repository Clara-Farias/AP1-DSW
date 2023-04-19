<?php
$email=$_POST["email"];
$senha=$_POST["senha"];

 $validar=validaLogin($email,$senha);
function validaLogin($email,$senha){
   $emailBD="clara@gmail.com";
   $senhaBD="1234";
       
      if ($email==$emailBD && $senha==$senhaBD ){
           ?>
         <p>Conectado</p>
         <p> VOCÊ DESEJA OBTER INFORMAÇÕES SOBRE NOTEBOOK OU DESKTOP? CLIQUE NA
            FIGURA </p>
         <h2>Notebook</h2>
         <a href="notebook.php"><img src="notebook.png"></a>
         <br>
         <h2>Desktop</h2>
         <a href="desk.php"><img src="desk.png"></a>
           <?php
        }else{
           echo "Você Não Possui Permissão";
         }
      }
 ?>