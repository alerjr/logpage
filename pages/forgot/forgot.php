<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu sua senha?</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>

    <main class="createAccount">
        <div class="ladoEsquerdo">
            <div class="dados">
                <h1>Redefina sua senha</h1>

                <div class="textfield">
                    <label for = "email">Email ou usuário<br></label>
                    <input type="email" name="email" placeholder="Digite seu email ou usuário">
                </div>
            
                <div class="botoes">
                    <button type="submit" class="criarConta">Redefinir</button>
                    <button type="button" class="back" onclick="backbutton()">Voltar</button>
                </div>
            </div>
        </div>

        <div class="ladoDireito">
            <div class="img1"></div>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>