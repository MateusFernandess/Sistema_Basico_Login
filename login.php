<?php
    session_start();

    require 'config.php';

    //verificando se recebeu e caso sim pegando os dados
    if(isset($_POST['email']) && empty($_POST['email']) == false) {
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        $sql = $pdo->query("SELECT * FROM users WHERE email = '$email' AND senha = '$senha'");
        
        if($sql->rowCount() > 0) {

            //Pegando o dado do usuário
            $dado = $sql->fetch();

            //Salvando Id usuário
            $_SESSION['id'] = $dado['id'];

            header ("Location: index.php");

        }
    }
?>

<h1>Area de Login</h1>

<form method="POST">
    E-mail: <br>
    <input type="email" name="email">
    <br><br>
    Senha: <br>
    <input type="password" name="senha">
    <br><br>

    <input type="submit" value="Entrar">
</form>