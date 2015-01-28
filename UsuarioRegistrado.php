<!DOCTYPE html>
<html class="bg-black">
<head>
  <meta charset="UTF-8">
  <title>Usuario Registrado - HackLab Eventos</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css">
  <!-- tema del sitio -->
  <link rel="stylesheet" href="static/css/AdminLTE.css" type="text/css">
</head>
<body class="bg-black">
  <div class="form-box" id="login-box">
    <div class="header">Usuario Registrado</div>
    <div class="body bg-gray" align="center">
      <<h2>Felicitaciones te has registrado muy bien :D</h2>
    </div>
    <div class="footer">
        <a href="static/lib/tcpdf/Generador/FichaAcreditacion.php?email=<?php echo $_GET['email']."&nombre=". $_GET['nombre'];?>"><button class="btn btn-success btn-block">Descargar Ficha de Acreditación</button></a>
        <hr>
        <a href="index.php">Registrar otro usuario</a>
        <a href="ListaUsuarios.php">Ver Inscritos</a>
    </div>

  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
