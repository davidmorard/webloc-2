<div class="container">
	

	<!-- echo out the system feedback (error and success messages) -->
	<?php $this->renderFeedbackMessages(); ?>


	<div class="row">
		<div class="col s12">
			<div class="card darken-1">
				<div class="card-content">
					<span class="card-title">Modifiez votre email</span>
					<form action="<?php echo Config::get('URL'); ?>user/editUserEmail_action" method="post">
						<label>
							Inscrivez votre nouvel email : <input type="text" name="user_email" required />
						</label>
						
							<input class="waves-effect waves-light btn" type="submit" value="Validez" />
					</form>		
				</div>
			</div>
		</div>
	</div>






</div>
