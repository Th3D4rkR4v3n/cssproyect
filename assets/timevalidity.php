<?php

if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 600) {
    require 'logout.php';
    die();  
}
$_SESSION['tiempo']=time();

?>