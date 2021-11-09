<?php
//session_start();
//session expires after 10 minutes of inactivity
if (isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 60*10)) {
    session_unset(); 
    session_destroy(); 
    header("Location: login.php"); 
}else{
	session_regenerate_id(true);
	$_SESSION['last_acted_on'] = time();
}
?>