<?php
$heading = get_field('heading');
$desc = get_field('description');
$benefits = get_field('benefits');
?>
<div class="bg-white px-[20px] md:px-[40px] ">
    <div class="py-[96px] flex flex-col gap-[64px] max-w-[1216px] mx-auto">
        <div class="text-center gap-[8px]">
            <?php if ($heading): ?>
                <h1 class="text-lg lg:text-xl font-sans font-[700] text-dark">
                    <?= $heading ?>
                </h1>
            <?php endif; ?>
            <?php if ($desc): ?>
                <p class="text-base text-dark">
                    <?= $desc ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if ($benefits): ?>
            <div
                class="flex flex-col gap-[48px] md:gap-[64px] md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-x-[30px] md:gap-y-[64px] text-center">
                <?php foreach ($benefits as $benefit): ?>
                    <div class="mx-auto">
                        <?php if ($benefit['image']): ?>
                            <img class="w-[32px] h-[32px] mx-auto object-contain object-center"
                                src="<?= $benefit['image']['url'] ?>" alt="">
                        <?php endif; ?>
                        <?php if ($benefit['heading']): ?>
                            <h1 class="text-[30px] font-sans font-[700] text-dark ">
                                <?= $benefit['heading'] ?>
                            </h1>
                        <?php endif; ?>
                        <?php if ($benefit['description']): ?>
                            <p class="text-sm font-sans text-dark">
                                <?= $benefit['description'] ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>