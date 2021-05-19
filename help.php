<?php 
session_start();
require 'assets/sesion-verify.php';
require 'assets/timevalidity.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php 
require 'assets/head.php'
?>

<style>

input[type="text"], input[type="email"], textarea{
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
		outline: none;
	   	display: block;
		width: 300px;
		border-radius: 3px;
        }

    input[type="submit"]:hover{
    color: #000;
    background-color: #9ED6E0;
        }
    body.dark input[type="submit"]:hover{
    color: #000;
    background-color: #BFC5F8;
        }

    body.dark input[type="submit"]{
            background-color: #9199E6;
        }
		
		h1{
			text-align: center;
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

<?php require 'assets/sidebar.php'; ?>

<div class="contenedor">


<?php echo'<p>' . $message . '</p>'; ?>

<form action="envio.php" method="post">
<h1>Envienos un correo</h1>
<input type="text" name="asunto" placeholder="Asunto">
<input type="email" name="mail" placeholder="Correo">
<textarea name="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
<input type="submit" value="Enviar">
</form>

<form action="index.php" method="post">
<input type="submit" value="Volver a la paina principal">
</form>


</div>
<?php require 'assets/script.php'?>
</body>
</html>
