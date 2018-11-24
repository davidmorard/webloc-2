<div class="container">
	<h1>Initialisez votre mot de passe</h1>
	<div class="box">

		<!-- echo out the system feedback (error and success messages) -->
		<?php $this->renderFeedbackMessages(); ?>

		<!-- request password reset form box -->
		<form method="post" action="<?php echo Config::get('URL'); ?>login/requestPasswordReset_action">
			<label for="user_name_or_email">
				Indiquez votre pseudo ou votre email et vous recevrez des indications par email :
				<input type="text" name="user_name_or_email" required />
			</label>

			<!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
			<img id="captcha" src="<?php echo Config::get('URL'); ?>register/showCaptcha" /><br/>
			<input type="text" name="captcha" placeholder="Recopiez ce que vous lisez" required />

			<!-- quick & dirty captcha reloader -->
			<a href="#" style="display: block; font-size: 11px; margin: 5px 0 15px 0;"
			onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>register/showCaptcha?' + Math.random(); return false">Changez d'image</a>

			<p class="right-align">
				<input class="waves-effect waves-light btn" type="submit" value="Envoyez-moi un nouveau mot de passe" />
			</p>

			

		</form>

	</div>
</div>
