<div class="container">

	<!-- echo out the system feedback (error and success messages) -->
	<?php $this->renderFeedbackMessages(); ?>

	<div>
		<div>

			<!-- login box on left side -->
			<div>
				<h2>Identifiez-vous</h2>
				<div>
					<form action="<?php echo Config::get('URL'); ?>login/login" method="post">
						<div class="row">
							<div class="col s12">
								<div class="row">
									<div class="input-field col s12">
										<i class="material-icons prefix">t</i>
										<input type="text" name="user_name" placeholder="Pseudo ou email" required class="autocomplete" />
										<label for="autocomplete-input"></label>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col s12">
								<div class="row">
									<div class="input-field col s12">
										<i class="material-icons prefix">t</i>
										<input type="password" name="user_password" placeholder="Mot de passe" required />
										<label for="autocomplete-input"></label>
									</div>
								</div>
							</div>
						</div>







						
						<label for="set_remember_me_cookie">
							<input type="checkbox" name="set_remember_me_cookie"/>
							Se souvenir de moi pendant 2 semaines
						</label>
                            <!-- when a user navigates to a page that's only accessible for logged a logged-in user, then
                                 the user is sent to this page here, also having the page he/she came from in the URL parameter
                                 (have a look). This "where did you came from" value is put into this form to sent the user back
                                 there after being logged in successfully.
                                 Simple but powerful feature, big thanks to @tysonlist. -->
                                 <?php if (!empty($this->redirect)) { ?>
                                 	<input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
                                 <?php } ?>
        					<!--
        						set CSRF token in login form, although sending fake login requests mightn't be interesting gap here.
        						If you want to get deeper, check these answers:
        							1. natevw's http://stackoverflow.com/questions/6412813/do-login-forms-need-tokens-against-csrf-attacks?rq=1
        							2. http://stackoverflow.com/questions/15602473/is-csrf-protection-necessary-on-a-sign-up-form?lq=1
        							3. http://stackoverflow.com/questions/13667437/how-to-add-csrf-token-to-login-form?lq=1
        						-->
        						<input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
        						<input type="submit" value="Log in"/>
        					</form>
        				</div>
        				<div>
        					<a href="<?php echo Config::get('URL'); ?>login/requestPasswordReset">I forgot my password</a>
        				</div>
        			</div>

        			<!-- register box on right side -->
        			<div>
        				<h2>No account yet ?</h2>
        				<a href="<?php echo Config::get('URL'); ?>register/index">Register</a>
        			</div>

        		</div>
        	</div>
        </div>


         <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="public/js/materialize.min.js"></script>
