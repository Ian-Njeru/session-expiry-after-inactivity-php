<!DOCTYPE html>
<html>

  <head>
    <title>LMS</title>
    <link rel="stylesheet" href="#">
  </head>

  <body>
  <?php include "loginScript.php" ;?>
    <form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
      <p>
        Login
      </p>
      <label for="name">
        <span style=color:red>*</span>Name
		</label>
        <input type="text" name="name" id="name">
      
      <label for="password">
        <span style=color:red>*</span>Password
		</label>
        <input type="password" name="password" name="password" id="password">
		<input type="checkbox" onclick="myFunction()">Show Password
      
      <input type="submit" name ="next" value="Next">
    </form>
	<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
  </body>

</html>