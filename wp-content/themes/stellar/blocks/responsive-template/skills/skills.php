<?php
$heading = get_field('heading');
$skills = get_field('skills');
?>
<div class="bg-white dark:bg-[#000] pb-[140px] md:pb-[200px]">
    <div
        class='lg:max-w-[1530px] mx-auto px-[22px] md:px-[80px] lg:px-[100px]'>
        <h1 class="font-[Anton] text-[64px] text-[#292929] uppercase pb-[50px] dark:text-white">
            <?= $heading ?>
        </h1>
        <?php
        if ($skills): ?>
            <div class="flex flex-col lg:grid lg:grid-cols-2 gap-[30px]">
                <?php
                foreach ($skills as $skill): ?>
                    <div
                        class="flex flex-col md:flex-row gap-[20px] border border-[#292929] dark:border-white rounded-[10px] pt-[40px] pl-[40px] pr-[50px] pb-[60px]">
                        <div class="relative flex- flex-col w-fit h-fit">
                            <span
                                class="absolute flex items-center justify-center inset-0  text-center font-[Anton] text-[#292929] dark:text-white text-[36px]">
                                <?= $skill['percent'] ?>%
                            </span>
                            <img class=' object-cover' src="<?= $skill['image']['url'] ?>" alt="">
                        </div>
                        <div class="flex flex-col gap-[20px] md:my-auto">
                            <h1 class="text-[36px] font-[Anton] dark:text-white">
                                <?= $skill['heading'] ?>
                            </h1>
                            <p class="text-[20px] text-center md:text-left dark:text-white">
                                <?= $skill['description'] ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>