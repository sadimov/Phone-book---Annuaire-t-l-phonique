<html>
<head>
<link rel="stylesheet" href="table.css" />
<title>Modification</title></head>
<body>
<table border="1" width="600" height="30" align="center"><tr><td align="center">Tous les utilisateurs</td></tr></table> 
<?php
$Fichier = "fichier.txt";

if (is_file($Fichier)) {
if ($TabFich = file($Fichier)) {
for($i = 0; $i < count($TabFich); $i++){
if(strstr($TabFich[$i],"*")){

?>
<table border="1" width="600" height="30" align="center"><tr><td><?php echo $TabFich[$i] ;?> </td></tr></table>
<?php
}
}
}


else {echo "Le fichier ne peut être lu...<br>";}}
else {echo "Désolé le fichier n'est pas valide<br> " ;}



?>

</body>
</html>