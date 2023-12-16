<?php
    $ruta = 'bootstrap';
    require_once('php/encabezado.php');
?>

    <form action="php/consulta.php" method="post" enctype="multipart/form-data" class="col-5 mt-4 m-auto text-white">
        <legend class="text-center bg-black p-1">Nuevo juego</legend>
        <section>
            <label for="titulo" class="form-label">Título:</label>
            <input type="text" name="titulos" id="titulo" class="form-control">
        </section>
        <section>
            <label for="jugadore" class="form-label">Jugadores:</label>
            <input type="number" name="jugadores" id="jugadore" class="form-control">
        </section>
        <section>
            <label for="lanzamiento" class="form-label">Lanzamiento:</label>
            <input type="date" name="lanzamientos" id="lanzamiento" class="form-control">
        </section>
        <section>
            <label for="genero" class="form-label">Género:</label>
            <select name="generos" id="genero" class="form-control">
                <option value="Acción">Acción</option>
                <option value="Aventura">Aventura</option>
                <option value="Battle Royale">Battle Royale</option>
                <option value="Terror">Terror</option>
            </select>
        </section>
        <section>
            <label for="portada" class="form-label">Portada:</label>
            <input type="file" name="portadas" id="portada" class="form-control">
        </section>
        <section class="row justify-content-center p-1 mt-2">
            <input type="submit" value="Guardar" class="col-3 btn btn-primary" >
        </section> 
    </form>
<?php
    require_once('php/pie.php');
?>