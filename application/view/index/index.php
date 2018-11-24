<div class="container">
	<h1>IndexController/index</h1>
	<div>

		<!-- echo out the system feedback (error and success messages) -->
		<?php $this->renderFeedbackMessages(); ?>

		<h3>What happens here ?</h3>
		<p>
			Alors peut-être ici c'est ok
		</p>
		<p>
			This is the homepage. As no real URL-route (like /register/index) is provided, the app uses the default
			controller and the default action, defined in application/config/config.php, by default it's
			IndexController and index()-method. So, the app will load application/controller/IndexController.php and
			run index() from that file. Easy. That index()-method (= the action) has just one line of code inside
			($this->view->render('index/index');) that loads application/view/index/index.php, which is basically
			this text you are reading right now.
		</p>
	</div>
	<div class="row">
		<div class="col s12 m6">
			<div class="card blue-grey darken-1">
				<div class="card-content white-text">
					<span class="card-title">Card Title</span>
					<p>I am a very simple card. I am good at containing small bits of information.
					I am convenient because I require little markup to use effectively.</p>
				</div>
				<div class="card-action">
					<a href="#">This is a link</a>
					<a href="#">This is a link</a>
				</div>
			</div>
		</div>
	</div>
</div>
