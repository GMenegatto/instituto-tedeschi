<?php
  //Variáveis
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $mensagem = $_POST['message'];
  $phone = $_POST['phone'];
  $data_envio = date('d/m/Y');

  date_default_timezone_set('America/Sao_Paulo');
    $hora_envio = date('H:i:s', time());

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>WhatsApp: </b>$phone</p>
      <p><b>Observações: </b>$mensagem</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "midia@institutotedeschi.com.br";
  $assunto = "Instituto Tedeschi - Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=index.html'>";
?>