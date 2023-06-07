    <?php

    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="boxicons/css/boxicons.css">
        <title>Login</title>
    </head>
    <body>
        <div class="box">
            <div class="container">
                <div class="top-header">
                    <span>Já tem uma conta?</span>
                    <header>Login</header>
                </div>

            <div class="input-field">
                <input type="text" name="bt_nome" class="input" placeholder="Nome de Usuário" required>
            </div>
            <div class="input-field">
            <input type="password" name="bt_senha" class="input" placeholder="Senha" required>
            </div>
            <div class="input-field">
            <input type="submit" class="submit" value="Login">
            </div>
            <div class="bottom">
                <div class="left">
                    <input type="checkbox" name="" id="check">
                    <label for="check">Remember me</label>
                </div>
            </div>
            <div class="right">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
    </body>
    </html>