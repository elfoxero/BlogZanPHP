<div class="row form-actions">
	<div class="show pull-right">
		<a class="btn" href="<?php echo path("blog/add/"); ?>">Agregar entrada</a>
	</div>
</div>
<div class="blog">
	<?php
		if (is_array($posts)) {
			foreach($posts as $post) {
			?>
				<p class="title">
					<h2><a href="<?php echo path("blog/" . $post['Slug']); ?>"><?php echo $post["Title"]; ?></a></h2><br />
					Publicado <?php echo howLong($post["Start_Date"]); ?> por <?php echo $post["Author"]; ?> en <?php echo exploding($post["Tags"], "blog/tag/"); ?>
				</p>

				<p>
					<?php echo $post["Content"]; ?>
				</p>
			<?php
			}
		}
	?>
</div>