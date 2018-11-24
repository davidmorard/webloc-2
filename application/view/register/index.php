<div class="container">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <!-- login box on left side -->
    <div>
        <h2>Créez votre compte</h2>

        <!-- register form -->
        <form method="post" action="<?php echo Config::get('URL'); ?>register/register_action">
            <!-- the user name input field uses a HTML5 pattern check -->
            <input type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="Votre pseudo" required />
            <input type="text" name="user_email" placeholder="Votre email" required />
            <input type="text" name="user_email_repeat" placeholder="Saisissez à nouveau votre email" required />
            <input type="password" name="user_password_new" pattern=".{6,}" placeholder="Votre mot de passe (au moins 6 caractères)" required autocomplete="off" />
            <input type="password" name="user_password_repeat" pattern=".{6,}" required placeholder="Saisissez à nouveau votre mot de passe" autocomplete="off" />

            <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
            <img id="captcha" src="<?php echo Config::get('URL'); ?>register/showCaptcha" />
            <input type="text" name="captcha" placeholder="Saisissez ce que vous lisez" required />

            <!-- quick & dirty captcha reloader -->
            <a href="#" style="display: block; font-size: 11px; margin: 5px 0 15px 0; text-align: center"
               onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>register/showCaptcha?' + Math.random(); return false">Changez d'image</a>
               <p class="right-align">
                   <input class="waves-effect waves-light btn" type="submit" value="Validez" />
               </p>

            
        </form>
    </div>
</div>

