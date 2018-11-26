<div class="container">
	<div>

		<!-- echo out the system feedback (error and success messages) -->
		<?php $this->renderFeedbackMessages(); ?>

		<div class="row">
			<div class="col s12">
				<div class="card darken-1">
					<div class="card-content">
						<span class="card-title center-align">Simplifiez les locations de courte durée.</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col l6 s12">
                <div class="card">
                    <div class="card-image">
						<img src="https://www.web-loc.com/images/hand-shake.jpg">
						
						<span class="card-title"></span>
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

            <!-- Carte logeur -->
            <div class="col l6 s12">
                <div class="card">
                    <div class="card-image">
						<img src="https://www.web-loc.com/images/good-job.jpg">
						
						<span class="card-title"></span>
					</div>
					<div class="card-content">
						<p>Vous gérez des locations de meublés de tourisme.</p>
						<p>Vous n'avez pas le temps d'accueillir vos locataire.</p>
					</div>
					<div class="card-action">
						<a href="<?php echo Config::get('URL'); ?>login/index">Trouvez un réceptionniste</a>
					</div>
                </div>
            </div>

		</div>

	</div>
</div>