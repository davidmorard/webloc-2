<!doctype html>
<html>
<head>
    <title>Webloc l'application qui simplifie la location</title>
    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css" />
    <script type="text/javascript" href="<?php echo Config::get('URL'); ?>js/materialize.min.js"></script>
</head>
<!-- wrapper, to center website -->

<div class="container">
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo hide-on-med-and-down">Webloc</a>

                <ul id="nav-mobile" class="right ">
                    <li <?php if (View::checkForActiveController($filename, "index")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>index/index">
                            Accueil
                        </a>
                    </li>


                    <!--<li <?php if (View::checkForActiveController($filename, "profile")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>profile/index">
                            Profiles
                        </a>
                    </li>-->
                    
                    <?php if (Session::userIsLoggedIn()) { ?>

                        <li <?php if (View::checkForActiveController($filename, "dashboard")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo Config::get('URL'); ?>dashboard/index">
                                Mission
                            </a>
                        </li>


                        <li <?php if (View::checkForActiveController($filename, "note")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo Config::get('URL'); ?>note/index">
                                Code postaux
                            </a>
                        </li>
                    <?php } else { ?>
                        <!-- for not logged in users -->
                        <li <?php if (View::checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo Config::get('URL'); ?>login/index">
                                Connexion
                            </a>
                        </li>
                        <li <?php if (View::checkForActiveControllerAndAction($filename, "register/index")) { echo ' class="active" '; } ?> >
                            <a href="<?php echo Config::get('URL'); ?>register/index">
                                Inscription
                            </a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </nav>


        <!-- navigation -->


        <!-- my account -->
        
        <div class="collection">  
            <ul>
                <?php if (Session::userIsLoggedIn()) : ?>
                    <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                        <a href="<?php echo Config::get('URL'); ?>user/index" class="collection-item">
                            Mon compte
                        </a>
                        <ul>
                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                <a href="<?php echo Config::get('URL'); ?>user/changeUserRole" class="collection-item">
                                    Changez de type de compte
                                </a>
                            </li>
                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                <a href="<?php echo Config::get('URL'); ?>user/editAvatar" class="collection-item">
                                    Modifiez votre photo
                                </a>
                            </li>
                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                <a href="<?php echo Config::get('URL'); ?>user/editusername" class="collection-item">
                                    Modifiez votre pseudo
                                </a>
                            </li>
                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                <a href="<?php echo Config::get('URL'); ?>user/edituseremail" class="collection-item">
                                    Modifiez votre email
                                </a>
                            </li>
                            <li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
                                <a href="<?php echo Config::get('URL'); ?>user/changePassword" class="collection-item">
                                    Modifiez votre mot de passe
                                </a>
                            </li>
                            <li <?php if (View::checkForActiveController($filename, "login")) { echo ' class="active" '; } ?> >
                                <a href="<?php echo Config::get('URL'); ?>login/logout" class="collection-item">
                                    Déconnexion
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php if (Session::get("user_account_type") == 7) : ?>
                        <li <?php if (View::checkForActiveController($filename, "admin")) {
                            echo ' class="active" ';
                        } ?> >
                        <a href="<?php echo Config::get('URL'); ?>admin/" class="collection-item">
                            Admin
                        </a>
                        </li><?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>

        </div>
    </header>
</div>

