<html>
<head><title>Modification</title></head>
<body>
<?php
if(isset($_POST['nom'])){
$nom=$_POST['nom'];
}

$Fichier = "fichier.txt";
$File="";

if (is_file($Fichier)) {
if ($TabFich = file($Fichier)) {
for($i = 0; $i < count($TabFich); $i++){
if(strstr($TabFich[$i],"*".$nom."*")){

$resultat=$TabFich[$i];
$TabFich[$i+1]="";     
                             }
else{
    $File.=$TabFich[$i];
    }
}
$fp = fopen("fichier.txt","w");
fputs($fp, $File);
echo "L'utilisateur a ete supprime";
?>
 
<?php
}


else {echo "Le fichier ne peut être lu...<br>";}}
else {echo "Désolé le fichier n'est pas valide<br> " ;}



?>

</body>
</html>