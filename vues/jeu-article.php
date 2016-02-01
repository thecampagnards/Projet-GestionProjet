<article class="jeu" id="<?php echo $i ?>">
	<h1><?php echo $jeux[$i]->titre ?> <small><?php echo $jeux[$i]->auteur ?></small></h1>
	<img src="<?php echo $jeux[$i]->image ?>" alt="description-jeu">
	<p><?php echo $jeux[$i]->description ?></p>
	<?php $count_tags = count($jeux[$i]->tags);
	for ($j = 0; $j < $count_tags ; $j++) : ?>
	<span class="badge"><?php echo $jeux[$i]->tags[$j] ?></span>
<?php endfor; ?>
<div class="panel-group" id="accordion<?php echo $i ?>" role="tablist" aria-multiselectable="true">
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion<?php echo $i ?>" href="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="collapse<?php echo $i ?>">
					Commentaire : <span class="badge"><?php echo $count_commentaires = count($jeux[$i]->commentaires) ?></span>
				</a>
			</h4>
		</div>
		<div id="collapse<?php echo $i ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			<div class="panel-body">
				<?php for ($j = 0; $j < $count_commentaires ; $j++) : ?>
					<article style="background-color:green">
						<h3><?php echo $jeux[$i]->commentaires[$j]->pseudo ?> <small><?php echo $jeux[$i]->commentaires[$j]->date ?></small></h3>
						<p><?php echo $jeux[$i]->commentaires[$j]->note ?></p>
						<p><?php echo $jeux[$i]->commentaires[$j]->commentaire ?></p>
					</article>
				<?php endfor; ?>
				<form action="jeux#<?php echo $i ?>" method="post" accept-charset="utf-8" style="background-color:green">
					<input type="hidden" name="id" value="<?php echo $i ?>" required>
					<div class="form-group">
						<label for="pseudo">Pseudo:</label>
						<input class="form-control" type="text" name="pseudo" id="pseudo" value="" placeholder="Pseudo" required>
					</div>
					<div class="form-group">
						<label for="note">Note:</label>
						<input class="form-control" type="number" name="note" id="note" value="" placeholder="Note" required>
					</div>
					<div class="form-group">
						<label for="commentaire">Commentaire:</label>
						<textarea class="form-control" name="commentaire" id="commentaire" placeholder="Commentaire" required></textarea>
					</div>
					<button type="submit" class="btn btn-default">Commenter</button>
				</form>
			</div>
		</div>
	</div>
</div>
</article>