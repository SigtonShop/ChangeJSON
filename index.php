<html>
<head></head>
<body>
<?php
if($_POST["sent"] == "yes"){
  echo "<div>We aren't quite ready</div>";
}
?>
To modify the order list, you will need to provide some authentication. Type the password that you were given below
<form action="index.php" method="post">
<input type="password" />

<button type="submit">Go!</button>
</form>
</body>
</html>
