<div class="container">

	<div class="row">
		<div class="col s12">
			<div class="card darken-1">
				<div class="card-content">
					<span class="card-title">Modifiez le code postal</span>
					<?php $this->renderFeedbackMessages(); ?>

					<?php if ($this->note) { ?>
						<form method="post" action="<?php echo Config::get('URL'); ?>note/editSave">
							<label>Indiquez le nouveau code postal</label>
							<!-- we use htmlentities() here to prevent user input with " etc. break the HTML -->
							<input type="hidden" name="note_id" value="<?php echo htmlentities($this->note->note_id); ?>" />
							<input type="text" name="note_text" value="<?php echo htmlentities($this->note->note_text); ?>" />
							<input class="waves-effect waves-light btn" type="submit" value='Validez' />
						</form>
					<?php } else { ?>
						<p>Ce code n'existe pas.</p>
					<?php } ?>
				</div>
				
			</div>
		</div>
	</div>

</div>
