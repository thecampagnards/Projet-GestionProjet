<div class="container-fluid">
	<div class="row">
		<!-- premier jeu -->
		<div class="col-md-12">
			<?php $i = 0; include 'vues/jeu-article.php' ?>
		</div>
		<!-- colonne de gauche -->
		<div class="col-md-6">
		<?php $count_jeux = count($jeux);
			for ($i=1; $i < $count_jeux; $i+=2) include 'vues/jeu-article.php' ?>
		</div>
		<!-- colonne de droite -->
		<div class="col-md-6">
			<?php for ($i=2; $i < $count_jeux; $i+=2) include 'vues/jeu-article.php' ?>
		</div>
	</div>
</div>