<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Menú Dinámico</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link rel="stylesheet" href="css/materialize.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  
    </head>

    <body>
        <div class="navbar-fixed ">
            <nav class="blue-grey darken-4">
                <div class="container">
                    <div class="nav-wrapper">
                      <a href="index.html" class="brand-logo"><img src="img/L-bLANCO.png" alt=""></a>
                      <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                      <ul id="menu" class="right hide-on-med-and-down"></ul>
                    </div>
                </div>
              </nav>
            </div>    
              <ul class="sidenav" id="mobile-menu"></ul>

              <div class="carousel carousel-slider mb-4">
                <a class="carousel-item" href="#one!" ><img src="img/Carrilera.png"></a>
                <a class="carousel-item" href="#five!">
                  <video class="responsive-video" autoplay loop muted>
                    <source src="img/Banner.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                </a>
                <a class="carousel-item" href="#one!" ><img src="img/Carrilera.png"></a>
              </div>
              <div class="row center">
                <div class="col s12 m3">
                  <div class="card-panel lime lighten-3 cardStyle" style="background-image: url('img/card1.jpg'); " id="cursos-libres">
                    <span class="white-text">Cursos libres avanzados</span>
                  </div>                    
                </div>
                <div class="col s12 m3">
                  <div class="card-panel red lighten-3 cardStyle" style="background-image: url('img/card2.jpg');" id="Programas">
                    <span class="white-text" >Programas</span>
                  </div>
                </div>
                <div class="col s12 m3">
                  <div class="card-panel indigo lighten-3 cardStyle" style="background-image: url('img/card3.jpg');" id="Pregrados">
                    <span class="white-text" >Pregados</span>
                  </div>
                </div>
                <div class="col s12 m3">
                  <div class="card-panel grey lighten-1 cardStyle" style="background-image: url('img/card4.jpg');" id="Posgrados">
                    <span class="white-text">Posgrados</span>
                </div>
                </div>
              </div>
              <div class="container center bienvenida">
                <h1 >Bienvenido</h1>
                <h6>Universidad San Pablo de Guatemala</h6>
                <div class="row contenido">
                    <div class="col s12 m6">
                      <p>
                        La visión de la Universidad San Pablo de Guatemala, nació de la necesidad de contar con una institución que pudiera contribuir a la formación de la sociedad a través de una educación adecuada, por medio de la cual se puede impactar a los estudiantes no solo en el ámbito académico, sino también en los principios, valores éticos y morales para que, al ser profesionales, puedan ser agentes de transformación en la sociedad en donde actúen.
                      </p>
                      <p>
La Universidad San Pablo de Guatemala es autorizada legalmente por el Consejo de la Enseñanza Privada Superior el 23 de marzo del 2006.
                      </p>
                    </div>
                    <div class="col s12 m6">
                      <p>
                        La Universidad San Pablo de Guatemala inició sus actividades académicas con el programa de Maestría en Liderazgo Organizacional, enfocado en desarrollar líderes con las destrezas necesarias para dirigir organizaciones innovadoras, creativas, éticas y estratégicas.
                      </p>
                      <p>
Se busca a través de una metodología altamente activa, participativa y aplicada al mundo real para provocar la investigación, la creación de propuestas, la generación y gestión del conocimiento, la planificación estratégica, la implementación y evaluación de iniciativa orientada al desarrollo de la nación.
                      </p>
                    </div>
                    <p><a href="quienesSomos.html">Continuar leyendo</a></p>
                </div>
              </div>
              <footer class="page-footer blue-grey darken-4">
                <div class="container">
                  <div class="row">
                    <div class="col l6 s12">
                      <h5 class="white-text">Campus central</h5>
                      <p class="grey-text text-lighten-4">4 Calle 23-03, Zona 14 Ciudad de Guatemala [502] 2326-5174 Whatsapp: [502] 4160-0285 mifuturo@uspg.edu.gt.</p>
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
              
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            
      <script src="js/materialize.min.js"></script>
      <script src="js/menu.js"></script>
     

      <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sidenavElems = document.querySelectorAll('.sidenav');
            var modalElems = document.querySelectorAll('.modal');
            var sidenavInstances = M.Sidenav.init(sidenavElems);
            var modalInstances = M.Modal.init(modalElems);
          });
          
          document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, {
              fullWidth: true,
              indicators: false
            });
            setInterval(function() {
              instances.forEach(instance => instance.next());
            }, 6000); 
          });
      </script>
      <script src="js/sharon.js"></script>
      

    </body>
  </html>