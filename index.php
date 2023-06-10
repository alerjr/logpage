<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Área de login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="telaLogin">
        <div class="loginEsquerdo">
            <div class="imgLogo"></div>
        </div>

        <div class="loginDireito">
            <div class="cardLogin">
                <h1>Faça seu login</h1>
                
                <div class="textfield">
                    <label for="user">Usuário:<br></label>
                    <input type="text" name="usuario" placeholder="Digite seu usuário">
                </div>
                
                <div class="textfield">
                    <label for="senha">Senha:<br></label>
                    <input type="password" name="senha" placeholder="Digite sua senha">
                </div>
                
                <div class="botoes">
                    <button class="btn-login" onclick="login()">Login</button>
                    <button class="btn-account" onclick="createAccountPage()">Criar conta</button>
                </div>

                <div class="warningPassword">
                    <p>Esqueceu sua senha? Clique <a href="pages/forgot/forgot.php">aqui</a> para redefinir.</p>
                </div>
            </div>

        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>