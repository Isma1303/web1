<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Contacto</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="navbar-fixed">
        <nav class="blue-grey darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.html" class="brand-logo">
                        <img src="img/L-bLANCO.png" alt="Logo">
                    </a>
                    <a href="#" data-target="mobile-menu" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul id="menu" class="right hide-on-med-and-down"></ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-menu"></ul>

    <div class="parallax-container">
        <div class="parallax">
            <img src="img/bg2.jpg" alt="Imagen de fondo">
            <div class="center-align" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white;">
                <h4 class="pulse">CONTACTO</h4>
            </div>
        </div>
    </div>

    <div class="container center">
        <section>
            <div class="container">
                <h1>Universidad San Pablo de Guatemala</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                <div class="formulario">
                    <h4>Ingresa tus datos</h4>
                    <form action="" id="alerta-form">
                        <input class="input" type="text" id="nombre" placeholder="Nombre">
                        <input class="input" type="email" id="correo" placeholder="Correo">
                        <input class="input" type="number" id="carnet" placeholder="Carnet">
                        <button class="button" type="submit" id="alerta-submit" value="Mostrar">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <footer class="page-footer blue-grey darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Campus central</h5>
                    <p class="grey-text text-lighten-4">
                        4 Calle 23-03, Zona 14 Ciudad de Guatemala<br>
                        [502] 2326-5174<br>
                        Whatsapp: [502] 4160-0285<br>
                        mifuturo@uspg.edu.gt
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
    <script src="js/contact.js"></script>
    <script src="js/menu.js"></script>
    <script>
        
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);

            var parallaxContainers = document.querySelectorAll('.parallax-container');
            parallaxContainers.forEach(function (container) {
                container.style.height = '200px'; 
            });
            var parallaxElems = document.querySelectorAll('.parallax');
            var parallaxInstances = M.Parallax.init(parallaxElems);
        });
    </script>
</body>
</html>