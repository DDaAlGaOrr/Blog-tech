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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

</head>

<body style="background-color:#e9ecef">
    <header>
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <span><i class="fas fa-cogs"></i> Blog-tech</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="smartphones.php">
                                <span><i class="fas fa-mobile"></i> Smartphones</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="computadoras.php">
                                <span><i class="fas fa-desktop"></i> Computadoras y laptops</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tecnologias.php">
                                <span><i class="fas fa-globe"></i> Nuevas Tecnologias</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Form.php">
                                <span><i class="fas fa-user-cog"></i> Administrador</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <div class=" bg-image text-right text-center thumbnail img-fluid">
        <h1 class="caption text-light animate__bounceIn">Aqui encontraras noticias <br> relevantes sobre la tecnologia
            <br>
            entre otras cosas mas</h1>
    </div>

    <div class="container my-5  p-5 ">
        <div class="text-center">
            <h1>Noticias en general</h1>
            <hr>
        </div>
        <div class="py-5">
            <div class="row">
                <?php
                include("conexion.php");
                $cnx = DBCnx();
                $data = $cnx->query("SELECT`titulo`, `contenido`, `link`, `etiqueta`, `ruta` FROM `card`")->fetchAll();
                foreach ($data as $row) {
                ?>
                    <div class="col-md-12 col-sm-12">
                        <div class="container p-2">
                            <div class="card mb-3 cardd">
                                <div class="row no-gutters">
                                    <div class="col-md-4 imgc">
                                        <img src="<?php echo $row['ruta'] ?>" class="card-img img-fluid" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title" <?php echo $row['titulo'] ?></h5> <p class="card-text"><?php echo $row['contenido'] ?></p>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <footer class="container-fluid py-2 bg-dark text-white">
        <div class="row">
          <div class="col-12 col-md text-center">
            <div class="" style="font-family: 'Noto Sans', sans-serif;">
                <i class="fas fa-cogs"></i> Blog-tech
            </div>
           
            <small class="d-block mb-3 text-muted">&copy;2020</small>
           
          </div>
        </div>
    </footer>


    <!-- Optional JavaScript
     jQuery first, then Popper.js, then Bootstrap JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>