<?php 
$cookie_nom="user";
$cookie_value="aicha";
setcookie($cookie_nom,$cookie_value,time()+(86400*1),"/");
// 86400= 1 jour 
$cookie_noM="user";
$cookie_valuE="youssef";
setcookie($cookie_noM,$cookie_valuE,time()+(86400*1),"/");
// 86400= 1 jour 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les formulaires</title>
</head>
<body>
     <!-- methode POST -->
    <form action="forms.php" method="post">
        nom:<input type="text" name="aicha" /></br></br>
        prenom:<input type="text" name="ben" /></br></br>
        <input type="submit" />
    </form>
    bonjour <?php echo $_POST["aicha"]; ?><br>
ton prenom est : <?php echo $_POST["ben"]; ?>
  <!-- methode GET -->
 <form action="forms.php" method="get">
    Nom:<input type="text" name="youssef" /></br></br>
    Prenom:<input type="text" name="tai" /></br></br>
    <input type="submit" /></br></br> -->
    Bonjour:<?php print $_GET['youssef']; ?></br></br>
    Ton prenom est :<?php echo $_GET['tai']; ?> </br></br>

</form> 
  <!-- les cookies -->
<?php 
if(!isset($_COOKIE[$cookie_nom])){
    echo "le nom de cookies '" .$cookie_nom."' est non modifie ! </br>";
}
else
{
    echo " cookie est '" .$cookie_nom."'est modifie <br>";
    echo " la valeur est :" .$_COOKIE[$cookie_nom];
}
echo " </br>";
if(!isset($_COOKIE[$cookie_noM])){
    echo "le nom de cookies '" .$cookie_noM."' est non modifie ! </br>";
}
else
{
    echo " cookie est '" .$cookie_noM."'est modifie <br>";
    echo " la valeur est :" .$_COOKIE[$cookie_noM];
}
?>

</body>
</html>