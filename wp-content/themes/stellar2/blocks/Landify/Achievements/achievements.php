<?php
$heading = get_field('heading');
$desc = get_field('description');
$achievements = get_field('achievements');
?>
<div class="bg-white px-[20px] md:px-[40px] py-[48px] lg:py-[91px]">
    <div class="max-w-[1216px] mx-auto flex flex-col lg:flex-row gap-[48px] justify-between">
        <div class="flex flex-col flex-1 gap-[8px]">
            <?php if ($heading): ?>
                <h1 class="text-[30px] md:text-lg lg:text-xl text-dark font-sans">
                    <?= $heading ?>
                </h1>
            <?php endif; ?>
            <?php if ($desc): ?>
                <p class="text-sm text-dark font-sans">
                    <?= $desc ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if ($achievements): ?>
            <div class="flex flex-col gap-x-[32px] gap-y-[40px] md:grid md:grid-cols-2 flex-1">
                <?php foreach ($achievements as $achievement): ?>
                    <div class="flex flex-row gap-[16px]">
                        <?php if ($achievement['image']): ?>
                            <img class='w-[48px] h-[48px] object-contain' src="<?= $achievement['image']['url'] ?>" alt="">
                        <?php endif; ?>
                        <div>
                            <?php if ($achievement['heading']): ?>
                                <h1 class="text-[24px] font-['Inter-Black']">
                                    <?= $achievement['heading'] ?>
                                </h1>
                            <?php endif; ?>
                            <?php if ($achievement['description']): ?>
                                <p class="text-sm font-sans">
                                    <?= $achievement['description'] ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>