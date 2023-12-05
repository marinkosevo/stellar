<?php
$heading = get_field('heading');
$desc = get_field('description');
$partners = get_field('logo');
?>
<div class="px-[20px] md:px-[40px] py-[40px] md:py-[80] lg:py-[90px]">
    <div class="flex flex-col md:flex-row gap-[16px] max-w-[1216px] mx-auto border-t border-gray-50">
        <div class="flex flex-col flex-1 gap-[8px] md:gap-[32px]">
            <?php if ($heading): ?>

                <h1 class="text-[30px] md:text-lg lg:text-xl font-sans font-[700] md:pt-[20px]">
                    <?= $heading ?>
                </h1>
            <?php endif; ?>
            <?php if ($desc): ?>
                <p class="text-sm md:text-base font-sans font-normal">
                    <?= $desc ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if ($partners): ?>
            <div class=" relative flex flex-col flex-1 lg:mx-[78px]">
                <img class='absolute -z-10 w-full object-contain'
                    src="<?= get_template_directory_uri() . '/assets/images/Vector.png' ?>" alt="">
                <div class="px-[28px] py-[24px] flex flex-wrap gap-[38px] lg:gap-[64px] justify-center">
                    <?php foreach ($partners as $partner): ?>
                        <a href="<?= $partner['link']['url'] ?>">
                            <img class='w-[40px] h-[40px] lg:w-[64px] lg:h-[64px] object-contain'
                                src="<?= $partner['logo']['url'] ?>" alt="">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>