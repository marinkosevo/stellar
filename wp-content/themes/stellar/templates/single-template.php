<?php
/**
 * Template Name: Single Template
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

    <?php
    $hero = get_field('hero');
    $image= $hero['left_side']['gallery_cover'];
    var_dump($image);
    $size = 'full';
    if ($hero) : ?>
        <div id="hero">
            <div class="left-side">
            <img src="<?php echo $image; ?>" />

            <p><?php echo ($hero['left_side']['gallery_cover']); ?></p>
          <?php  echo wp_get_attachment_image( $hero['left_side']['gallery_cover'], $size ); ?>
            </div>

            <div class="right-side">
                <h1><?php echo esc_html($hero['right_side']['heading']); ?></h1>
            </div>
        </div>

    <?php endif; ?>

<?php endwhile; else : ?>

<?php endif; ?>

<?php get_footer(); ?>
