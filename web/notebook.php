<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Monte seu Notebook</title>
</head>
<body>
<div class="main-login">
<div class = "card-login">
<form method="POST" action="resultnote.php">
    <h2>MONTE SEU NOTEBOOK</h2>
    <label for="nome">Digite o seu Nome:</label>
    <input type="nome" id ="nome" name="nome" placeholder="Digite o seu Nome:" required>
    <br><br>
    <label>CPU</label>
   
    <select name = "CPU">
    <option value="" select></option>
    <option value="Intel Core i3 -  R$800">Intel Core i3 -  R$800</option>
    <option value="Intel Core i5 - R$900" >Intel Core i5 - R$900</option>
    <option value="Intel Core i7 - R$780">Intel Core i7 - R$780</option>
    <option value="Intel Core i9 - R$1.000">Intel Core i9 - R$1.000</option>

</select>
<br><br>

    <label>Memória</label>
    <select name = "Memoria">
    <div class="styled-select">
    <option value="" select></option>
    <option value="4GB DDR4 - R$800">4GB DDR4 - R$800</option>
    <option value="DDR4 2666MHz - R$400" >DDR4 2666MHz - R$400</option>
    <option value="8GB Ddr3 - R$500">8GB Ddr3 - R$500 </option>
    <option value="4GB Ddr3 - R$400">4GB Ddr3 - R$400 </option>

</select>
<br><br>

    <label>HD/SSD</label>
    <select name = "HDSSD">
    <option value="" select></option>
    <option value="HD Kingston 480GB - R$500">HD Kingston 480GB - R$500</option>
    <option value="SSD Kingston 480GB - R$400" >SSD Kingston 480GB - R$400</option>
    <option value="Ssd 240Gb Kingston - R$600">Ssd 240Gb Kingston - R$600</option>
    <option value="Sandisk Plus 480 GB - R$700">Sandisk Plus 480 GB - R$700</option>

<br><br>
</select>
<br><br>
<label>Sistema Operacional</label>
    <select name = "SistemaOp">
    <option value="" select></option>
    <option value="WINDOWS 10">WINDOWS 10</option>
    <option value="WINDOWS 11" >WINDOWS 11</option>
    </select>
    <br><br>
    <button class="btn-login">Enviar</button> 
       </div>
    </div>
</div>
</form>
</body>
</html>

