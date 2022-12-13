<article class="col border-line col-game-spacing">
	<article class="subtitle-row">
		<h2>Start new game</h2>
	</article>
	<article class="container-row form">
		<form method='post' class="form-content" action="index.php">
			<label for="photo">Upload photo <span class="optional right"> Optional </span></label>
			<input id="photo" type="file" name="photo"><br>
			<input type="hidden" name="template" id="" class="" value="1">
			<input type="submit" name="startNewGame" id="" value="START NEW GAME">
		</form>
		<article class="alert-spacing-error">
			<article class="alert"><span class="underline">Error uploading photo:</span> Verify size or type of file!!</article>
		</article>
	</article>
</article>