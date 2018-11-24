<div class="container">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="row">
        <div class="col s12">
            <div class="card darken-1">
                <div class="card-content">
                    <span class="card-title">
                        Modifiez votre photo
                    </span>

                    <p>
                        Sélectionnez une photo de votre ordinateur :
                    </p>

                    <form action="<?php echo Config::get('URL'); ?>user/uploadAvatar_action" method="post" enctype="multipart/form-data">
                        <p>
                                
                        </p>
                        <div class="card-action">
                            <input type="file" name="avatar_file" required />
                        </div>
                        
                        <!-- max size 5 MB (as many people directly upload high res pictures from their digital cameras) -->
                        <div class="card-action">
                            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                        
                            <input class="waves-effect waves-light btn" type="submit" value="Upload image" />
                        </div>
                        
                    </form>
                </div>

            </div>
            
        </div>
    </div>


    <div class="row">
        <div class="col s12">
            <div class="card darken-1">
                <div class="card-content">
                    <span class="card-title">
                        <a href="<?php echo Config::get('URL'); ?>user/deleteAvatar_action">Cliquez ici pour supprimer votre photo.</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
