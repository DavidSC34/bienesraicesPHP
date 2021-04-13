<?php include 'includes/templates/header.php'; ?>

<main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>
    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote> 25 años de experiencia</blockquote>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde saepe reprehenderit commodi alias iusto aspernatur veritatis voluptatibus voluptatem inventore, nobis aliquam laboriosam vitae est ab fuga suscipit laudantium rem deserunt.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde saepe reprehenderit commodi alias iusto aspernatur veritatis voluptatibus voluptatem inventore, nobis aliquam laboriosam vitae est ab fuga suscipit laudantium rem deserunt.</p>
        </div>
    </div>
</main>
<section class="contenedor seccion">
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi non corporis ullam voluptatem ducimus nam, natus illum inventore quibusdam dolores, incidunt sint eaque architecto quaerat quasi sequi quia ratione.</p>

        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi non corporis ullam voluptatem ducimus nam, natus illum inventore quibusdam dolores, incidunt sint eaque architecto quaerat quasi sequi quia ratione.</p>

        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi non corporis ullam voluptatem ducimus nam, natus illum inventore quibusdam dolores, incidunt sint eaque architecto quaerat quasi sequi quia ratione.</p>

        </div>
    </div>
</section>

<footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <nav class="navegacion">
            <a href="nosotros.php">Nosotros</a>
            <a href="anuncios.php">Anuncios</a>
            <a href="blog.php">Blog</a>
            <a href="contacto.php">contacto</a>
        </nav>
    </div>
    <p class="copyright">Todos los derechos Reservados 2021 &copy;</p>
</footer>

<script src="build/js/bundle.min.js"></script>
</body>

</html>