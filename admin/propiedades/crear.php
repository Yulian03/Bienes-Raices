<?php

    //Base de datos

    require '../../includes/config/database.php';
    $db = conectarDB();

    //Arreglo con mensajes de errores

    $errores = [];  

    //Ejecutar el codigo despues de que el usuario enviar el formulario
    if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = $_POST ['titulo'];
        $precio = $_POST ['precio'];
        $descripcion = $_POST ['descripcion'];
        $habitaciones = $_POST ['habitaciones'];
        $wc = $_POST ['wc'];
        $estacionamiento = $_POST ['estacionamiento'];
        $vendedor_id = $_POST ['vendedor_id'];

        if(!$titulo) {
            $errores [] = "Debes añadir un titulo";
        }

        if(!$precio) {
            $errores [] = "El precio es obligatorio";
        }

        if( strlen ($descripcion) < 50 ) {
            $errores [] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }

        if(!$habitaciones) {
            $errores [] = "El número de habitaciones es obligatorio";
        }

        if(!$wc) {
            $errores [] = "El número de baños es obligatorio";
        }

        if(!$estacionamiento) {
            $errores [] = "El número de lugares de estacionamiento es obligatorio";
        }

        if(!$vendedor_id) {
            $errores [] = "Elige un vendedor";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";
    
        //Revisar que el arreglo de errores este vacio

        if (empty($errores)){
            //Insertar en el base de datos
            $query ="INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedor_id) 
            VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc','$estacionamiento','$vendedor_id')";

            //echo $query;

            $resultado = mysqli_query ($db, $query);

            if ($resultado) {
                echo "Dato insertado correctamente";
            }
        }
        
        
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/bienesraices/admin/index.php" class="boton boton-verde">Volver</a>

        <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

            
        <form class="formulario" method="POST" action="/bienesraices/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo:</label>
                <input type="texto" id="titulo" name="titulo" placeholder="Titulo Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor_id">
                    <option value="">-- Seleccione --</option>
                    <option value="1">Paola</option>
                    <option value="2">Pepito</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">

        </form>
    </main>

<?php
   
   incluirTemplate('footer');
?>