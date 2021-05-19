<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'assets/head.php' ?>
	<style>

body.dark .error-p {
  border: 1.5px solid #9F9F9F;
  width: 330px;
  height: 390px;
  background: #747070;
  color: #000000;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
  border-radius: 10px;
}

.error-p {
  border: 1.5px solid;
  width: 330px;
  height: 390px;
  background: #D1D1D1;
  color: #000000;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
  border-radius: 10px;
}

.error-p .avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

.error-p h1 {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 30px;
}

.error-p p {
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
}

.error-p a {
  text-decoration: none;
  font-size: 15px;
  line-height: 20px;
  color: #4FC5EC;
}

.error-p a:hover {
  color: #7FCBD8;
}

body.dark .error-p a {
  font-size: 15px;
  line-height: 20px;
  color: #9199E6;
}

body.dark .error-p a:hover {
  color: #AEB6F9;
}
	</style>
</head>
<body>
<header>
<nav>
			<a class="logotipo" href="#">Counters</a>
			<div class="enlaces">
				<a href="tools.php">Contacto</a>
				<a href="index.php">Inicia Sesión</a>
				<a href="signup.php">Registrate</a>
				<button type="button" class="switch" id="switch" name="button">
						<span><i class="fas fa-sun"></i></span>
						<span><i class="fas fa-moon"></i></span>
				</button>
			</div>
		</nav>
</header>

<div class="error-p">

<img src="media/countersicon.png" class="avatar" alt="Avatar image">

<h1>ERROR</h1>
  <p>Error al completar el acceso, favor de contactar con el administrador.</p>
  <br><br>
  <a href="tools/help.php"><b><u>Enviar correo</u></b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="index.php"><b><u>Reintentar acceder</u></b></a>
</div>

<?php require 'assets/script.php' ?>

</body>
</html>