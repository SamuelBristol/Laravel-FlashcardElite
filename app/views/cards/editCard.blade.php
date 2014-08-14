<h2>Edit A Card</h2>
<form action="/updateCard" method="post">
	<label for="fc_name">*Flashcard Title:</label>
	<input id="fc_name" name="fc_name" value="<?= $fc_name ?>" />
	<label for="fc_desc">*Description:</label>
	<textarea id="fc_desc" name="fc_desc"><?= $fc_desc ?></textarea>
	<input type="hidden" name="fc_id" value="<?= $fc_id ?>" />
	<input type="submit" />
</form>