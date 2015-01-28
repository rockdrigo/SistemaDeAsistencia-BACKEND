<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Control de Asistencia - HackLab Eventos</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
  <!-- tema del sitio -->
  <link rel="stylesheet" href="static/css/AdminLTE.css" type="text/css">
</head>
<body class="bg-black">
  <div class="form-box" id="login-box">
    <div class="header">Registro de usuarios</div>
    <form action="RegistrarUsuarios.php" method="post">
      <div class="body bg-gray">
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Nombre Completo"/>
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email"/>
        </div>
      </div>
      <div class="footer">
        <button id="Btnregistrar" type="submit" class="btn bg-olive btn-block">Enviar</button>
      </div>
    </form>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
