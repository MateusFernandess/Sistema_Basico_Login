<?php

// Criando uma sess�o 

session_start();

//Verificando se tem uma sess�o salva
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
    
    // Aqui vai ter o que a pessoa acessa apos ser feito o cadastro
    echo "<h1>Bem vindo a Area Restrita</h1>";
    
} else {
    header ("Location: login.php");
}