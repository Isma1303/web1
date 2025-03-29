<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad San Pablo de Guatemala</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <div class="navbar-fixed">
      <nav class="blue-grey darken-4">
        <div class="container">
          <div class="nav-wrapper">
            <a href="index.html" class="brand-logo"><img src="img/L-bLANCO.png" alt="Logo"></a>
            <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="menu" class="right hide-on-med-and-down"></ul>
          </div>
        </div>
      </nav>
    </div>


    <ul class="sidenav" id="mobile-menu"></ul>


    <div class="parallax-container">
      <div class="parallax">
        <img src="img/bg.jpg" alt="Background Image">
        <div class="center-align" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
          <h4 class="pulse">QUIENES SOMOS</h4>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row center">
        <h5>¿Quiénes Somos?</h5>
        <div class="col s12 m6 mt-4 ">
          <img src="img/somosImg.jpg" class="responsive-img" alt="Imagen de Quienes Somos">
        </div>
        <div class="col s12 m6">
          
          <p>
            La Universidad San Pablo de Guatemala es una institución educativa privada fundada con el propósito de contribuir a la formación de la sociedad mediante una educación integral que abarca aspectos académicos, éticos y morales. Su visión se centra en impactar a los estudiantes no solo en el ámbito académico, sino también en sus principios y valores, preparándolos para ser agentes de transformación en la sociedad.
          </p>
          <ul>
            <li><strong>Campus Central:</strong> Ubicado en la Zona 14 de la Ciudad de Guatemala, este campus alberga las instalaciones principales de la universidad.</li>
            <li><strong>Campus Escuintla:</strong> Inaugurado en 2014, este campus se encuentra en la ciudad de Escuintla, ampliando así su alcance educativo.</li>
          </ul>
          <p>
            La universidad se fundamenta en un sistema educativo que promueve modelos innovadores y una acción pedagógica comprometida con la transformación personal y social. Su filosofía educativa está centrada en la innovación, la invención y la generación de ideas originales, sin límites. Además, enfatiza el uso de tecnologías de información y comunicación como parte integral del aprendizaje, fomentando un espíritu de servicio a la comunidad y el desarrollo de valores progresistas.
          </p>
        </div>
        
      </div>
    </div>

    <footer class="page-footer blue-grey darken-4">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Campus central</h5>
            <p class="grey-text text-lighten-4">
              4 Calle 23-03, Zona 14 Ciudad de Guatemala [502] 2326-5174 <br> Whatsapp: [502] 4160-0285 mifuturo@uspg.edu.gt.
            </p>
          </div>
          <div class="col l4 offset-l2 s12">
            <ul id="footer-menu"> </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright blue-grey darken-3">
        <div class="container">
          © 2024 Copyright Grupo #1
        </div>
      </div>
    </footer>

    <script src="js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/menu.js"></script>
    <script>
      
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems, { fullWidth: true, indicators: false });
        var parallaxContainers = document.querySelectorAll('.parallax-container');
        parallaxContainers.forEach(function(container) {
          container.style.height = '200px'; // Set the desired height
        });
        var parallaxElems = document.querySelectorAll('.parallax');
        var parallaxInstances = M.Parallax.init(parallaxElems);
      });
    </script>
  </body>
</html>