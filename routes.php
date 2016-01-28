<?php

if(isset($_GET['page']) && !empty($_GET['page'])){
	if($_GET['page'] == 'home'){
		//home
		require 'controleurs/home.php';
	}
	elseif($_GET['page'] == 'jeu'){
		//jeu
		require 'controleurs/jeu.php';
	}else{
		//404
		require 'controleurs/404.php';

	}
}
else{
	//home
	require 'controleurs/home.php';
}