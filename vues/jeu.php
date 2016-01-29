<?php $count_jeux = count($jeux);
for ($i=0; $i < $count_jeux; $i++): ?>
	<article id="<?php echo $i ?>" style="background-color:blue">
		<h1><?php echo $jeux[$i]->titre ?></h1>
		<h2><?php echo $jeux[$i]->auteur ?></h2>
		<img src="<?php echo $jeux[$i]->image ?>" alt="description-jeu">
		<p><?php echo $jeux[$i]->description ?></p>

		<h2>N<?php $count_commentaires = count($jeux[$i]->commentaires);
		echo $count_commentaires; ?>
		<section>
		<?php for ($j=0; $j < $count_commentaires; $j++) : ?>
			<article style="background-color:green">
				<h3><?php echo $jeux[$i]->commentaires[$j]->date ?></h3>
				<h3><?php echo $jeux[$i]->commentaires[$j]->pseudo ?></h3>
				<p><?php echo $jeux[$i]->commentaires[$j]->note ?></p>
				<p><?php echo $jeux[$i]->commentaires[$j]->commentaire ?></p>
			</article>
		<?php endfor; ?>
		</section>
	</article> 
<?php endfor; ?>