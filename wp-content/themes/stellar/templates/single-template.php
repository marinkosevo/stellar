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
        $table = $hero['right_side']['table'];
        $rows = $table['row'];
        $total = $table['total'];

        if ($hero) : ?>
            <div id="hero" class="hero">
                <div class=" max-w-[1280px] w-full mx-auto hero__wrapper flex flex-row py-[30px] gap-[60px] ">
                    <div class="left-side w-4/6">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide w-full"><img class="object-cover" src="<?php echo $heroimage; ?>" /></div>
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
                            <div class="swiper-wrapper flex-row [&_img]:w-20 pt-2">
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
                    <div class="flex flex-col gap-5 mx:auto ">
                        <div class="w-[380px} flex flex-col gap-[16px] ">
                            <h1 class="text-lg"><?php echo esc_html($hero['right_side']['heading']); ?></h1>
                            <div class=""><span class="text-red-500 text-sm ">(Total Value: $<span class="line-through"><?php echo esc_html($hero['right_side']['price_before']) ?> </span>)</span> <span class=" text-base text-blue-600">$<?php echo esc_html($hero['right_side']['price_after']) ?></span></div>
                            <div class="flex flex-col gap-[8px]">

                                <?php
                                if ($benefits) :
                                    foreach ($benefits as $benefit) : ?>
                                        <p class="text-green-500 "> ✓ <?= $benefit['benefit'] ?></p>




                                <?php endforeach;
                                endif; ?>
                            </div>
                            <button class="w-full py-[16px] bg-blue-700 text-white rounded-lg"><?php echo esc_html($hero['right_side']['add_to_cart']) ?></button>
                        </div>
                        <div class="text-center flex flex-col gap-[23px]">
                            <div class="flex w-full items-center">
                                <div class="w-1/4 border-t border-gray-400 mr-auto"></div>
                                <h1 class="text-base text-[#586280]">Availible upgrades</h1>
                                <div class="w-1/4 border-t border-gray-400 ml-auto"></div>
                            </div>
                            <div class="swiper mySwiper3">
                                <div class="swiper-wrapper flex flex-row">
                                    <?php
                                    if ($upgrades) :
                                        foreach ($upgrades as $upgrade) : ?>

                                            <div class="swiper-slide flex w-[43%] flex-col py-[11px] px-[7px]">
                                                <img src="<?= $upgrade['upgrade_image']['url'] ?> " />
                                                <h1 class="text-left text-sm bold pt-[8px]"><?= $upgrade['upgrade_heading']; ?></h1>
                                                <p class="text-sm text-blue-600">+$<?= $upgrade['upgrade_price']; ?></p>
                                            </div>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </div>
                                <div class="swiper-button-next text-base"></div>
                                <div class="swiper-button-prev text-sm"></div>
                            </div>


                        </div>
                        <div class="flex w-full items-center">
                            <div class="w-1/4 border-t border-gray-400 mr-auto"></div>
                            <h1 class="text-base text-[#586280]">Our Prices Can’t Be Beat</h1>
                            <div class="w-1/4 border-t border-gray-400 ml-auto"></div>
                        </div>
                        <div class="right-side__table">


                            <table class="w-full border-gray-300 border-collapse rounded-lg text-[#586280]">


                                <tr class="bg-[#F5F7FC]">
                                    <td class="w-[83px] pl-[8px] py-[12px] border-[1px] border-gray-300 rounded-tl-xl"></td>
                                    <td class="w-[83px] pl-[8px] py-[12px] border-[1px] border-gray-300">Nectar</td>
                                    <td class="w-[83px] pl-[8px] py-[12px] border-[1px] border-gray-300">Comp1</td>
                                    <td class="w-[83px] pl-[8px] py-[12px] border-[1px] border-gray-300 rounded-tr-xl">Comp2</td>
                                </tr>
                                <?php
                                if ($table) :
                                    foreach ($rows as $row) : ?>

                                        <tr class="first:text-red-400">
                                            <td class="w-[83px] pl-[8px] py-[12px] border-x-[1px] border-gray-300"><?= $row['item'] ?></td>
                                            <td class="w-[83px] pl-[8px] py-[12px] border-x-[1px] border-gray-300"><?= $row['nectar'] ?></td>
                                            <td class="w-[83px] pl-[8px] py-[12px] border-x-[1px] border-gray-300"><?= $row['comp1'] ?></td>
                                            <td class="w-[83px] pl-[8px] py-[12px] border-x-[1px] border-gray-300"><?= $row['comp2'] ?></td>
                                        </tr>



                                    <?php
                                    endforeach; ?>
                                    <tr class="first:text-red-400">
                                        <td class="w-[83px] pl-[8px] py-[12px] border-[1px] border-gray-300"><?= $total['item'] ?></td>
                                        <td class="w-[83px] pl-[8px] py-[12px] border-[1px] border-gray-300"><?= $total['nectar'] ?></td>
                                        <td class="w-[83px] pl-[8px] py-[12px] border-[1px] border-gray-300"><?= $total['comp1'] ?></td>
                                        <td class="w-[83px] pl-[8px] py-[12px] border-[1px] border-gray-300"><?= $total['comp2'] ?></td>
                                    </tr>


                                <?php
                                endif;
                                ?>

                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <?php

            $image = get_field('image');
            $right_side = $image['right_side'];
            $features = $right_side['features'];


            ?>

            <div id="image" class="flex flex-row bg-blue-100">
                <div class="w-1/2">
                    <img class='mx-auto' src="<?= $image['cover_image'] ?>" />
                </div>
                <div class="w-1/2 pt-[103px] pb-[83px]">
                    <h1 class="text-[40px] text-[#133EBF] "><?= $right_side['heading'] ?></h1>
                    <h1 class="text-[40px] text-[#262B38] "><?= $right_side['dark_heading'] ?></h1>

                    <div class="features flex flex-col gap-[12px] pt-[30px] pb-[51px]">
                        <?php
                        if ($features) :
                            foreach ($features as $feature) : ?>
                                <div>
                                    <span><svg class="inline" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <path d="M11 2C9.21997 2 7.47991 2.52784 5.99987 3.51677C4.51983 4.50571 3.36628 5.91131 2.68509 7.55585C2.0039 9.20038 1.82567 11.01 2.17294 12.7558C2.5202 14.5016 3.37737 16.1053 4.63604 17.364C5.89471 18.6226 7.49836 19.4798 9.24419 19.8271C10.99 20.1743 12.7996 19.9961 14.4442 19.3149C16.0887 18.6337 17.4943 17.4802 18.4832 16.0001C19.4722 14.5201 20 12.78 20 11C19.9972 8.6139 19.0481 6.32631 17.3609 4.63908C15.6737 2.95185 13.3861 2.00276 11 2ZM15.2864 9.42405L10.209 14.2702C10.0799 14.393 9.90852 14.4615 9.73032 14.4615C9.55213 14.4615 9.38075 14.393 9.25166 14.2702L6.71364 11.8471C6.58105 11.7201 6.50429 11.5457 6.50022 11.3621C6.49616 11.1785 6.56512 11.0009 6.69197 10.8681C6.81881 10.7353 6.99317 10.6584 7.17673 10.6541C7.36029 10.6498 7.53806 10.7185 7.67098 10.8452L9.73032 12.8119L14.329 8.4221C14.4619 8.29542 14.6397 8.22668 14.8233 8.23098C15.0068 8.23528 15.1812 8.31226 15.308 8.44502C15.4349 8.57777 15.5038 8.75545 15.4998 8.93902C15.4957 9.12259 15.419 9.29704 15.2864 9.42405Z" fill="#133EBF" />
                                        </svg>


                                        <span class="text-base text-[#262B38]"><?= $feature['feature'] ?></span> <span class="text-base text-[#586280]"> <?= $feature['content'] ?> </span> </br>

                                </div>


                        <?php
                            endforeach;
                        endif ?>
                    </div>


                    <button class="bg-[#133EBF] text-white py-[17px] px-[32px] rounded-[200px]"> <?= $right_side['button'] ?></button>
                </div>
            </div>
            <div id="faq" class="pt-[100px] pb-[168px]">
                <?php
                $faq = get_field('faq');
                $questions = $faq['questions'];
                ?>

                <h1 class="text-center text-[45px] pb-[70px] text-[#262B38] "><?= $faq['faq_heading'] ?></h1>
                    <?php if ($questions) :
                        foreach ($questions as $question) : ?>
                            <div class="flex flex-row w-3/12 mx-auto border-b-[1px] border-gray-200 relative">
                                <h1 class="text-[#262B38] text-[16px] text-left py-[20px]"><?= $question['question'] ?></h1>
                                <i class="absolute top-1/2 transform -translate-y-1/2 right-0 fa-solid fa-chevron-down"></i>
                            </div>


                    <?php
                        endforeach;
                    endif ?>
            </div>


        <?php endif; ?>

    <?php endwhile;
else : ?>

<?php endif; ?>

<?php get_footer(); ?>