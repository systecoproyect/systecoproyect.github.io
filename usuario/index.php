<?php
    // Incluir el encabezado
    include '../includes/header.php';
?>
    <!-- Sección de Introducción con Carrusel -->
    <section class="intro-section">
        <div class="carousel">
            <div class="carousel-slide active" style="background-image: url('../imagenes/slide0.webp');">
                <h1>Paraíso Huatulco</h1>
                <p>Somos una agencia de viajes consolidada desde 1994, con el claro propósito de ser su anfitrión durante su estancia en Huatulco. Nuestro compromiso es brindarle un servicio de calidad y hacerlo sentir como en casa.</p>
            </div>
            <div class="carousel-slide" style="background-image: url('../imagenes/slide1.webp');">
                <h1>Experiencias Únicas</h1>
                <p>Disfruta de actividades inolvidables en las hermosas Bahías de Huatulco con tours diseñados para ti.</p>
            </div>
            <div class="carousel-slide" style="background-image: url('../imagenes/slide2.webp');">
                <h1>Confort y Lujo</h1>
                <p>Vive el lujo de nuestras exclusivas embarcaciones y servicios personalizados en cada viaje.</p>
            </div>
        </div>

        <!-- Indicadores del carrusel -->
        <div class="carousel-indicators">
            <span class="dot active" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </section>

    <!-- Sección de Servicios con tarjetas -->
    <section class="services-section">
        <h2>Ofrecemos:</h2>
        <div class="card-grid">
            <div class="card">
                <img src="../imagenes/tour.webp" alt="Imagen de Tour">
                <h3>Tours</h3>
                <p>Te ofrecemos una gran variedad de tours: adrenalina, cultura, gastronomía y mucho más.</p>
            </div>

            <div class="card">
                <img src="../imagenes/viaje.webp" alt="Imagen de Tour">
                <h3>Transporte</h3>
                <p>Preocúpate sólo de disfrutar, a lo demás pensamos nosotros, también en el transporte.</p>
            </div>

            <div class="card">
                <img src="../imagenes/paquete.webp" alt="Imagen de Tour">
                <h3>Paquetes</h3>
                <p>Vuelo, hotel, transporte y tours… Confía en nosotros y tendrás las vacaciones de tus sueños.</p>
            </div>

            <div class="card">
                <img src="../imagenes/especializacion.jpg" alt="Imagen de Tour">
                <h3>Proveeduría especializada</h3>
                <p>Cotizamos todo tipo de equipo que requiera para su evento.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Experiencia con una tarjeta -->
    <section class="experience-section">
        <div class="card">
            <h2>30 Años de Experiencia</h2>
            <p>El equipo de Paraíso Huatulco trabaja de manera conjunta y profesional, brindando siempre propuestas innovadoras y respuestas flexibles a los requerimientos de cada cliente...</p>
        </div>
    </section>

    <!-- Sección del Equipo con tarjetas -->
    <section class="team-section">
        <h2>Nuestro equipo</h2>
        <div class="card-grid">
            <div class="card">
                <img src="../imagenes/yate.webp" alt="Imagen de Yate">
                <h3>Yate Privado</h3>
                <p>Un viaje exclusivo en yate privado para disfrutar cómodamente un paseo por las Bahías de Huatulco o salir en un día de pesca. Tripulación y equipo a bordo disponible todos los días.</p>
            </div>

            <div class="card">
                <img src="../imagenes/lancha.webp" alt="Imagen de Lancha">
                <h3>Lancha</h3>
                <p>Paraíso I es ideal para un viaje en familia. Recomendado para que 10 personas realicen un recorrido por las 9 bahías de Huatulco y conocer la belleza natural del destino.</p>
            </div>

            <div class="card">
                <img src="../imagenes/autobus.webp" alt="Imagen de Autobus">
                <h3>Autobuses</h3>
                <p>Disponemos de equipo de transporte para su grupo al llegar a Bahías de Huatulco, además de estar a su disposición durante su estancia y a su retiro del destino.</p>
            </div>

            <div class="card">
                <img src="../imagenes/vans.webp" alt="Imagen de Van">
                <h3>Vans</h3>
                <p>Nuestras espaciosas camionetas tipo Van cuentan con servicio de aire acondicionado y están disponibles para el traslado de grupos de hasta 12 personas.</p>
            </div>

            <div class="card">
                <img src="../imagenes/auto.webp" alt="Imagen de Auto de lujo">
                <h3>Especiales</h3>
                <p>Encuentra la comodidad, lujo y tranquilidad de un auto de lujo especialmente para ti. Dirígete a cualquier zona de Huatulco sin contratiempos.</p>
            </div>
        </div>
    </section>
<br>
<br>

<?php
    // Incluir el pie de página
    include '../includes/footer.php';
?>
