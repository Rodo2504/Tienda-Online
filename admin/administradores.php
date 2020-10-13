<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    
    <!--Css -->
    <link rel="stylesheet" href="../css/estilos_administradores.css">
    
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
                <a class="nav-link" href="">Cerrar Sesion</a>
            </ul>   
       </div>
    </nav>
    
    <div class="main">
    <div class="container cont1">
        
        <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Usuarios</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            
            include("../conexion.php");
            
            $resultados=mysqli_query($conexion,"SELECT * FROM $tabla1 WHERE tipo=1");
            while($consulta=mysqli_fetch_array($resultados)){
                echo "<tr><td>".$consulta['usuario']."</td>";
                echo "<td>".$consulta['tipo']."</td>";
                echo "</tr>";
                
            }
            
            $resultados=mysqli_query($conexion,"SELECT * FROM $tabla1 WHERE tipo=3");
            while($consulta=mysqli_fetch_array($resultados)){
                echo "<tr><td>".$consulta['usuario']."</td>";
                echo "<td>".$consulta['tipo']."</td>";
                echo "</tr>";
                
            }
        ?>    
        </tbody>
        </table>      
    </div>
    <div class="container cont2">
        <form action="administradores.php" method="post">
            <label for="user">Usuario</label>
            <p>
            <input type="text" required name="user" id="user" class="user">
            </p>
            <label for="pass">Contraseña</label>
            <p>
            <input type="text" required name="pass" id="pass" class="pass">
            </p>
            <p>
            <input type="submit" class="btn1" name="btn1" value="Eliminar">
            <input type="submit" class="btn2" name="btn2" value="Crear">
            </p>            
        </form>        
    </div>
    </div>
    
    <?php
    
        if(isset($_POST['btn1'])){
            
            $usuario=$_POST['user'];
            $contra=$_POST['pass'];
            
            include("../conexion.php");
            
            $resultado=mysqli_query($conexion, "SELECT * FROM $tabla1 WHERE usuario='$usuario'");
            while($consulta=mysqli_fetch_array($resultado)){
                $_DELETE_SQL="DELETE FROM $tabla1 WHERE usuario='$usuario'";
                mysqli_query($conexion,$_DELETE_SQL);
                header("Location:administradores.php");
            }
            
        }
        
        if(isset($_POST['btn2'])){
            
            $aux=0;
            $usuario=$_POST['user'];
            $contra=$_POST['pass'];
            $tipo=1;
            
            include("../conexion.php");
            
            $resultados=mysqli_query($conexion, "SELECT * FROM $tabla1 WHERE usuario='$usuario'");
                while($consulta=mysqli_fetch_array($resultados)){
                   $aux=1;
                }
               
               if($aux==1){
                   echo "<script>alert('Usuario existente, intente con otro');</script>";
               }else{                   
                   $conexion->query("INSERT INTO $tabla1 (usuario, contraseña, tipo) values ('$usuario', '$contra','$tipo') ");
                   echo "<script>alert('Usuario Registrado');</script>";
                   header("Location:administradores.php");
                   
               }
            
        }
        
    
    ?>
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>