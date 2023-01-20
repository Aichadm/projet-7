<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <!-- <h1>les instructions</h1> -->
    <!-- <?php



    $date=date("H");
    if($date<"10"){
        echo "bonjour";
    }elseif ($date< "20") {
        echo "bonne journee";
    } else {
        echo "bonsoir"; 
    }
     $txt="aicha ben ayad";
     $a=strlen($txt);
     if($a<5 )
     {
        print " tres petit";
     }
     elseif($a <10){
        print " bien";
     }else
     {
        print "tres long ";
     }
    ?> -->
    <!-- Les commutateur -->
  <!-- <?php
$color="vert";
switch($color){
    case "mouve":
        echo " bonjour ";
        break;
    case "vert":
        print "aicha";
        break;
    case " bleu":
        print " saif";
        break;

    default :
    echo "Aasmae";
} 
 ?> -->
     <!-- Les boucles  -->
     <!-- <?php 
    //  While = tant que
     $a=0;
     while( $a <10){
        print "le nombre est :$a  </br>";
        $a++;
     }
    $table= array("Aicha","Youssef","Saif","Aasmae","Nouh","Fahd");
    $b=0;
    while(isset($table[$b])){
        print "le nom numero $b : est  $table[$b] </br>";
        $b++;
    }
//    faire pendant que
$c=1;
 do{
    print "le nombre est : $c </br>";
    $c++;
}
while($c<10);


$d=0;
$tb=array("aicha","youssef","saif","aafrae","iissa");
do{
    echo "bonjour $tb[$d] </br>";
    $d++;
}
while(isset($tb[$d]));

// pour 
for($i=0;$i<10;$i++)
{
    print " le nombre est : $i </br>";
}
// foreach
$color=array("noir","blanc","jaune","vert","bleu","rouge");
foreach($color as $value)
{
    print " le color prefere est :$value </br>";
}
$color1=array("noir","blanc","jaune","vert","bleu","rouge");
$nom=array("aicha","youssef","ahmed","saif","ahlam","yassine");
foreach($color1 as $value)
{
    foreach($nom as $nm){
        echo " je suis $nm </br>";
        break;
        $nm++;
    }
    print "le color prefere est :$value </br>";
}
$age=array("aicha"=>"23","youssef"=>"22","saif"=>"3","aasmae"=>" 1");
foreach($age as $nom=>$g)
{
    echo " je suis $nom et j'ai $g </br>";
}
?> -->
 <!-- les fonctions -->
<!-- <?php 
 function bonjour(){
    echo " bonjour tout le monde ";
 }
 bonjour();
 echo "</br>";
 function nom(){
    $table=array("aicha","youssef"," saif"," aafrae");
    foreach( $table as $value){
        print " je te presente : $value </br>";
        $value++;
    }
 }
 nom();
 echo "</br>";
 function inscription( ){
    $age=0;
    
        if(26<$age){
            print "vous etes accepte";
        }
        else{
            print "vous n'etes pas accepte";
        }
    }
 inscription();
 print " </br>";
 function somme(int $z,int $u){
    return $z + $u;
 }
//    print somme(3,5) =(print " 3 + 5 =".somme(3 ,5). "</br>";)
print " 3 + 5 =".somme(3 ,5). "</br>";
print " 5 + 5 =".somme(5 ,5). "</br>";
print " 3 + 10 =".somme(3 ,10). "</br>";
print " </br>";
function sommee(float $r,float $p):float{
   return $r + $p;
}
   print sommee(3.5,5.9);
?> -->
<!-- les tableaux -->
<?php 
// $nom=array("aicha","youssef","saif","aasmae");
// print " je suis .$nom[0]. et .$nom[1].  et .$nom[2]. et .$nom[3]. </br>";
// $cc= count($nom);
// for ($x =0;$x<$cc;$x++){
//     print $nom[$x];
//     echo "</br>";
// }
// print $cc;
$tbb=array ("aicha"=>"19","youssef"=>"15","saif"=>"30","aasmae"=>"23");
print " je suis aicha et j'ai ".$tbb['aicha']." ans </br>";
foreach($tbb as $s=>$value)
{
    print" $s : $value </br>";
}


?>


</body>
</html>