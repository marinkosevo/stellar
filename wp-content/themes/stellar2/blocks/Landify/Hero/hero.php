<?php
$left_side = get_field('left_side');
$image = get_field('image');
?>

<div class="font-sans px-[20px] md:px-[40px] relative font-sans">


    <div class="flex flex-col lg:flex-row mx-auto max-w-[1216px] ">
        <div class="absolute bg-primary opacity-30 -right-0 -top-0 -z-10 h-[406px] w-[406px] blur-3xl rounded-full">
        </div>
        <div class="absolute flex flex-row justify-between bottom-20">

        </div>
        <?php if ($left_side): ?>
            <div class="py-[40px] lg:pt-[96px] lg:pr-[48px]">
                <?php if ($left_side['heading']): ?>
                    <h1 class="mb-[16px] text-lg md:text-xl lg:text-xl2 font-sans font-[700]">
                        <?= $left_side['heading'] ?>
                    </h1>
                <?php endif;
                if ($left_side['description']):
                    ?>
                    <p class="mb-[32px] text-base">
                        <?= $left_side['description'] ?>
                    </p>
                <?php endif; ?>
                <div class="flex flex-row gap-[16px]">
                    <?php if ($left_side['left_button']): ?>
                        <a href="<?= $left_side['left_button']['url'] ?>">
                            <button class="py-[16px] px-[24px] bg-primary rounded-[8px] font-sans font-bold text-white text-sm">
                                <?= $left_side['left_button']['title'] ?>
                            </button>
                        </a>

                    <?php endif;
                    if ($left_side['right_button']): ?>
                        <a href="<?= $left_side['right_button']['url'] ?>">
                            <button class='py-[16px] px-[24px] font-sans font-bold text-sm text-primary'><img
                                    class='inline w-[24px] h-[24px]' src="<?= $left_side['icon']['url'] ?>" alt="">
                                <?= $left_side['right_button']['title'] ?>
                            </button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif;
        if ($image):
            ?>
            <div class="relative">
                <div
                    class="absolute hidden lg:block bg-secondarylight opacity-30 top-1/2 -right-20 -z-10 h-[168px] w-[168px] blur-3xl rounded-full">
                </div>
            </div>
            <img class='py-[40px] max-w-[320px] max-h-[640px] mx-auto lg:mx-0' src="<?= $image['url'] ?>" alt="">
            <div class="">
                <div class="absolute left-0 bottom-[15%] -z-10">
                    <img class='absolute top-20'
                        src="<?= get_template_directory_uri() . '/assets/images/Left Band 2.png' ?>" alt="">
                    <img class="" src="<?= get_template_directory_uri() . '/assets/images/Left Band 1.png' ?>" alt="">
                    <p></p>
                </div>
                <div class="absolute right-0 lg:bottom-[35%] md:bottom-[25%] bottom-[20%] -z-10">
                    <img class='absolute -bottom-2 right-0'
                        src="<?= get_template_directory_uri() . '/assets/images/Right Band 3.png' ?>" alt="">
                    <img class=''
                        src="<?= get_template_directory_uri() . '/assets/images/Right Band 2.png' ?>" alt="">
                    <img class='absolute right-10 -top-14' src="<?= get_template_directory_uri() . '/assets/images/Right Band 1.png' ?>" alt="">


                </div>
            </div>

        <?php endif; ?>
    </div>


</div>