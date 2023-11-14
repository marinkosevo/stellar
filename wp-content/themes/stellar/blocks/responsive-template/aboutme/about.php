<?php
$intro = get_field('intro');
$learning = get_field('learning');
$end = get_field('end');
?>

<div class="bg-white dark:bg-[#000] pt-[144px] md:pt-[200px] pb-[112px] md:pb-[280px] gap-0 lg:pb-[335px]">
    <div
        class="flex flex-col gap-[48px] lg:max-w-[1530px] px-[24px] md:px-[42px] lg:px-[96px] mx-auto font-['Gotham'] font-black text-[24px] md:text-[30px] lg:text-[36px] dark:text-white">
        <div class="flex flex-col justify-between gap-[48px] md:flex-row">
            <div class="flex-1 flex flex-col justify-between ">
                <h1 class="font-[Anton] text-[64px] uppercase">About Me</h1>
                <p class="flex pb-[24px] md:pr-[128px]">
                    <?= $intro ?>
                </p>
            </div>
            <img class='object-cover flex-1' src="<?= get_template_directory_uri() . '/assets/images/dite2.png' ?>"
                alt="">

        </div>
        <div class="flex flex-1 flex-col gap-[48px] md:gap-0 md:flex-row-reverse md:text-right">
            <p class="flex self-center md:pl-[72px]">
                <?= $learning ?>
            </p>

            <img class="object-cover flex-1" src="<?= get_template_directory_uri() . '/assets/images/dite1.png' ?>"
                alt="">
        </div>
        <div class="flex flex-1 flex-col gap-[48px] md:gap-0 md:flex-row ">
            <p class="flex self-center md:pr-[124px]">
                <?= $end ?>
            </p>
            <img class="object-cover flex-1" src="<?= get_template_directory_uri() . '/assets/images/dite3.png' ?>"
                alt="">
        </div>
    </div>

</div>