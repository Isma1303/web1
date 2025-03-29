<?php
include 'conexion.php';
$usuarioingresado= $_SESSION['usuarioingresado'];
$searchuser = mysqli_query($conn, "SELECT * FROM user WHERE name='$usuarioingresado'");

if($searchuser && mysqli_num_rows($searchuser) > 0){
   $show = mysqli_fetch_array($searchuser);
} else {
    echo "Usuario no ha sido encontrado";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion </title>
</head>
<body>
    
</body>
</html><!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="./css/login.css" />
    <linkhref="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"rel="stylesheet"
    />
  </head>
  <body>
    <div>
      <div class="wrapper">
        <form id="loginForm">
          <h1>Iniciar Sesión</h1>
          <div class="input-box">
            <label for="username">Usuario:</label>
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Usuario"
              required
            />
            <box-icon type="solid" name="user"></box-icon>
          </div>
          <div class="input-box">
            <label for="password">Contraseña:</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Contraseña"
              required
            />
            <box-icon type="solid" name="lock-alt"></box-icon>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox" />Recordarme</label>
            <a href="#">Olvidaste tu Contraseña?</a>
          </div>

          <button type="submit" class="btn" name="loginbtn">Iniciar</button>
          <div class="register-link">
            <p>No tienes una cuenta? <a href="#">Registrate</a></p>
          </div>
        </form>
      </div>
    </div>
    <script src="./src/scripts/scriptLogin.js"></script>
  </body>
</html>
