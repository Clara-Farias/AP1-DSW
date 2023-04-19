<?php
$email=$_POST["email"];
$senha=$_POST["senha"];

 $validar=validaLogin($email,$senha);
function validaLogin($email,$senha){
   $emailBD="clara@gmail.com";
   $senhaBD="1234";
       
      if ($email==$emailBD && $senha==$senhaBD ){
           ?>
           <p> VOCÊ DESEJA OBTER INFORMAÇÕES SOBRE NOTEBOOK ou DESKTOP? CLIQUE NA
            FIGURA <p>
           <a href="notebook.php"><img src="notebook.png"></a>
           <br>
            <a href="desk.php"><img src="desk.png"></a>

           <?php
        }else{
           echo "Você não possui permissão";
        }
       
        }
 ?>