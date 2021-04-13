<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package puzzle-agency
 */

get_header();
?>

<!-- Блок с паралаксом-->
<?php 
// visibility chech
$visibility = get_field('background_visibility');
if($visibility=='true' ){
?>
<section class="paralax-block">
    <div class="paralax-overlay" style="opacity: <?php the_field('b1-background_opacity'); ?>;background-color: <?php the_field('b1-background_overlay'); ?>;"></div>
    <div style="background-image:url(<?php the_field('b1-background_image'); ?>)"
        class="paralax-wrapper">
        <div class="paralax-inner">
            <h1 class="paralax-tittle">
            <?php the_field('b1-background_text'); ?>
            </h1> 
            <?php if( get_field('b1-background_subtext') ): ?>
            <p class="text-paralax">
            <?php the_field('b1-background_subtext'); ?>
                        </p> 
            <?php endif; ?>
                            
        </div>
    </div>
</section>
<?}?>
<!-- Блок с паралаксом конец-->





	<main id="primary"  class="site-main container">


    <div class="container mt-5">
     
        //Страница проекта</div>

		<?php
        echo the_content();
        
		while ( have_posts() ) :
			the_post();
           
           
			//get_template_part( 'template-parts/content', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->


	<section class="project-pagination" id="project-pagination">
            <div class="container ">
                <hr>
                <div class="row justify-content-between">

				

<?php
$next_post = get_next_post();
$prev_post = get_previous_post();
if( ! empty($prev_post) ){
	?>
	<div class="col-md-3 text-left project-pagination-item"> 
		<a href="<?php echo get_permalink( $prev_post ); ?>">← <?php echo esc_html($prev_post->post_title); ?></a>
	</div>
	<?php
}
if( ! empty($next_post) ){
	?>
  	<div class="col-md-3 text-right project-pagination-item">
		<a href="<?php echo get_permalink( $next_post ); ?>"><?php echo esc_html($next_post->post_title); ?>  →</a>
	</div>
	<?php
}

?>

                    
                   

                </div>
            </div>


        </section>



<?php

get_footer();
