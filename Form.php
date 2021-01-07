<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("location: login_form.php");
  }
  $nusuario = $_SESSION["usuario"];
  ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>Technology Blog!!</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Work+Sans:wght@500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a77956306b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

</head>

<body style="background-color: #e9ecef;">

  

  <header>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">

        <div class="navbar-brand">
          <span><i class="fas fa-cogs"></i> Blog-tech</span>
        </div>

        <a class="navbar-brand text-right" href="cerrarSesion.php">
          <span><i class="fas fa-sign-out-alt"></i> Cerrar sesion</span>
        </a>
      </div>
    </nav>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Formulario</li>
      </ol>
    </nav>
  </header>

  <div class="container my-5 p-5 ">
    <div class="py-5">
      <div class="row">
        <div class="col-md-12">
          <form action="guardar.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label for="titulo">Titulo</label>
              <input type="text" class="form-control" name="titulo" id="titulo">
            </div>
            <div class="form-group">
              
              <label>Contenido</label>
              <textarea class="form-control" name="contenido" rows="3" id="contenido"></textarea>
            </div>
            <div class="form-group">
              <label for="titulo">link</label>
              <input type="text" class="form-control" name="link">
            </div>
            <d<div class="form-group col-md-4">
              <label for="inputState">Etiqueta</label>
              <select name="etiqueta" class="form-control">
                <option selected>-- * --</option>
                <option>smartphones</option>
                <option>computadoras y laptops</option>
                <option>nuevas tecnologias</option>
              </select>
              <div class="input-group is-invalid">
                <div class="custom-file mt-4">
                  <input type="file" class="custom-file-input" name="imagen">
                  <label class="custom-file-label">Buscar imagen</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary mt-4">Publicar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="container-fluid py-5 bg-dark text-white">
    <!-- <div class="row">
          <div class="col-12 col-md">
            <div class="" style="font-family: 'Noto Sans', sans-serif;">
                <i class="fas fa-cogs"></i> Blog-tech
            </div>
            <small class="d-block mb-3 text-muted">&copy;2020</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Business</a></li>
              <li><a class="text-muted" href="#">Education</a></li>
              <li><a class="text-muted" href="#">Government</a></li>
              <li><a class="text-muted" href="#">Gaming</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div> -->
  </footer>


  <!-- Optional JavaScript
     jQuery first, then Popper.js, then Bootstrap JS  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <script src="js/app.js"></script>
</body>

</html>