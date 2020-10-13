<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <!-- Css -->
    <link rel="stylesheet" href="../css/estilos_productos_admin.css">
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
   
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index_admin.php">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="administradores.php">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">Productos</a>
                </li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <a class="nav-link" href="#">Cerrar Sesion</a>
            </ul>   
       </div>
    </nav>
    
    <div class="main">
        
        <div class="cont1 container">
            <form action="">
                <label for="nom">Nombre Producto</label>
                <p>
                <input type="text" name="nom" id="nom" class="nom">
                </p>
                <label for="precio">Precio</label>
                <p>
                <input type="text" name="precio" id="precio" class="precio">
                </p>
                <label for="desc">Descripcion</label>
                <p>
                <textarea name="desc" id="desc" cols="50" rows="10"></textarea>
                </p>
                <label for="img"></label>
                <p>
                    <input type="file" alt="">
                </p>
                <p>
                <input type="submit" class="btn1" name="btn1" value="Baja">
                <input type="submit" class="btn2" name="btn2" value="Alta">
                <input type="submit" class="btn3" name="btn3" value="Editar">
                </p> 
            </form>
            
        </div>
        
        <div class="cont2 container">
            
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th style="text-align:center;">Nombre</th>
                        <th style="text-align:center;">Precio</th>
                        <th style="text-align:center;">Descripcion</th>
                        <th style="text-align:center;">Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>$5000</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus cum fuga repellendus laborum quia minima provident asperiores earum vero, aperiam eaque voluptatibus magnam, dolor dolorum eum, a. Accusamus, veritatis, voluptatum.</td>
                        <td>imagen Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius maiores itaque ab, nostrum numquam labore tempora impedit maxime tempore quibusdam. Excepturi vitae sunt quibusdam, tempore quas laudantium eligendi, repellat tenetur!</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>$2500</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat harum dignissimos, recusandae mollitia sunt, adipisci iste libero, alias nobis ea doloremque, deleniti odit ipsum velit provident quo non quasi repellendus?</td>
                        <td>imagen Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni est, natus necessitatibus quas illo totam quis, architecto exercitationem asperiores quibusdam, dolore sequi laudantium cum. Praesentium dignissimos placeat ea, dolor architecto.</td>
                    </tr>
                </tbody>
            </table> 
            
        </div>
        
    </div>
    
       
          
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       
</body>
</html>