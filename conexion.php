<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="login";
    
    $conexion=mysqli_connect($server,$username,$password,$db) or die ("no se establece conexion");
    
    $tabla1="usuarios";
    
?>