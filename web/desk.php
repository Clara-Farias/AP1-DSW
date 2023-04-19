<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desk</title>
</head>
<body>
<form method="POST" action="resultdesk.php">
    <label for="nome">Digite o seu Nome:</label>
    <input type="nome" id ="nome" name="nome" placeholder="Digite o seu Nome:" required>
    <br><br>
    <label>CPU</label>
    <select name = "CPU">
    <option value="" select></option>
    <option value="Intel Core i3 - R$800">Intel Core i3 - R$800 </option>
    <option value="Intel Core i5 - R$900" >Intel Core i5 - R$900</option>
    <option value="Intel Core i7 - R$1.000">Intel Core i7 - R$1.000</option>
    <option value="Intel Core i9 - R$2.000">Intel Core i9 - R$2.000</option>

</select>
<br>
    <label>Memória</label>
    <select name = "Memoria">
    <option value="" select></option>
    <option value="4GB DDR4 - R$200">4GB DDR4 - R$200</option>
    <option value="DDR4 2666MHz - R$400" >DDR4 2666MHz - R$400</option>
    <option value="8GB Ddr3 - R$800">8GB Ddr3 - R$800</option>
    <option value="4GB Ddr3 - R$900">4GB Ddr3 - R$900</option>

</select>
<br>

    <label>HD/SSD</label>
    <select name = "HDSSD">
    <option value="" select></option>
    <option value="HD Kingston 480GB - R$800">HD Kingston 480GB - R$800</option>
    <option value="SSD Kingston 480GB - R$900" >SSD Kingston 480GB - R$900</option>
    <option value="Ssd 240Gb Kingston - R$400">Ssd 240Gb Kingston - R$400</option>
    <option value="Sandisk Plus 480 GB - R$800">Sandisk Plus 480 GB - R$800</option>

<br>
</select>
<br>
<label>Sistema Operacional</label>
    <select name = "SistemaOp">
    <option value="" select></option>
    <option value="WINDOWS 10">WINDOWS 10</option>
    <option value="WINDOWS 11" >WINDOWS 11</option>
    </select>
<br>
<label>Monitor</label>
    <select name = "Monitor">
    <option value="" select></option>
    <option value="Monitor Gamer Samsung - R$800">Monitor Gamer Samsung - R$800</option>
    <option value="Gamer Mancer Valak - R$700" >Gamer Mancer Valak - R$700 </option>
    <option value="Gamer LED 19.5 - R$500" >Gamer LED 19.5 - R$500</option>
    <option value="Monitor Asus - R$600" >Monitor Asus - R$600</option>
    </select>
    <br><br>
    <input type="submit" value="ENVIAR">

</form>
</body>
</html>

