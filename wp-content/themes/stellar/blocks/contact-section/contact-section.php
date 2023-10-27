<?php
$heading = get_field('heading');
$left_side = get_field('left_side');
$right_side = get_field('right_side');
$socials = $left_side['social'];
$inputs = $right_side['input'];

if ($heading):
    ?>
    <div class="pt-[42px] px-[24px] text-center md:text-left pb-[86px] max-w-[1280px] mx-auto flex flex-col gap-[24px]">
        <h1 class="text-[32px]  font-semibold"> 
            <?= $heading ?>
        </h1>
    <?php endif;
if ($left_side): ?>
        <div class="flex flex-col md:flex-row gap-[142px]">
            <div class="flex flex-col">
                <p class="text-[17px]">
                    <?= $left_side['description'] ?>
                </p>
                <?php if ($socials): ?>
                    <div class="flex flex-row gap-[24px] mt-[42px]">
                        <?php
                        foreach ($socials as $social):
                            ?>
                            <img class='w-[36px] h-[36px] object-scale-down'onclick="location.href= '<?= $social['link'] ?>'" src="<?= $social['image']['url'] ?>" alt="">
                            </img>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex flex-col gap-[24px]">
                <div class="flex flex-col gap-[10px]">
                <?php if ($inputs):
                    foreach ($inputs as $input): ?>
                    <input class='bg-[#F3F3F3] py-[16px] px-[24px] 'placeholder="<?=$input['placeholder'] ?>" type="<?= $input['type']?>"> </input> 

                    <?php endforeach; endif; ?>
                    </div>
                <button class="bg-[#2D2D2D] text-white py-[24px] px-[64px] w-wrap"><?=$right_side['button'] ?></button>
            </div>
        </div>
    <?php endif; ?>
</div>