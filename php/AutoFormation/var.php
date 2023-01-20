<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> les variables </title>
</head>
<body>

<!-- les variables  -->
 <?php
// $txt="bonjour tout le monde";
// $a=5;
// $z=4;
// echo " je suis aicha $txt </br>" ;
// echo "je suis aicha" .$txt. "! </br>";
// echo "$a </br>" ;
// echo "$z </br>";
// echo $a + $z;
// ?> -->
 <!-- la methode echo et print -->
 <!-- <?php
// $tx="bonjour tout le monde";
// $x=5;
// $y=5;
// echo " je suis aicha $tx </br>" ;
// print "je suis aicha" .$txt. "! </br>";
// print "$x </br>" ;
// echo "$y </br>";
// echo $x + $y ;
// print $x + $y;
// ?> -->
 <!-- les chaines -->
  <?php 
// print strlen("bonjour tout le monde ");  NOMBRE DES CHAINES AVEC ESPACE
// print strlen("bonjourtoutlemonde "); NOMBRE DES CHAINES AVEC ESPACE
// echo str_word_count("bonjour tout le monde ");  NOMBRE DES NOMS 
// echo str_word_count("bonjourtoutlmonde"); NOMBRE DES NOMS 
// echo "bonjour </br>";
// echo strrev("bonjour");
// print strpos("je suis aicha","aicha"); le nomrbre des chanps avant le mot detecter avec espace
// print strpos("aicha je","je");
// echo str_replace("monde","youssef","bonjour monde"); remplace le mot monde par youssef
//  $a=1234;
//  $b=122.12;
//  var_dump(is_int($a)); return true si le nombre est entier
//  var_dump(is_int($b)); return false si le nombre est reel 
// var_dump(is_float($b));     return true si le nombre est reel
// var_dump(is_float($a));     return false si le nombre est entier
// $g=12e555;
// var_dump($g);             return le type de donnee => float(infini);
// $p=acos(8);
// var_dump($p);        return => float(NaN);
// $r="1234";
// $t="123"+14;
// $txt="aicha";
// $nn="122.12";
// var_dump(is_numeric($a)); return true=> donc le nombre est entier
// echo "</br>";
// var_dump(is_numeric($r));  return true=> donc le nombre est entier
// echo "</br>";
// var_dump(is_numeric($t));  return true=> donc le nombre est entier
// echo "</br>";
// var_dump(is_numeric($txt));  return false=> donc le nombre n est pas entier
// $cast_int=(int)$b;
// $cast_intt=(int)$nn;
// $cast_inttt=(int)$txt;
// echo $cast_int;
// echo "</br>";
// print $cast_intt;
// echo "</br>";
// print $cast_inttt
?> 
<!-- Les constantes  -->
<?php
// define("AICHA","bonjour tout le monde");
// echo AICHA;
// define("YOUSSEF","je suis aicha",true);
// echo YOUSSEF;
// define("voiture",["MERCEDES","AUDI","BMW","POURCHE"]);
// echo voiture[1];  //return type de variable plus son chemain => voiture =Array de chaines
?>
<!-- Les operateurs  -->
<?php
$a =12;
$b=2;
echo $a+$b;
print "</br>";
echo $a-$b;
print "</br>";
echo $a*$b;
print "</br>";
echo $a/$b;
?>

</body>
</html>