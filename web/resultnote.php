<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Notebook</title>
</head>
<body>
<div class="main-login">
<div class = "card-login">
<h2>Seu Novo Notebook</h2>

<?php
$vnome = $_POST['nome'];
$vcpu = $_POST['CPU'];
$vmemoria = $_POST['Memoria'];
$vhdssd = $_POST['HDSSD'];
$vSistemaOp = $_POST['SistemaOp'];

echo $vnome. "<br>";
echo $vcpu. "<br>";
echo $vmemoria. "<br>";
echo $vhdssd. "<br>";
echo $vSistemaOp. "<br>";
?>
</div>
</div>
</body>
</html>