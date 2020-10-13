<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    
    <!--Css -->
    <link rel="stylesheet" href="css/estilos.css">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca De</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModalCentered">Iniciar Sesion</a>
            </ul>   
       </div>
    </nav>
    
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Fluid jumbotron</h1>
            <p class="lead">Descripcion rapida de la pagina</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni provident, maxime vero eligendi sequi itaque ullam quaerat eos dolore ducimus odit laboriosam, deserunt unde voluptatem nam nisi exercitationem iusto modi.</p>
            <p class="lead">
            <a class="btn btn-primary btn-lg" href="#!" role="button">Accion</a></p>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModalCentered" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                   </button>
                </div>
                <div style="text-align: center;">
                    <img src="img/avatar.png"  width="25%" alt="">
                </div>
                <div class="contenedor">
                    <form action="index.php" method="post">
                        <label for="user">Usuario:</label>
                        <p>
                        <input class="user" type="text" required name="user" id="user">
                        </p>
                        <label for="pass">Contraseña:</label>
                        <p>
                        <input class="pass" type="password" required name="pass" id="pass">
                        </p>
                        <input class="btn1" name="btn1" type="submit" value="Ingresar">
                        <input class="btn1" name="btn2" type="submit" value="Registrar">             
                    </form>  
                </div>              
            </div>
        </div>
    </div>
         
<?php    
    include("login.php");
?>
         
         
          
    <div class="container">
        <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        </div>        
    </div>         
           
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>