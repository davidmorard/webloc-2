<div class="container">

	<div>
		<div class="row">
			<div class="col s12">
				<div class="card-panel teal">
					<h3><?= $this->user_name; ?> </h3>
					<p>Votre email : <?= $this->user_email; ?></p>
					<p>
						<?php if (Config::get('USE_GRAVATAR')) { ?>
							<img src='<?= $this->user_gravatar_image_url; ?>' />
						<?php } else { ?>
							<img src='<?= $this->user_avatar_file; ?>' />
						<?php } ?>
					</p>
				</div>
			</div>
		</div>


		<!-- echo out the system feedback (error and success messages) -->
		<?php $this->renderFeedbackMessages(); ?>

	</div>
</div>
