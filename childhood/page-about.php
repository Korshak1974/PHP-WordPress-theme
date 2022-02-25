<?php
/*
Template Name: О нас
*/
?>

<?php
   get_header();
?>


<div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-1">
                        <div class="about__img">
                            <img src="<?php the_field('about_img'); ?>" alt="про компанию">
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 col-xl-5 offset-xl-1">
                        <h1 class="title underlined"><?php the_field('about_title');?></h1>
                        <div class="about__text">
                        <?php the_field('about_descr'); ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>












<?php
   get_footer();
?>