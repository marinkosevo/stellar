<?php
$job = get_field('job');
$duplicates = get_field('duplicates');
$work = get_field('work');

?>
<div class="bg-white dark:bg-[#000] py-[78px] md:py-[236px] lg:py-[144px] px-[22px] md:px-[80px] lg:px-[100px]">
    <div
        class="lg:max-w-[1530px] flex flex-col md:flex-row gap-y-[144px] justify-between md:justify-between mx-auto bg-[#F6FFF6] dark:bg-[#000] px-[50px] py-[82px] border dark:border-[#646464]  rounded-[30px]">
        <?php if ($job): ?>
            <div class="text-center flex flex-col gap-[21px] overflow-x-auto">
                <?php if ($job['heading']): ?>
                    <h1 class="text-[#83E281] dark:text-[#C8FEC7] text-[64px]">
                        <?= $job['heading'] ?>
                    </h1>
                <?php endif; ?>
                <?php if ($job['subheading']): ?>
                    <h2 class="text-[#83E281] dark:text-[#C8FEC7] text-[22px]">
                        <?= $job['subheading'] ?>
                    </h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <img class='hidden lg:flex object-contain' src="<?= get_template_directory_uri() . '/assets/images/Dawn.png' ?>"
            alt="">
        <?php if ($duplicates): ?>
            <div class="text-center flex flex-col gap-[21px] overflow-x-auto">
                <?php if ($duplicates['heading']): ?>
                    <h1 class="text-[#83E281] dark:text-[#C8FEC7] text-[64px]">
                        <?= $duplicates['heading'] ?>
                    </h1>
                <?php endif; ?>
                <?php if ($duplicates['subheading']): ?>
                    <h2 class="text-[#83E281] dark:text-[#C8FEC7] text-[22px]">
                        <?= $duplicates['subheading'] ?>

                    </h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <img class='hidden lg:flex object-contain' src="<?= get_template_directory_uri() . '/assets/images/Dawn.png' ?>"
            alt="">
        <?php if ($work): ?>
            <div class="text-center flex flex-col gap-[21px] overflow-x-auto">
                <h1 class="text-[#83E281] dark:text-[#C8FEC7] text-[64px]">
                    <?php if ($work['heading']): ?>
                        <?= $work['heading'] ?>
                    </h1>
                <?php endif; ?>
                <?php if ($work['subheading']): ?>
                    <h2 class="text-[#83E281] dark:text-[#C8FEC7] text-[22px]">
                        <?= $work['subheading'] ?>
                    </h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>