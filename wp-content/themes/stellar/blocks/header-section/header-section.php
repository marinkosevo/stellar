<?php
$left_side = get_field('left_side');
$category = $left_side["category"];
$heading = $left_side['heading'];
$description = $left_side['description'];
$button_text = $left_side['button'];
$image = get_field('image');

?>
<div class="flex flex-row gap-[68px] py-[42px] px-[24px] justify-between max-w-[1280px] mx-auto">
    <div class="flex flex-col py-[16px] px-[32px]">
        <div class="flex flex-col gap-[24px]">

            <p class="text-[20px] font-semibold">
                <?= $category ?>
            </p>
            <h1 class="text-[60px] font-semibold">
                <?= $heading ?>
            </h1>
            <p class="text-[17px]">
                <?= $description ?>
            </p>
        </div>

        <button class="text-[20px] py-[24px] px-[64px] mt-[48px] bg-[#2D2D2D] w-fit text-white">
            <?= $button_text ?>
        </button>


    </div>
    <div class="px-[24px]">
        <img src="<?= $image['url'] ?>" alt="">
    </div>

</div>