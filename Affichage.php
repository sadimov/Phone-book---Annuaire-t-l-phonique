<html>
<head>
<link rel="stylesheet" href="style.css" />
<title>Modification</title></head>
<body>
<?php
if(isset($_POST['nom'])){
$nom=$_POST['nom'];
}

$Fichier = "fichier.txt";


if (is_file($Fichier)) {
if ($TabFich = file($Fichier)) {
for($i = 0; $i < count($TabFich); $i++){
if(strstr($TabFich[$i],"*".$nom."*")){
?>
<p>utilisateur trouve</p><br/>
<table border="1" width="300" height="30"><tr><td><?php echo $TabFich[$i] ;?> </td></tr></table>   
<?php                             }
/*else{
    echo "cet utilisateur n'existe pas";
    }*/
}


}


else {echo "Le fichier ne peut être lu...<br>";}}
else {echo "Désolé le fichier n'est pas valide<br> " ;}



?>

</body>
</html>