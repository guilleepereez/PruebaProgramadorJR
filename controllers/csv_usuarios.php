<?php
    include '../model/conexion.php';

    $modeloBD = new ConexionBD();
    $conexion = $modeloBD->get_conexion();

    $sql = "SELECT * FROM usuario"; //hago la consulta a la base de datos

    $query = $conexion->query($sql);

    $info = array(); //los datos se guardaran en este arreglo
    while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
        $info[] = $result; //guardo cada resultado en este arreglo
    }

    $file = "usuario.csv"; //le doy un nombre al archivo

    file_put_contents($file, "id, nombre, apellido, edad, email, habilidadesDeUsuario" . PHP_EOL); //creamos el archivo

    for ($i = 0; $i < count($info); $i++) {
        file_put_contents($file, implode(",", $info[$i]), FILE_APPEND); //escribo en el archivo separando el arreglo con comas
        file_put_contents($file, PHP_EOL, FILE_APPEND); //agrego un salto de linea
    }

    if (file_exists($file)) { //verifico que el archivo haya sido creado
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
    } else {
        //en caso no se haya creado el archivo, muestro un mensaje
        echo "Hubo un error al momento de crear el archivo, verifique los permisos de las carpetas del servidor.";
        echo PHP_EOL;
    }
