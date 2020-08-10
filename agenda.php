<?php
$etatcivil = $_POST['EtatCivil'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$tel = $_POST['telephone'];
date_default_timezone_set("Europe/Paris");
setlocale(LC_TIME, "fr");
$jour = strftime("%A %d %B %Y");
$heure = date("H:i:s");
echo "Aujourd'hui, nous sommes le ", $jour , " et il est ", $heure ,'<br>';
echo "Bonjour $etatcivil $prenom $nom, merci d'avoir remplit ce formulaire.",'<br>';
$chaine = "$etatcivil $prenom $nom $tel $jour $heure\r\n";
$fp=fopen("agenda2.txt","a+");
fwrite($fp,$chaine);
fclose($fp);
?>