<div class="container">

	<!-- echo out the system feedback (error and success messages) -->
	<?php $this->renderFeedbackMessages(); ?>


	<div class="row">
		<div class="col s12">
			<div class="card darken-1">
				<div class="card-content">
					<span class="card-title">Mettez à jour votre type de compte</span>
					<p>Cliquez sur le bouton pour modifier votre statut.</p>
				</div>
				<div class="card-action">
					<form action="<?php echo Config::get('URL'); ?>user/changeUserRole_action" method="post">
						<?php if (Session::get('user_account_type') == 1) { ?>
							<input class="waves-effect waves-light btn" type="submit" name="user_account_upgrade" value="Vous êtes réceptionniste, cliquez pour devenir logeur" />
						<?php } else if (Session::get('user_account_type') == 2) { ?>
							<input class="waves-effect waves-light btn" type="submit" name="user_account_downgrade" value="Vous êtes logeur, cliquez pour devenir réceptionniste" />
						<?php } ?>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--
	<div>


		<p>Votre compte est de type : <?php echo Session::get('user_account_type'); ?></p>-->
		<!-- basic implementation for two account types: type 1 and type 2 -->
	<!--	
	</div> -->
</div>
