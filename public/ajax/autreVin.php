<?php 

// On récupère le nom du von aléatoire affiché
$nomVinActuel = $_GET["nomVinActuel"];

// On se connecte à la base de données
$con = mysqli_connect("preprod.hetic.net","alanotre","laNOtr3458","alanotre");

//Requête faite à la base de données 
$query = 'SELECT * FROM wine WHERE wine_name!="'.$nomVinActuel.'" ORDER BY RAND() LIMIT 1';

// On récupère les informations sur le vin sous format json

$autreVin = $con->query($query);

$autreVin = $autreVin->fetch_object();

//on encode les résultats en json et on les renvoie à notre fonction en ajax
echo json_encode($autreVin);
?>