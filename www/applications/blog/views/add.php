<div class="row form-actions">
	<div class="show pull-right">
		<a class="btn" href="<?php echo path("blog/"); ?>">Volver al inicio</a>
	</div>
</div>
<form action="" method="post">
	<fieldset>
		<p>
			<?php echo ($alert ? $alert : NULL); ?>
		</p>
		<p>
			Título: <br />
			<input name="title" type="text" value="<?php echo recoverPOST("title"); ?>" />
		</p>

		<p>
			Contenido: <br />
			<textarea name="content" rows="10" cols="20"><?php echo recoverPOST("content"); ?></textarea>
		</p>

		<p>
			Autor: <br />
			<input name="author" type="text" value="<?php echo recoverPOST("author"); ?>" />
		</p>

		<p>
			Tags: <br />
			<input name="tags" type="text" value="<?php echo recoverPOST("tags"); ?>" />
		</p>

		<p>
			<input name="save" value="Guardar" type="submit" />
		</p>
	</fieldset>
</form>