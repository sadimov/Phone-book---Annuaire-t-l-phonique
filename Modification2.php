<html>
<head>
<link rel="stylesheet" href="style.css" />
<title>Modification</title></head>
<body>
<?php
$nouveau=$_GET['resultat'];

$fp = fopen("fichier.txt","a");


fputs($fp, "\n");
fputs($fp, $nouveau);
fputs($fp, "|______________________|_________________|________________________________|");
echo "L'utilisateur a ete modifie en: <br/>";
?>
<table border="1" width="300" height="30"><tr><td><?php echo $nouveau ;?> </td></tr></table>






</body>
<html>