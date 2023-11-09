<?php
$heading = get_field('heading');
$portfolio = get_field('portfolio');
?>
<div class="bg-white dark:bg-[#000] px-[22px] md:px-[80px] lg:px-[100px] pb-[200px]">
    <div class="max-w-[386px] md:max-w-[864px] lg:max-w-[1530px] mx-auto flex flex-col gap-[36px]">
        <?php if ($heading): ?>
            <h1 class="text-[#000] font-['Anton'] dark:text-white text-[64px] uppercase">
                <?= $heading ?>
            </h1>
        <?php endif; ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-[30px] justify-between">
            <?php
            if ($portfolio):
                foreach ($portfolio as $project): ?>
                    <div class="flex flex-col gap-[23px] p-[30px] border border-black dark:border-white rounded-[10px]">
                        <img class="h-[200px] object-cover" src="<?= $project['image']['url'] ?>" alt="">
                        <div class="flex flex-col gap-[21px]">
                            <h1 class="text-[28px] font-['Gotham'] font-bold text-black dark:text-white">
                                <?= $project['heading'] ?>
                            </h1>
                            <?php if ($project['tags']): ?>
                                <div class="flex flex-row gap-[5px]">
                                    <?php foreach ($project['tags'] as $tag): ?>
                                        <span
                                            class="flex w-fit h-[100%] text-[#784DC7] bg-[#E9DFFC] border border-[#BE9FF6] rounded-[12px] text-[14px] py-[4px] px-[8px]">
                                            <?= $tag['tag'] ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <button class="bg-[#292929] text-white font-thin py-[12px] px-[24px]">
                            <?= $project['button'] ?>
                        </button>
                    </div>
                <?php endforeach; endif; ?>
        </div>
    </div>
</div>