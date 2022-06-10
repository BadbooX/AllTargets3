<?php 
if(!isset($_SESSION['logged']) || !$_SESSION['logged']) {
    header('Location:connexion.php?login_err=session');
}
$login = isset($_SESSION['user']) ? $_SESSION['user'] : '';

?>