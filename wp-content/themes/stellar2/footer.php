<?php
$curYear = date('Y');
wp_footer() ?>
<div class="bg-black px-[20px] md:px-[40px] py-[40px] md:py-[64px]">
    <div class="max-w-[1216px] mx-auto flex flex-col md:flex-row justify-between">
        <div class="flex flex-col text-white gap-[24px]">
            <img class="h-[32px] object-contain object-left"
                src="<?= get_template_directory_uri() . '/assets/images/Logo.png' ?>" alt="">
            <div class="flex flex-col gap-[12px] font-sans">
                <div class="flex flex-row gap-[24px] text-sm">
                    <span>Download</span>
                    <span>License</span>
                </div>
                <nav class="[&_ul]:flex [&_ul]:flex-row [&_ul]:gap-[24px] text-sm">
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
                </nav>
                <span class="text-[14px] font-sans text-[#D1D5DB]">©
                    <?= $curYear ?> Landify UI Kit. All rights reserved
                </span>
            </div>

        </div>
        <div class="flex flex-col gap-[16px] text-sm font-sans text-white">
            <p class="font-sans">Get the app</p>
            <img class="w-[135px] h-[40px] object-contain"
                src="<?= get_template_directory_uri() . '/assets/images/Google badge.png' ?>" alt="">
            <img class='w-[135px] h-[40px] object-contain'
                src="<?= get_template_directory_uri() . '/assets/images/Store badge.png' ?>" alt="">
        </div>
    </div>
</div>
</body>

</html>