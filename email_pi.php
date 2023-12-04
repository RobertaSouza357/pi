<?php


function email($nome, $email, $mensagem)
{
    // include "cons.php";
    $assunto = "Nossos serviços";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset-utf-8;';
    $headers .= "Return-Path: sem retorno \r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . " \r\n";

    
    if (mail($email, $assunto, $mensagem, $headers)) {
        echo "Email enviado";
    } else {
        echo "Não enviou!";
    }
}
extract($_POST);
if (isset($enviar)) {

    echo email($nome, $email, $mensagem);


}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="email_pi.php" method="POST">
        <h1>envio de email</h1>
        <label>Nome:<input type="text" name="nome"></label>
        <p></p>
        <label>Email:<input type="email" name="email"></label>
        <p></p>
        <label>Mensagem:<input type="text" name="mensagem"></label>
        <p></p>
        <button type="submit" name='enviar'>Enviar</button>
    </form>
</body>

</html>