<?php
/**
 * Template Name: Product Grid
 *
 * @package _s
 */

get_header();
?>

	<main id="primary" class="site-main">

        <h1>Product Grid</h1>

        <div class="product-grid">
            <div>
                <img src="<?php echo get_template_directory_uri() . '/yum.png' ?>" />
                <div class="price">10</div>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . '/yum.png' ?>" />
                <div class="price">20</div>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . '/yum.png' ?>" />
                <div class="price">30</div>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . '/yum.png' ?>" />
                <div class="price">40</div>
            </div>
        </div>

	</main><!-- #main -->

<?php
get_footer();