<?php
$heading = get_field('heading');
$desc = get_field('description');
$top_phone = get_field('top_phone');
$bottom_phone = get_field('bottom_phone');
$google = get_field('google_link');
$ios = get_field('ios_link');
?>
<div class="bg-secondarylight px-[20px] md:px-[40px]">
    <div class="max-w-[1216px] mx-auto lg:flex-row flex flex-col">
        <div class="flex flex-col gap-[48px] pt-[48px] md:pt-[80px] lg:py-[111px] pb-[32px] flex-1">
            <div class="">
                <?php if ($heading): ?>
                    <h1 class="text-[30px] md:text-lg lg:text-xl font-['Inter-Black'] text-dark">
                        <?= $heading ?>
                    </h1>
                <?php endif; ?>
                <?php if ($desc): ?>
                    <p class="text-sm md:text-md font-sans text-dark">
                        <?= $desc ?>
                    </p>
                <?php endif; ?>
            </div>
            <div class="flex flex-col gap-[8px]">
                <span class="font-sans">Get the app</span>
                <div class="flex flex-row gap-[12px]">
                    <?php if ($google): ?>
                        <a href="<?= $google['url'] ?>">
                            <img src="<?= get_template_directory_uri() . '/assets/images/Google badge.png' ?>" alt="">
                        </a>
                    <?php endif; ?>
                    <?php if ($ios): ?>
                        <a href="<?= $ios['url'] ?>">
                            <img src="<?= get_template_directory_uri() . '/assets/images/Store badge.png' ?>" alt="">
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <div class="flex flex-col pt-[32px] lg:pt-0 gap-[40px] md:flex-row flex-1">
            <div class="mx-auto ">
                <img class="" src="<?= $top_phone['url'] ?>" alt="">
            </div>
            <div class="mx-auto flex items-end ">
                <img class='' src="<?= $bottom_phone['url'] ?>" alt="">
            </div>
        </div>
    </div>

</div>