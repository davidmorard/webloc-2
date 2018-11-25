<div class="container">
	

	<!-- echo out the system feedback (error and success messages) -->
	<?php $this->renderFeedbackMessages(); ?>

	<div class="row">
		<div class="col s12">
			<div class="card darken-1">
				<div class="card-content">
					<span class="card-title">Modifiez votre pseudo</span>



					<form action="<?php echo Config::get('URL'); ?>user/editUserName_action" method="post">
						<!-- btw http://stackoverflow.com/questions/774054/should-i-put-input-tag-inside-label-tag -->
						<label>
							Nouveau pseudo : <input type="text" name="user_name" required />
						</label>
						<!-- set CSRF token at the end of the form -->
						<input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
						<input class="waves-effect waves-light btn" type="submit" value="Submit" />
					</form>


				</div>
			</div>
		</div>
	</div>

</div>