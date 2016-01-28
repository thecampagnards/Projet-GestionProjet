<?php

require 'inc/fonctions.php';

$jeux = json_decode(file_get_contents('data/jeu.json'));

require 'vues/jeu.php';