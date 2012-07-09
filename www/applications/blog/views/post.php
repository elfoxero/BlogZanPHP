<div class="row form-actions">
	<div class="show pull-right">
		<a class="btn" href="<?php echo path("blog/"); ?>">Volver al inicio inicio</a>
	</div>
</div>
<div class="blog">
	<p class="title">
		<h2><?php echo $post["Title"]; ?></h2><br />
		Publicado <?php echo howLong($post["Start_Date"]); ?> por <?php echo $post["Author"]; ?> en <?php echo exploding($post["Tags"], "blog/tag/"); ?>
	</p>

	<p>
		<?php echo $post["Content"]; ?>
	</p>
</div>