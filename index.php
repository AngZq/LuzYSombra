<?php
// Incluir archivo de conexión a la base de datos
require 'conexion.php'; // Asegúrate de que el archivo se llama 'conexion.php'

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    // Incluir archivo que maneja la inserción de datos
    require 'insertar.php'; // Asegúrate de que el archivo se llama 'insertar.php'
    insertarDatos($nombre, $telefono, $correo, $conn); // Llama a la función para insertar datos
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Photography</title>
  <link rel="stylesheet" href="css/bulma.min.css">
  <link rel="stylesheet" href="css/material-design-iconic-font.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar">
    <!-- Navbar header -->
    <header class="navbar-header" id="navbar-header">
      <a href="#" class="brand-link is-size-3">
        <i class="zmdi zmdi-camera"></i>
        <span class="brand">Photografy</span>
      </a>
      <button class="navbar-menu-mobile open is-size-3 is-hidden-desktop" id="navbar-menu-mobile">
        <i class="zmdi zmdi-menu"></i>
      </button>
    </header>
    <!-- Navbar container -->
    <ul class="navbar-container" id="navbar-container">
      <li class="navbar-item"><a data-scroll href="#top" id="inicio" class="navbar-a navbar-link-active">Inicio</a></li>
      <li class="navbar-item"><a data-scroll href="#about" id="acercaDe" class="navbar-a">Acerca de mí</a></li>
      <li class="navbar-item"><a data-scroll href="#section2" id="section" class="navbar-a">Lo que creo</a></li>
      <li class="navbar-item"><a data-scroll href="#gallery" id="photos" class="navbar-a">Mis fotos</a></li>
      <li class="navbar-item"><a data-scroll href="#contacto" id="form" class="navbar-a">Contacto</a></li>
    </ul>
  </nav>

  <!-- Sección del carrusel -->
  <div class="section-body" id="top">
    <div class="slide-contenedor">
      <div class="miSlider fade">
        <div class="slider-body">
          <span class="tag-slider is-size-5-desktop">Increible</span>
          <h2 class="is-size-3-mobile has-text-weight-bold slider-title">Fotografía</h2>
          <p class="description-slider is-size-7-mobile"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
            vero quos fugiat, voluptatem vel natus explicabo aperiam quas omnis tenetur. </p>
        </div>
        <img src="img/slider-1.jpg" alt="">
      </div>
      <div class="miSlider fade">
        <div class="slider-body">
          <span class="tag-slider">Increible</span>
          <h2 class="is-size-3-mobile has-text-weight-bold slider-title">Paisaje</h2>
          <p class="description-slider is-size-7-mobile"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
            vero quos fugiat, voluptatem vel natus explicabo aperiam quas omnis tenetur. </p>
        </div>
        <img src="img/slider-2.jpg" alt="">
      </div>
      <div class="miSlider fade">
        <div class="slider-body">
          <span class="tag-slider">Paisaje</span>
          <h2 class="is-size-3-mobile has-text-weight-bold slider-title">Paisaje</h2>
          <p class="description-slider is-size-7-mobile"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam
            vero quos fugiat, voluptatem vel natus explicabo aperiam quas omnis tenetur. </p>
        </div>
        <img src="img/slider-3.jpg" alt="">
      </div>
      <div class="direcciones">
        <a href="#" class="atras" onclick="avanzaSlide(-1)">&#10094;</a>
        <a href="#" class="adelante" onclick="avanzaSlide(1)">&#10095;</a>
      </div>
      <div class="dots">
        <span class="dot active" onclick="posicionSlide(1)"></span>
        <span class="dot" onclick="posicionSlide(2)"></span>
        <span class="dot" onclick="posicionSlide(3)"></span>
      </div>
    </div>

    <!-- About me -->
    <div class="container" id="about">
      <div class="columns is-vcentered">
        <div class="column is-half">
          <div class="about-me">
            <figure class="image">
              <img class="about-me-img" src="img/about-me-mobile.jpg" alt="">
            </figure>
          </div>
        </div>
        <div class="column is-half section-about-me">
          <h1 class="title is-size-3-mobile is-size-2-tablet has-text-weight">Acerca de mí</h1>
          <h5 class="subtitle is-size-6-mobile is-size-5-tablet separator">Profesional en fotografía</h5>
          <p class="text is-size-7-mobile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum repellendus
            sunt
            aliquam eveniet ex ipsum, et aut obcaecati iusto aliquid officiis? At suscipit est magni! Ut minima vitae
            neque?</p>
          <p class="text is-size-7-mobile">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse non aut veniam rerum libero necessitatibus.
            Eveniet tenetur doloribus, accusantium non beatae eos. Obcaecati aperiam eveniet in, iure harum officia
            beatae.
          </p>
        </div>
      </div>
    </div>

    <div id="section2" class="hero my-hero" style="--banner: url(../img/hero-img.jpg); --bg-atachment: fixed;">
      <div class="container-hero">
        <div class="container">
          <div class="columns is-multiline">
            <div class="column is-full has-text-centered">
              <h1 class="title has-text-white is-size-3-mobile is-size-1-tablet">Lo que creo</h1>
              <h5 class="subtitle is-size-5">Para la vida digital</h5>
            </div>
            <div class="column">
              <div class="banner-container">
                <span class="container-icon">
                  <i class="zmdi zmdi-camera zmdi-hc-2x"></i>
                </span>
                <h4 class="is-size-5 has-text-centered has-text-weight-bold">Expocisión Urbana</h4>
                <p class="has-text-centered is-size-7-mobile">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita
                  quaerat.</p>
              </div>
            </div>
            <div class="column">
              <div class="banner-container">
                <span class="container-icon">
                  <i class="zmdi zmdi-camera-monochrome-photos zmdi-hc-2x"></i>
                </span>
                <h4 class="is-size-5 has-text-centered has-text-weight-bold">Films increíbles</h4>
                <p class="has-text-centered is-size-7-mobile">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita
                  quaerat.</p>
              </div>
            </div>
            <div class="column">
              <div class="banner-container">
                <span class="container-icon">
                  <i class="zmdi zmdi-videocam zmdi-hc-2x"></i>
                </span>
                <h4 class="is-size-5 has-text-centered has-text-weight-bold">Mejor fotográfo</h4>
                <p class="has-text-centered is-size-7-mobile">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita
                  quaerat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Galería -->
    <div class="container" id="gallery">
      <div class="columns is-multiline">
        <div class="column has-text-centered is-full">
          <h1 class="title is-size-3-mobile is-size-1-tablet has-text-weight">Mis fotos</h1>
          <h5 class="subtitle is-size-6">Para la vida digital</h5>
        </div>
        <div class="column">
          <div class="gallery-container" id="gallery-container">
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-1-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-2-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-3-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-4-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-5-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-6-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-7-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-8-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-9-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-10-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-11-thumb.jpg" alt="">
              </figure>
            </div>
            <div class="gallery-item">
              <figure class="image">
                <img class="gallery-img" src="img/gallery-12-thumb.jpg" alt="">
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Contacto -->
    <div class="container" id="contacto">
      <div class="columns is-multiline">
        <div class="column has-text-centered is-full">
          <h1 class="title is-size-3-mobile is-size-1-tablet has-text-weight">Contactame</h1>
          <h5 class="subtitle is-size-6">Enviame un mensaje</h5>
        </div>
        <div class="column">
          <form action="index.php" method="POST">
            <div class="columns is-multiline">
              <div class="column is-half">
                <div class="field">
                  <label class="label">Nombre Completo</label>
                  <div class="control">
                    <input name="nombre" class="is-radiusless is-shadowless input is-medium" type="text" placeholder="Nombre completo" required>
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <label class="label">Número de teléfono</label>
                    <input name="telefono" class="is-radiusless is-shadowless input is-medium" type="text" placeholder="Número de teléfono" required>
                  </div>
                </div>
              </div>
              <div class="column is-half">
                <div class="field">
                  <div class="control">
                    <label class="label">Correo Electrónico</label>
                    <input name="correo" class="is-radiusless is-shadowless input is-medium" type="email" placeholder="Correo Electrónico" required>
                  </div>
                </div>
                <div class="field">
                  <div class="control">
                    <button class="is-radiusless is-shadowless button is-medium is-fullwidth" type="submit">
                      Enviar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="my-footer">
      <div class="hero my-hero" style="--banner: url(../img/footer-banner.jpg); --bg-atachment: none;">
        <div class="container-hero">
          <div class="columns is-multiline">
            <div class="column is-full has-text-centered">
              <span class="has-text-white">
                <i class="is-size-3-mobile is-size-1 zmdi zmdi-camera"></i>
              </span>
            </div>
            <div class="column is-full">
              <ul class="my-footer-ul">
                <li class="my-footer-item">
                  <a href="#" class="my-footer-link facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                </li>
                <li class="my-footer-item">
                  <a href="#" class="my-footer-link instagram">
                    <i class="zmdi zmdi-instagram"></i>
                  </a>
                </li>
                <li class="my-footer-item">
                  <a href="#" class="my-footer-link pinterest">
                    <i class="zmdi zmdi-pinterest"></i>
                  </a>
                </li>
                <li class="my-footer-item">
                  <a href="#" class="my-footer-link twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="column has-text-centered is-size-7-mobile is-full">
              <p class="footer-p has-text-white">© 2019 Photografy. Todos los derechos reservados</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="js/smooth-scroll.min.js"></script>
  <script src="js/main.js"></script>
  
</body>

</html>