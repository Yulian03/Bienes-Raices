<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoracion de tu hogar</h1>

        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span> 24/05/2023</span> Por: <span> Admin</span></p>


        <div class="resumen-propiedad">
            
            <p>Donec at arcu tortor. Aenean molestie magna vel porta malesuada. Sed vel tristique eros. Nullam egestas volutpat malesuada. Praesent blandit justo quam, id dapibus tellus elementum ut. Vivamus rutrum in turpis vitae vestibulum. Duis eget dui ultricies, pellentesque leo et, mollis ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque vulputate eu risus at porttitor. Curabitur dolor lorem, tempus eget commodo a, consectetur scelerisque orci.</p>

            <p>Praesent eleifend dui ac elit mattis, vitae finibus neque molestie. Duis nisl lorem, accumsan sit amet mauris eget, viverra aliquet nibh. Sed luctus pulvinar metus, in tincidunt nulla mattis id. Aenean quis est vel nibh pellentesque dignissim id at est. Duis pulvinar lacinia dui. Curabitur tincidunt viverra dictum. Maecenas ac massa ex. Sed et orci non justo sagittis porta.</p>

        </div>

    </main>

<?php
   
   incluirTemplate('footer');
?>