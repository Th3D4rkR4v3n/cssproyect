<?php
$vars = isset($_SESSION['user_id']);
		if ($vars > 0) {
        header('Location: home.php');
        }
?>