<?php
// Incluir el encabezado
include '../includes/header.php';
?>

<section class="translado-contenedor">
    <div class="card-translado">
        <h3>Translado</h3> <!-- Título agregado -->
        <form action="" method="post" class="form-translado">
            <div class="input-group doble">
                <div class="fecha-container">
                    <label for="origen">
                        <span class="icono-origen"></span>
                        Desde
                    </label>
                    <input type="text" id="origen" name="origen" placeholder="Aeropuerto de Huatulco">
                </div>
                <div class="hora-container">
                    <label for="destino">
                        <span class="icono-origen"></span>
                        Hasta
                    </label>
                    <input type="text" id="destino" name="destino"
                        placeholder="Ingresa un hotel o dirección adonde quieras ir">
                </div>
            </div>


            <div class="input-group checkbox-group">
                <input type="checkbox" id="agregar-regreso" name="agregar-regreso">
                <label for="agregar-regreso">Quiero agregar el regreso</label>
            </div>

            <div class="input-group doble">
                <div class="fecha-container">
                    <label for="fecha">
                        <span class="icono-calendario"></span> <!-- Ícono para el calendario -->
                        Fecha
                    </label>
                    <input type="date" id="fecha" name="fecha" placeholder="Llegada del vuelo">
                </div>
                <div class="hora-container">
                    <label for="hora">
                        Hora
                    </label>
                    <input type="time" id="hora" name="hora" value="00:00">
                </div>
            </div>

            <div class="input-group doble">
                <p>Pasajeros</p> <!-- Título agregado -->
                <div class="fecha-container">
                    <label for="pasajeros">Adultos</label>
                    <input type="number" id="pasajeros" name="pasajeros" value="1" min="1">
                </div>
                <div class="hora-container">
                    <label for="pasajeros">Niños</label>
                    <input type="number" id="pasajeros" name="pasajeros" value="1" min="1">
                </div>
            </div>

            <button type="submit" class="submit-btn">Buscar</button>
        </form>
    </div>
</section>

<?php
// Incluir el pie de página
include '../includes/footer.php';
?>