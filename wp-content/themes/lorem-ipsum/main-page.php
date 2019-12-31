<?php
/*
Template Name: Main page
*/


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
        <div class="modal" id="form-popup">
            <div class="modal-dialog">
            <div class="modal-content">
            <h2>Skontaktuj się z nami!</h2>
            <p>Oddzwonimy w ciągu 24 godzin</p>
            <?php dynamic_sidebar('modal'); ?>
                </div></div>
        </div>
        <div class="main-site-content">
            <h1><?php the_field('naglowek'); ?></h1>
            <p><?php the_field('tekst_informacyjny'); ?></p>
            <button id="open-popup" data-toggle="modal" data-target="#form-popup">
                <?php the_field('button_cta'); ?>
            </button>
        </div>

		</main><!-- #main -->
        
	</div><!-- #primary -->


<?php
get_footer();
