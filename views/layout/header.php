<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/258e19bef9.js" crossorigin="anonymous"></script>

    <title>Tienda Itech</title>

    <style>
        body {
            background-color: #f9f6f1;
        }
        
        .container {
            max-width: 80rem;
        }

        .cuerpo {
            min-height: 53rem;
        }
        
        .tabla {
            font-size: 14px;
        }
        
        @media(max-width: 560px) {
            .tabla {
                font-size: 11px;
            }
            .container {
                max-width: 90%;
                padding: 0;
            }
        }
    </style>
</head>

<body>
    <div class="bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <a class="navbar-brand ml-4" href="index.php">TIENDA ITECH</a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php"><i class="fas fa-home"> </i> Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="?controller=productos&action=index"><i class="fas fa-list"> </i> Productos</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white mr-4" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-edit"> </i>
                 Mi Perfil
              </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><i class="fas fa-key"></i> Modificar clave</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-address-card"></i> Mis datos</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Cerrar sesion</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>