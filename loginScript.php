<?php
$servername = "localhost";
$user = "root";
$password = "";
$db_name = "sample";

$connect = mysqli_connect($servername, $user, $password, $db_name);
if(mysqli_connect_errno()){
	echo "Error: ". mysqli_error;
}

session_start();
// If form submitted, insert values into the database.
if (isset($_POST['name'])){
        // removes backslashes
	$name= stripslashes($_REQUEST['name']);
        //escapes special characters in a string
	$name = mysqli_real_escape_string($conn,$name);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	
	//Checking is user existing in the database or not
    $query = "SELECT * FROM login WHERE name = '$name' AND password='$password'";
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	if(mysqli_num_rows($result) > 0){
		while($rows = mysqli_fetch_assoc($result)){

	    $_SESSION['name'] = $name;
		
		$_SESSION['last_acted_on'] = time();
            // Redirect user to index.php
	    header("Location: homepage.php");
         }
		}
		else{
	echo "
<h3>Name or password is incorrect.</h3>";
	}
}
 ?>   