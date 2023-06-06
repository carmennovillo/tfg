<html>
<body>
Hola <?php echo $_POST["user"]; ?><br>
Tu contraseña es: <?php echo $_POST["password"]; ?>
</body>
</html>


<?php
$page='pages/home.php';

if (isset($_GET['page']))
{
  if (file_exists('pages/'.$_GET['page']))
    $page='pages/'.$_GET['page'];
}
?>
<a href="index.php?page=home.php">Home</a>&nbsp;-&nbsp;<a href="index.php?page=login.php">Login</a>
<?php
include ($page);
