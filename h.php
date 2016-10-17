<?php
$bdd = new PDO('mysql:host=localhost;dbname=user', 'root','salmaan1');
$reponse = $bdd->query('SELECT * FROM register');
while ($donnees = $reponse->fetch()) {
  # code...
  echo '<p>'. $donnees[user_name]. '-'.$donnees[user_age].'</p>';
}


 ?>
