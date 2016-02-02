# Projet-GestionProjet

[![Codacy Badge](https://api.codacy.com/project/badge/grade/2721da5093ed4faa94c2d0ecec64cfb4)](https://www.codacy.com/app/konstantin-sidorenko/Projet-GestionProjet)
[![Gitter Chat](http://img.shields.io/badge/chat-online-brightgreen.svg)](https://gitter.im/thecampagnards/Projet-GestionProjet)

Projet de création d'un site pour la gestion de projet. Le site doit contenir une présentation de l'équipe et une présentation de jeux.

##Installation

Donner les droits ``` www-data ``` au dossier Projet-GestionProjet en effectuant la commande suivante : ``` sudo chown -R www-data:www-data Projet-GestionProjet ```.

##Administration

Vous pouvez ajouter des jeux et administrer les commentaires des jeux en éditant le fichier ``` data/jeu.json ```. Le json basic est sous la forme ci-dessous. 
```json
[{
	"titre": "mon titre",
	"description": "mon code html",
	"image": "le lien de mon image",
	"auteur": "l'auteur",
	"date": "la date",
	"note": "ma note",
	"tags": ["mon tag 1", "mon tag 2"],
	"commentaires": [{
		"pseudo": "le pseudo",
		"note": "la note",
		"commentaire": "le commentaire",
		"date": "la date du commentaire"
	}]
}] 
```

##Maquette

###Maquette des Jeux
![Maquette](https://github.com/thecampagnards/Projet-GestionProjet/blob/master/docs/maquettes/maquette_v6.png)
###Maquette de l'Equipe
![Maquette](https://github.com/thecampagnards/Projet-GestionProjet/blob/master/docs/maquettes/maquette_team_v1.png)
