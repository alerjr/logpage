<?php
    if(isset($_POST['submit']))
    {
        // print_r($_POST['email']);
        // print_r('<br>');
        // print_r($_POST['usuario']);
        // print_r('<br>');
        // print_r($_POST['senha']);

        include_once('config.php');

        $email = ($_POST['email']);
        $usuario = ($_POST['usuario']);
        $senha = ($_POST['senha']);

        $result = mysqli_query($conexao, "INSERT INTO usuarios(email,usuario,senha) VALUES ('$email','$usuario','$senha')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>

<form action="createaccount.php" method="POST">

    <main class="createAccount">
    
        <div class="dados">
        
                <h1>Crie sua conta</h1>
                <div class="textfield">
                    <label for = "email">Email<br></label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email">
                </div>

                <div class="textfield">
                    <label for="user">Usuário<br></label>
                    <input type="text" name="usuario" id="usuario" placeholder="Digite um usuário">
                </div>

                <div class="textfield">
                    <label for="password">Senha<br></label>
                    <input type="password" name="senha" id="senha" placeholder="Digite uma senha">
                </div>
                
                <div class="botoes">
                    <button type="submit" name="submit" class="criarConta">Criar conta</button>
                    <button type="button" class="back" onclick="backbutton()">Voltar</button>
                </div>

        </div>

    </main>
    <script src="script.js"></script>
</body>
</html>