<?php
// Commencer la  session1
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session </title>
</head>
<body>
<?php
// modifier  variables1 session 
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>
<?php
// Echo variables session  
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>
<?php
print_r($_SESSION);
?>
<?php
// changer la variable session 
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

<?php
// supprimer les variables sessions 
session_unset();

// supprimeer la session
session_destroy();
?>
</body>
</html>