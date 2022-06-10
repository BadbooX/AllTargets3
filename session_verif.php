<?php 
session_start();
if(!isset($_SESSION['logged']) || !$_SESSION['logged']) {
    header('Location:connexion.php?login_err=session');
}
$login = isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : '';

if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 3)) {
    session_unset(); 
    session_destroy(); 
    echo "session détruite"; 
}
$_SESSION['start'] = time();