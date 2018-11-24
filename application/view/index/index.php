<div class="container">
	<div>

		<!-- echo out the system feedback (error and success messages) -->
		<?php $this->renderFeedbackMessages(); ?>

		<div class="row">
			
			<div class="row">
				<div class="col s12">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title">Gérez des hébergements en location de courte durée.</span>
						</div>
						
					</div>
				</div>
			</div>


			<div class="col s12">
				<div class="card">
					<div class="card-image">
						<img src="https://www.web-loc.com/images/hand-shake.jpg">
						<span class="card-title">Gérez des hébergements en location de courte durée.</span>
					</div>
					<div class="card-content">
						<p>Vous avez de la disponiblité.</p>
						<p>Vous souhaitez augmenter vos revenus.</p>
					</div>
					<div class="card-action">
						<a href="<?php echo Config::get('URL'); ?>login/index">devenez réceptionniste</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>