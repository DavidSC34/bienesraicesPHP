<?php include 'includes/templates/header.php'; ?>

<main class="contenedor seccion">
    <h1>Contacto</h1>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
    </picture>
    <h2>Llene el formulario de Contacto</h2>
    <form action="" class="formulario">
        <fieldset>
            <legend>Informacion Personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" name="" id="nombre" placeholder="Tu nombre">

            <label for="email">E-mail</label>
            <input type="email" name="" id="email" placeholder="Tu email">

            <label for="telefono">Telefono</label>
            <input type="tel" name="" id="telefono" placeholder="Tu telefono">

            <label for="mensaje">Mensaje</label>
            <textarea name="" id="mensaje" cols="30" rows="10"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion sobre la propiedad</legend>

            <label for="opciones">Vende o Compra</label>
            <select name="" id="opciones">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="presupuesto">Precio o presupuesto</label>
            <input type="number" name="" id="presupuesto" placeholder="Tu presupuesto">

        </fieldset>

        <fieldset>
            <legend>Contacto</legend>

            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                <label for="contactar-email">E-mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">
            </div>
            <p>Si eligio telefono, elija la fecha y la hora</p>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">

            <label for="hora">Hora</label>
            <input type="time" name="" id="hora" min="09:00">

        </fieldset>
        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>

<?php include 'includes/templates/footer.php'; ?>