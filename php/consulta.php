<?php
    $ruta='../bootstrap';
    require_once('encabezado.php');
    if (!empty($_POST['titulos']) && !empty($_POST['jugadores']) && !empty($_POST['lanzamientos']) && !empty($_POST['generos']) && !empty($_FILES['portadas']['size'])) {
        $archivoTipo = $_FILES['portadas']['type'];
        if ($archivoTipo == 'image/jpeg') {
            $nombreImagen = $_FILES['portadas']['name'];
            $separado = explode('.', $nombreImagen);
            $ruta = $_FILES['portadas']['tmp_name'];
            $cambioRuta = $_POST['titulos'];
            $rutaNueva = '../img/portadas/';
            if (!file_exists($rutaNueva)) {
                mkdir($rutaNueva);
            }
            $destNuevo = $rutaNueva . $cambioRuta . '.' . $separado[1];
            move_uploaded_file($ruta, $destNuevo);
        }
        $carpeta = '../txt/';
        $nombreArc = 'juegos.txt';
        if (!file_exists($carpeta)) {
            mkdir($carpeta);
        }
        $archivo = fopen($carpeta.$nombreArc,'a');
        $linea = implode(';', $_POST);
        fputs($archivo, $linea . PHP_EOL);
        fclose($archivo);
    }


?>
<?php
    require_once('pie.php');
?>
