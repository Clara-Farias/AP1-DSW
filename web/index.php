<DOCTYPE html>
    <html>
    <head>
        <title>FORMULÁRIO</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    
    <form name="login" action="validaLogin.php" method="POST">
    <h1>Login de Usuário</h1>
    <p>
        <label for="Email">Email:</label>
        <input type="email" id ="email" name="email" placeholder="teste@gmail.com" required>
    </p>
    <p>
        <label for="Senha">Senha:</label>
        <input type="password" id ="login" name="senha" placeholder="3724" required>
    </p>
    <p>
    <input type="submit" value="Logar">
    </p>
    </form>
    </body>
    </html>

