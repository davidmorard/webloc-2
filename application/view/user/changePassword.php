<div class="container">
	

	<!-- echo out the system feedback (error and success messages) -->
	<?php $this->renderFeedbackMessages(); ?>


	<div class="row">
		<div class="col s12">
			<div class="card darken-1">
				<div class="card-content">
					<span class="card-title">Modifiez votre mot de passe</span>

					<form method="post" action="<?php echo Config::get('URL'); ?>user/changePassword_action" name="new_password_form">

						<label for="change_input_password_current">
							Saisissez votre mot de passe actuel :
						</label>
						<p>
							<input id="change_input_password_current" class="reset_input" type='password' name='user_password_current' pattern=".{6,}" required autocomplete="off"/>
						</p>
						<label for="change_input_password_new">
							Saisissez votre nouveau mot de passe (au moins 6 caractères) :
						</label>
						<p>
							<input id="change_input_password_new" class="reset_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
						</p>
						<label for="change_input_password_repeat">
							Répéter votre nouveau mot de passe :
						</label>
						<p>
							<input id="change_input_password_repeat" class="reset_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
						</p>
						<input class="waves-effect waves-light btn" type="submit" name="submit_new_password" value="Validez" />
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
