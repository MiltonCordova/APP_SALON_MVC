<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email acontinuación</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" action="olvide" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input
            type="email"
            id="emai"
            name="email"
            placeholder="Tu Email"
        />
    </div>
    <input type="submit" class="boton" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/public/">¿Ya tienes una cuenta? Iniciar Sesión</a>
    <a href="/public/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>