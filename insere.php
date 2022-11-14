<?php
session_start();
error_reporting(0);
//connexion au SGBDMysql.
$connexion=mysql_connect('localhost','root','');
//selection de la BD
mysql_select_db('clubelit_bd',$connexion);
//connexion a la base........
//include('connexion.php');
//Insertion
$nom_etudiant=isset($_POST['nom_etudiant'])? $_POST['nom_etudiant']:'';
$prenom_etudiant=isset($_POST['prenom_etudiant'])? $_POST['prenom_etudiant']:'';
$classe_etudiant=isset($_POST['classe_etudiant'])? $_POST['classe_etudiant']:'';
$filiere_etudiant=isset($_POST['filiere_etudiant'])? $_POST['filiere_etudiant']:'';

/*$envoyer=isset($_POST['envoyer'])? $_POST['envoyer']:'';
if($envoyer=="envoyer")*/
{$sql="Insert into etudiant
values('','$nom_etudiant','$prenom_etudian','$classe_etudiant','$filiere_etudiant')";
mysql_query($sql);
}

/*session_start();
error_reporting(0);
//connexion au SGBDMysql.
$connexion=mysql_connect('localhost','root','');
//selection de la BD
mysql_select_db('clubelit_bd',$connexion);
//connexion a la base........*/
//Insertion
$montant_cotisation=isset($_POST['montant_cotisation'])? $_POST['montant_cotisation']:'';
$date_cotisation=isset($_POST['date_cotisation'])? $_POST['date_cotisation']:'';

/*$envoyer=isset($_POST['envoyer'])? $_POST['envoyer']:'';
if($envoyer=="envoyer")*/

$id_inserer=mysql_insert_id();
{$sql_cotisation="Insert into cotisation 
values('','$montant_cotisation','$date_cotisation','".$id_inserer."')";
mysql_query($sql_cotisation)or die('Erreur SQL !'.$sql_cotisation.'<br>'.mysql_error());
}
  
echo '<p align="center"><strong>Votre message a ete envoyer merci...</strong></p>';

//retour a la page formulaire

echo '<p align="center"><strong><a href="index.php">Retour sur la page Accueil </a></strong>
</p>';
  
  
  
  
?>