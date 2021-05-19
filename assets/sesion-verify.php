<?php
session_start();
$vars = $_SESSION['user_id'];
		if ($vars == null || $vars = '') {
			header('Location: index.php');
            die();
		}else{

        }
?>