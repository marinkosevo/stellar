<?php
$heading = get_field('heading');
$desc = get_field('description');
$reviews = get_field('reviews');
?>
<div class="bg-secondary px-[20px] py-[48px] md:py-[80px] lg:py-[120px] md:px-[40px] relative">
    <div class="max-w-[1216px] mx-auto">
        <img class="absolute lg:left-[112px] md:left-[20px] top-[48px] left-[12px] md:top-[64px] opacity-30" src="<?= get_template_directory_uri() . '/assets/images/ap.png' ?>" alt="">
        <div class=" flex flex-col gap-[32px] lg:grid lg:grid-cols-2">
            <div class="flex flex-col gap-[8px]">
                <?php if ($heading): ?>
                    <h1 class="text-[30px] md:text-lg lg:text-xl font-[Inter-Bold] ">
                        <?= $heading ?>
                    </h1>
                <?php endif; ?>
                <?php if ($desc): ?>
                    <p class="text-sm font-sans">
                        <?= $desc ?>
                    </p>
                <?php endif; ?>
            </div>
            <?php if ($reviews): ?>
                <?php foreach ($reviews as $review): ?>
                    <div class="bg-white p-[32px] rounded-[8px] z-2 flex flex-col gap-[32px]">
                        <?php if ($review['icon']): ?>
                            <img class="w-[112px] h-[32px] object-contain object-left" src="<?= $review['icon']['url'] ?>" alt="">
                        <?php endif; ?>
                        <div class="flex flex-row">
                            <div class="w-fit">
                                <img class='h-[16px] pr-[16px]'
                                    src="<?= get_template_directory_uri() . '/assets/images/ap.png' ?>" alt="">
                            </div>
                            <div>
                                <?php if ($review['description']): ?>
                                    <h1 class="text-base">
                                        <?= $review['description'] ?>
                                    </h1>
                                <?php endif; ?>
                                <div>
                                    <?php if ($review['author']): ?>
                                        <span class="text-base font-[Inter-Bold] text-dark block">
                                            <?= $review['author'] ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if ($review['role']): ?>
                                        <span class="text-sm font-sans text-[#6B7280] block">
                                            <?= $review['role'] ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>