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
        $heroimage = $hero['left_side']['gallery_cover'];
        $gallery_images = $hero['left_side']['gallery_content'];
        $size = 'full';
        $benefits = $hero['right_side']['benefits'];
        $upgrades = $hero['right_side']['upgrades'];
        if ($hero) : ?>
            <div id="hero" class="hero">
                <div class="hero__wrapper flex flex-row pt-11">
                    <div class="left-side w-4/6">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide w-full"><img src="<?php echo $heroimage; ?>" /></div>
                                <?php
                                if ($gallery_images) {
                                    foreach ($gallery_images as $photo) {
                                        echo '<div class="swiper-slide">';

                                        echo '<img src="' . $photo['url'] . '" />';
                                        echo '</div>';
                                    }
                                }
                                ?>
                            </div>
                            <div class="swiper-button-next text-base"></div>
                            <div class="swiper-button-prev text-sm"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper flex-row [&_img]:w-20">
                                <div class="swiper-slide"><img src="<?php echo $heroimage; ?>" /></div>
                                <?php
                                if ($gallery_images) {
                                    foreach ($gallery_images as $photo) {
                                        echo '<div class="swiper-slide">';

                                        echo '<img src="' . $photo['url'] . '" />';
                                        echo '</div>';
                                    }
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                    <div class="right-side">
                        <div class="right-side__heading">
                            <h1><?php echo esc_html($hero['right_side']['heading']); ?></h1>
                            <div class="prices"><span>(Total Value: $<?php echo esc_html($hero['right_side']['price_before']) ?> )</span> <span>$ <?php echo esc_html($hero['right_side']['price_after'])?></span></div>
                            <div class="benefits">

                            <?php
                                if ($benefits) {
                                    foreach ($benefits as $benefit) {
                                        echo '<p class="benefit">'. $benefit['benefit'] . '</p>';

                                        
                                    }
                                }
                                ?>
                            </div>
                            <button class=""><?php echo esc_html($hero['right_side']['add_to_cart'])?></button>
                        </div>
                        <div class="right-side__upgrades">
                            <h1>Availible upgrades</h1>
                            <div class="swiper mySwiper3">
                            <div class="swiper-wrapper">
                                <?php
                                if ($upgrades) {
                                    foreach ($upgrades as $upgrade) {
                                        echo '<div class="swiper-slide">';

                                        echo '<img src="' . $upgrade['upgrade_image'] . '" />';
                                        echo '<p>'.$upgrade['upgrade_heading'] . '</p>';
                                        echo '<p>'.$upgrade['upgrade_price'] . '</p>';
                                        echo '</div>';
                                    }
                                }
                                ?>
                            </div>
                            <div class="swiper-button-next text-base"></div>
                            <div class="swiper-button-prev text-sm"></div>
                        </div>

                      
                        </div>
                        <div class="right-side__table"></div>

                    </div>
                </div>
            </div>

        <?php endif; ?>

    <?php endwhile;
else : ?>

<?php endif; ?>

<?php get_footer(); ?>