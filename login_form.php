<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Technology Blog!!</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a77956306b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
</head>

<body class="bg-light">
    <header>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a style="text-decoration: none;" href="index.php">Volver al blog</a>
                </li>
            </ol>
        </nav>
    </header>

    <div class="container mx-auto " style="width: 400px;">
        <div class="text-center">
            <h1>Area solo para administradores</h1>
            <hr>
        </div>
        <form action="login.php" method="POST">
            <div class="row mt-5">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario:</label>
                        <input name="usuario" class="form-control" id="usuario" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña:</label>
                        <input type="password" name="contrasenia" class="form-control" id="contrasenia">
                    </div>
                    <div class="text-center">
                        <button type="submit" style="width: 270px;" class="btn btn-primary">Entrar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <br><br><br>

    <footer class="container-fluid mt-5 py-2 bg-dark text-white">
        <div class="row">
          <div class="col-12 col-md text-center">
            <div class="" style="font-family: 'Noto Sans', sans-serif;">
                <i class="fas fa-cogs"></i> Blog-tech
            </div>
           
            <small class="d-block mb-3 text-muted">&copy;2020</small>
            <div class="" style="font-family: 'Noto Sans', sans-serif;">
                 <p class="mt-3">Daniel Alejandro Gamez Orozco</p>
            </div>
          </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>
</body>

</html>