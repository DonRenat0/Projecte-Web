    <?php
$conexion = new mysqli("91.121.65.149","cartitas","locuranime123","lol_macm");
    
    if ($conexion->connect_error){
        die("no se ha podido conectar");
    }else{
        echo "conectada";
    }
    ?>