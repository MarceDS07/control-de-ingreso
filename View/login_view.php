<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="View/styles.css" />
</head>

<body>
  <nav style="background: #620023;" class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a style="color: aliceblue;" class="navbar-brand" href="#">Control de Acceso</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      </div>
    </div>
  </nav>

  <div class="div-centrado">
    <div class="caja-login" style="color: aliceblue;">
      <div class="login">
        <form action="" method="POST">
          <input type="password" name="cedula" id='input' placeholder="Cedula"><br>
          <input type="submit" value="Login" class="boton" name='botonLogin'>
        </form>
      </div>
    </div>
  </div>
</body>

</html>