<?php
    /**
    * Template Name: Single Template
    */
?>  

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>


<?php
$hero = get_field('hero');
if ($hero): ?>
    <div id="hero">
        <div class="left-side">
            <img src="<?php echo esc_url($hero['left_side']['gallery_cover']['url']); ?>"
                 alt="<?php echo esc_attr($hero['left_side']['gallery_cover']['alt']); ?>" />

        </div>
        <div class="right-side">
            <h1><?php echo esc_html($hero['right_side']['heading']); ?></h1>
        </div>
    </div>
  
<?php endif; ?>

<?php endwhile;else:?>




<?php  endif; ?>


<?php get_footer(); ?>
