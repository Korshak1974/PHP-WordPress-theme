<?php
/*
Template Name: Наша история

*/
?>

<?php
get_header();

?>


<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('our_history_title', 2) ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                <?php the_field('our_history_first_title_text', 2) ?>
                </div>
                <div class="aboutus__text">
                <?php the_field('our_history_first_text', 2) ?>
                </div>
            </div>
            <div class="col-lg-6">
            <img class="specialists__img" src="<?php the_field('our_history_first_img');?>">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('our_history_second_img'); ?>">
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                <?php the_field('our_history_second_title_text', 2) ?>
                </div>
                <div class="aboutus__text">
                <?php the_field('our_history_second_text', 2) ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                <?php the_field('our_history_third_title_text', 2) ?>
                </div>
                <div class="aboutus__text">
                <?php the_field('our_history_third_text', 2) ?>
                </div>
            </div>
            <div class="col-lg-6">
            <img class="aboutus__img" src="<?php the_field('our_history_third_img'); ?>">
            </div>
        </div>
    </div>
</div>




<?php
get_footer();
