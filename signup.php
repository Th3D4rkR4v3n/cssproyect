<?php 
    session_start();
   require 'database.php';
?>

<?php
    $message = '';
    if(!empty($_POST['nombre'])&&!empty($_POST['apellidos'])&&!empty($_POST['empresan'])&&!empty($_POST['email'])&&!empty($_POST['password'])){
         $sql = "INSERT INTO users (nombre, apellidos, empresan, email, password) VALUES (:nombre, :apellidos, :empresan, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':apellidos', $_POST['apellidos']);
        $stmt->bindParam(':empresan', $_POST['empresan']);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
        

            if($stmt->execute()){
                $message = 'Se creo el usuario exitosamente';
            } 
            else{
                $message = 'Lo sentimos, usuario no creado, vuelva a intentar más tarde';
            }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
<?php 
require 'assets/head.php'
?>
<style>
body{
      
   }

input[type="text"], input[type="password"]{
    outline: none;
    padding: 20px;
    display: block;
    width: 300px;
    border-radius: 3px;
    border: 1px solid #eee;
    margin: 20px auto;
    margin-left: auto;
    background-color: #DEDEDE;
        }

input[type="submit"]{
        padding: 10px;
        color:#fff;
        background-color: #4FC5EC;
        width: 300px;
        margin: 20px auto;
        margin-top: 0;
        border: 0;
        border-radius: 3px;
        cursor: pointer;
        margin-left: auto;
        margin-right: auto;    
        }

input[type="submit"]:hover{
    color: #000;
    background-color: #9ED6E0;
    align-items: center;
        }
body.dark input[type="submit"]:hover{
    color: #000;
    background-color: #BFC5F8;
        }

body.dark input[type="submit"]{
    background-color: #9199E6;
        }

body.dark h1{
        color: #D7D7D7;
    }
    body.dark p{
        color: #D0D0D0;
    }

</style>
</head>
<body>
<header>
<nav>
			<a class="logotipo" href="#">Register</a>
			<div class="enlaces">
                        <a href="index.php">Inicia Sesión</a>
                        <button type="button" class="switch" id="switch" name="button">
						<span><i class="fas fa-sun"></i></span>
						<span><i class="fas fa-moon"></i></span>
				</button>
			</div>
		</nav>
</header>
<div class="contenedor" style="text-align: center;">

    <?php if(!empty($message)): ?>
      <p><?= $message ?></p>
    <?php endif; ?>
<br>
    <form action="signup.php" method="post">
        <h1>Registrate</h1>
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellidos" placeholder="Apellidos">
        <input type="text" name="empresan" placeholder="Nombre de la empresa">
        <input type="text" name="email" placeholder="Correo electronico">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" value="Enviar"><br>
    </form>

    </div>
   



<?php 
require 'assets/script.php'
?>
</body>
</html>