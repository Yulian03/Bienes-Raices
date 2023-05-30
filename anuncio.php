<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$4,000,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono WC">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>
            <p>Donec at arcu tortor. Aenean molestie magna vel porta malesuada. Sed vel tristique eros. Nullam egestas volutpat malesuada. Praesent blandit justo quam, id dapibus tellus elementum ut. Vivamus rutrum in turpis vitae vestibulum. Duis eget dui ultricies, pellentesque leo et, mollis ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque vulputate eu risus at porttitor. Curabitur dolor lorem, tempus eget commodo a, consectetur scelerisque orci.</p>

            <p>Praesent eleifend dui ac elit mattis, vitae finibus neque molestie. Duis nisl lorem, accumsan sit amet mauris eget, viverra aliquet nibh. Sed luctus pulvinar metus, in tincidunt nulla mattis id. Aenean quis est vel nibh pellentesque dignissim id at est. Duis pulvinar lacinia dui. Curabitur tincidunt viverra dictum. Maecenas ac massa ex. Sed et orci non justo sagittis porta.</p>

        </div>

    </main>

<?php
   
   incluirTemplate('footer');
?>

    

