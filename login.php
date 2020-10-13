<?php
    //iniciar
    if(isset($_POST["btn1"])){
        include("conexion.php");
        
        session_start();
                
        $_SESSION['sesion_status']=0;

        $nom=$_POST["user"];
        $contra=$_POST["pass"];
        
        $resultados=mysqli_query($conexion, "SELECT * FROM $tabla1 WHERE usuario='$nom' AND contraseña='$contra'");
        while($consulta=mysqli_fetch_array($resultados)){
            
            $tipo=$consulta['tipo'];
            $_SESSION['sesion_status']=1;
        }
        
        if($_SESSION['sesion_status']==1){
            if($tipo==1 || $tipo==2){
                header("Location:admin/index_admin.php");
            }else{ //seria tipo 3=usuario
                header("Location:user/index_user.php");
            }
        }else{
            echo "<script> alert('Usuario y/o Contraseña incorrecta')</script>";
        }
    }

    //registrar
    if(isset($_POST['btn2'])){
        $aux=0;
        $nom=$_POST['user'];
        $contra=$_POST['pass'];
        
        $tipo=3;  //es un registro de usuario normal
               
        include("conexion.php");
               
        $resultados=mysqli_query($conexion, "SELECT * FROM $tabla1 WHERE usuario='$nom'");
        while($consulta=mysqli_fetch_array($resultados)){
            $aux=1;
        }               
        if($aux==1){
            echo "<script>alert('Usuario existente, intente con otro');</script>";
        }else{
            $conexion->query("INSERT INTO $tabla1 (usuario, contraseña,tipo) values ('$nom', '$contra','$tipo')");
            echo "<script>alert('Usuario Registrado');</script>";
            header("Location:user/index_user.php");
        }
        
    }
    
?>