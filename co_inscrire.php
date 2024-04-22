<?php
//connexin à la base de donnée

$serveur = "localhost";
$utilisateur = "root";
$mot_de_pass = "";
$base_donnee = "utilisateur";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_pass, $base_donnee);
//verification de laconnexion

if ($connexion -> connect_error) {
   die("echec de la connexion: " . $connexion -> connect_error);
}

//recuperation des donnees

$Nom = $_POST['nom'];
$Email = $_POST['email'];
$Mot_de_passe = $_POST['password'];
$Numero_de_téléphone = $_POST['Numéro de téléphone'];
$Role = $_POST['Rôle'];

$sql = "INSERT INTO utilisateur (nom,email,mot_de_passe,numero_de_téléphone,Rôle) VALUES ('$nom','$email','$mot_de_passe','$Numero_de_téléphone,'$Role')";

if ($connexion->query($sql) === TRUE) {
   header("location: index.php");
   exit();
}
  else {
   echo "Erreur : " . $sql . "<br>" . $connexion ->error ;
}
//fermeture de laconnection
$connexion -> close();
?>