<?php
$about = get_field('about');
?>

<div class="bg-white dark:bg-[#000] pt-[144px] md:pt-[200px] pb-[112px] md:pb-[280px] gap-0 lg:pb-[335px]">
    <div
        class="flex flex-col lg:max-w-[1530px] px-[24px] md:px-[42px] lg:px-[96px] mx-auto font-['Gotham'] font-black text-[24px] md:text-[30px] lg:text-[36px] dark:text-white">
        <h1 class="font-[Anton] text-[64px] uppercase">About Me</h1>
        <?php if ($about):
            foreach ($about as $part):
                if ($part['orientation'] == 'left'): ?>
                    <div class="flex flex-col justify-between md:flex-row">
                        <div class="flex flex-1 flex-col justify-between">
                            <p class="flex pb-[24px] md:pr-[128px] my-auto">
                                <?= $part['paragraph'] ?>
                            </p>
                        </div>
                        <img class='object-cover flex-1' src="<?= $part['image']['url'] ?>" alt="">

                    </div>
                <?php else: ?>
                    <div class="flex flex-col justify-between md:flex-row-reverse">
                        <div class="flex flex-1 flex-col justify-between">
                            <p class="flex pb-[24px] md:pl-[128px] my-auto text-right">
                                <?= $part['paragraph'] ?>
                            </p>
                        </div>
                        <img class='object-cover flex-1' src="<?= $part['image']['url'] ?>" alt="">

                    </div>
                <?php endif; ?>

            <?php endforeach; endif; ?>
    </div>
</div>