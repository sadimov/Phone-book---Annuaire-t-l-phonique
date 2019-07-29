<?php
if((!empty($_POST['nom']))AND(!empty($_POST['numero']))AND(!empty($_POST['email']))){
$nom=$_POST['nom'];
$numero=$_POST['numero'];
$email=$_POST['email'];
$fp = fopen("fichier.txt","a"); // ouverture du fichier en écriture
fputs($fp, "\n"); // on va a la ligne


if(strlen($nom)>=20){
$nom1=substr($nom ,21);
fputs($fp, "|*".$nom1."*|"); // on écrit le nom et email dans le fichier
 }
 else{
fputs($fp, "|*".$nom."*");
for($i=0;$i<(20-strlen($nom));$i++){fputs($fp, "_");}

 }
 
 
if(strlen($numero)>=15){
$numero1=substr($numero ,16);
fputs($fp, "|*".$numero1."*|"); // on écrit le nom et email dans le fichier
 }
 else{
fputs($fp, "|*".$numero."*");
for($i=0;$i<(15-strlen($numero));$i++){fputs($fp, "_");}

 } 
 
 
 if(strlen($email)>=30){
$email1=substr($email ,31);
fputs($fp, "|*".$email1."*|"); // on écrit le nom et email dans le fichier
 }
 else{
fputs($fp, "|*".$email."*");
for($i=0;$i<(30-strlen($email));$i++){fputs($fp, "_");}
fputs($fp, "|");
 }
fputs($fp, "\n");
fputs($fp, "|______________________|_________________|________________________________|");
echo "L'utilisateur a ete cree:<br/>";
echo "_________________________________________________________________________<br/>";
echo "|*".$nom."*_____________|*".$numero."*_____|*".$email."*__________________|<br/>";
echo "|______________________|_________________|________________________________|<br/>";
}
else {echo "Veuillez remplir tous les champs !!!";}
?>