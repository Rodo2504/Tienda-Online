<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Music Club</title>
    
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
                    <a class="nav-link" href="#preguntas">Preguntas Frecuentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModalCentered">Iniciar Sesion</a>
            </ul>   
       </div>
    </nav>
    
    <div class="jumbotron" style="background: url('img/portada.jpg') no-repeat center; height:250;">
        <div class="container">
            <h1 class="display-3">Music Club</h1>
            <p class="lead"><b><strong>Tienda Online de instrumentos musicales y equipo de audio</strong></b></p>
            <p>Las mejores marcas y a los mejores precios, disponibles desde la comodidad de tu hogar.</p>
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
            <img class="card-img-top" src="img/tienda.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Instalaciones</h5>
                <p class="card-text">Contamos con una gran variedad de instrumentos, de todas las marcas y tipos.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/equipo_sonido.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Equipo de sonido</h5>
                <p class="card-text">Contamos con el mejor equipo de sonido, disponible para venta y renta.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/sala_ensayo.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Salas de ensayo</h5>
                <p class="card-text">Dentro de las instalaciones contamos con salas de ensayo, lo mejor equipadas y adaptadas.</p>
            </div>
        </div>
        </div>        
    </div>    
    
    <h1 style="text-align:center; font-size: 42px; margin-top:35px"><a name=preguntas>Preguntas Frecuentes</a></h1>
    
    <div class="accordion m-5" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Cuál es el horario de atención?
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Lunes - Viernes  9:00  -  18:00 </p>
                    <p>Sabados          10:00 -  14:00</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Tienen garantía?
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                Todos los productos que encuentras en nuestro sitio tienen por lo menos 1 año de garantía directamente con el fabricante. Ésta entra en vigor a partir de la fecha de compra que aparece en el comprobante que recibe al momento de pagar su pedido.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Cuentan con envios Express?
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Todos nuestros envios tardan de dos a tres días habiles.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Tener una cuenta con nosotros
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    Debes estar registrado en nuestra pagina para poder utlizar los servicios tanto de ventas de instrumentos como la renta de salas de ensayo y equipo
                    de sonido. Para crear una cuenta solo presiona en "Iniciar Sesion" que se encuentra en la esquina superior derecha y selecciona en registrar.
                </div>
            </div>
        </div>
    </div>

    <h1 style="text-align:center; font-size: 42px; margin-top:35px;font-family:cursive;"><a name=contacto>Contacto</a></h1>
    

    <footer>


    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>