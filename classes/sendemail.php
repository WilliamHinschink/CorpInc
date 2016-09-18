<?php
$nome = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$sel = $_POST['selection'];
$msg = $_POST['message'];
$date_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$arquivo = "
    <style type='text/css'>
    body {
    margin:0px;
    font-family:Verdane;
    font-size:12px;
    color: #666666;
    }
    a{
    color: #666666;
    text-decoration: none;
    }
    a:hover {
    color: #FF0000;
    text-decoration: none;
    }
    </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
    <tr>
                 <td width='500'>Nome:$nome</td>
                </tr>
                <tr>
                  <td width='320'>E-mail:<b>$email</b></td>
       </tr>
        <tr>
                  <td width='320'>Telefone:<b>$tel</b></td>
                </tr>
       <tr>
                  <td width='320'>Opções:$sel</td>
                </tr>
                <tr>
                  <td width='320'>Mensagem:$msg</td>
                </tr>
            </td>
          </tr>  
          <tr>
            <td>Este e-mail foi enviado em <b>$date_envio</b> às <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
    ";

$email_enviar = "siebentek@gmail.com";
$destino = $email_enviar;
$assunto = "Contato pelo Site";

$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8"."\r\n";
$headers .= "From: $nome <$email>";
        
$enviar_email = mail($destino, $assunto, $arquivo,$headers);
