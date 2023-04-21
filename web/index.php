<DOCTYPE html>
    <html>
    <head>
        <title>FORMULÁRIO</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="main-login">
    <div class = "card-login">
    <h1>LOGIN</h1>
    <form name="login" action="validaLogin.php" method="POST">

        <div class="textfield">
        <label for="Email">Email:</label>
        <input type="email" id ="email" name="email" placeholder="teste@gmail.com" required>
   </div>
        <div class="textfield">
        <label for="Senha">Senha:</label>
        <input type="password" id ="login" name="senha" placeholder="3724" required>
    </div>
    <button class="btn-login">Login</button>    
        </div>
    </div>
    </form>
    </body>
    </html>

