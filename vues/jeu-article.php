<article class="jeu" id="<?php echo $i ?>">

	<div class="row">
		<div class="col-md-6">
			<h1><?php echo $jeux[$i]->titre ?></h1>
		</div> 
		<div class="col-md-6 infos-article">
			par <b><?php echo $jeux[$i]->auteur ?></b> le <b><?php echo $jeux[$i]->date ?></b>
		</div> 
	</div>

	<div class="row">
		<div class="col-md-12">
			<img src="<?php echo $jeux[$i]->image ?>" alt="description-jeu">
			<p><?php echo $jeux[$i]->description ?></p>
			<hr/>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-tags">
			<ul class="tags">
			<?php $count_tags = count($jeux[$i]->tags);
			for ($j = 0; $j < $count_tags ; $j++) : ?>
				<li><a href="#" class="tag"><?php echo $jeux[$i]->tags[$j] ?></a></li>
			<?php endfor; ?>
			</ul>
		</div>
		<div class="col-md-4 col-note">
			<?php for ($j = 0; $j < 5 ; $j++) : ?>
				<?php if($j < $jeux[$i]->note ): ?>
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<?php else: ?>
					<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				<?php endif; ?>
			<?php endfor; ?>
		</div>
		<div class="col-md-4 col-commentaires">
			<a class="btn-collapse" role="button" data-toggle="collapse" href="#collapse<?php echo $i ?>" aria-expanded="false" aria-controls="collapse<?php echo $i ?>">
				<?php echo $count_commentaires = count($jeux[$i]->commentaires) ?> commentaire<?php if($count_commentaires > 1) echo 's' ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="collapse" id="collapse<?php echo $i ?>">
				<div class="well">
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