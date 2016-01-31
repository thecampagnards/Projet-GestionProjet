<?php

require 'inc/fonctions.php';

//recuperation des jeux
$jeux = json_decode(file_get_contents('data/jeu.json'));

if(!empty($_POST)){
	if(isset($_POST['id']) && isset($_POST['pseudo']) && isset($_POST['note']) && isset($_POST['commentaire'])){
		$nb_commentaires = count($jeux[$_POST['id']]->commentaires);
		//ajout du commentaire
		$jeux[$_POST['id']]->commentaires[$nb_commentaires] = new stdClass();
		$jeux[$_POST['id']]->commentaires[$nb_commentaires]->pseudo = $_POST['pseudo'];
		$jeux[$_POST['id']]->commentaires[$nb_commentaires]->note = $_POST['note'];
		$jeux[$_POST['id']]->commentaires[$nb_commentaires]->commentaire = $_POST['commentaire'];
		$jeux[$_POST['id']]->commentaires[$nb_commentaires]->date = date('d/m/Y');
		//ecriture du fichier
		file_put_contents('data/jeu.json', json_encode($jeux));
	}
}

require 'vues/jeu.php';