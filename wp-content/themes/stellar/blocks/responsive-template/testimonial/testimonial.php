<?php
$heading = get_field('heading');
$desc = get_field('description');
$icon = get_field('icon');

?>

<div
    class="bg-gradient-to-r from-gray-400 dark:from-orange-600 to-orange-500 dark:to-pink-700 py-[97px] px-[22px] md:px-[80px] lg:px-[100px]">
    <div class="lg:max-w-[1094px] mx-auto text-center flex flex-col gap-[60px]">
        <?php if ($heading): ?>
            <h1 class="text-white text-[24px] md:text-[40px] lg:text-[48px] font-['Poppins'] font-bold">
                <?= $heading ?>
            </h1>
        <?php endif; ?>
        <?php if ($heading): ?>
            <p class="text-white text-[24px] md:text-[40px] lg:text-[48px] font-['Poppins'] italic">
                <?= $desc ?>
            </p>
        <?php endif; ?>
        <?php if ($icon): ?>
            <img class="mx-auto" src="<?= $icon['url'] ?>" alt="">
        <?php endif; ?>
    </div>
</div>