<html>
<head>
<link rel="stylesheet" href="style.css" />
<title>Resultat</title></head>
<body>
<?php
if(!empty($_POST['rnom'])){
$rech=$_POST['rnom'];}
elseif(!empty($_POST['rnumero'])){
$rech=$_POST['rnumero'];}
else{
$rech=$_POST['remail'];}









$Fichier = "fichier.txt";
$resultat="";
$nb=0;
if (is_file($Fichier)) {
if ($TabFich = file($Fichier)) {
for($i = 0; $i < count($TabFich); $i++){
if(strstr($TabFich[$i],"*".$rech."*")){
$nb++;
$resultat.=$TabFich[$i];        
                             }


}
echo $nb." resultat(s) trouve(s)<br/>";
?>
 <table border="1" width="300" height="30"><tr><td><?php echo $resultat ;?> </td></tr></table> 
<?php
}


else {echo "Le fichier ne peut être lu...<br>";}}
else {echo "Désolé le fichier n'est pas valide<br> " ;}



?>
</body>
</html>