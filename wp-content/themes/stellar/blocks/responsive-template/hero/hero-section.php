<?php
$left = get_field('left');
$image = get_field('image');
$socials = $left['social'];
?>
<div class="bg-white dark:bg-[#000] ">
    <div
        class="flex gap-[20px] flex-row bg-white lg:px-[100px] dark:bg-[#000] pt-[60px] max-w-[1530px] mx-auto">
        <div class="flex flex-row mx-auto  pt-[42px] ">
            <div class="max-w-[370px] md:max-w-[660px]">
                <?php if ($left['heading']): ?>
                    <h1
                        class="text-[#292929] dark:text-white text-center text-[110px] md:text-[200px] leading-[99%] tracking-[-3.3px] mb-[10px]">
                        <?= $left['heading'] ?>
                    </h1>
                <?php endif; ?>

                <?php if ($left['subheading']): ?>
                    <h2
                        class="bg-gradient-to-r from-pink-600 to-yellow-500 text-transparent bg-clip-text text-[58px] md:text-[104px] tracking-[-1.92px] text-center mb-[70px]">
                        <?= $left['subheading'] ?>
                    </h2>
                <?php endif; ?>

                <?php if ($socials):
                    ?>
                    <div class="flex flex-row justify-between mx-auto overflow-hidden mb-[40px]">
                        <?php
                        foreach ($socials as $social):
                            ?>
                            <div class="border p-[6px] border-[gray] rounded-md">
                                <a href="<?= $social['link']['url'] ?>" target="_blank">
                                    <?php if ($social['icon_light']): ?>
                                        <img class='flex dark:hidden w-[40px] h-[40px]' src="<?= $social['icon_light']['url'] ?>"
                                            alt="" srcset="">
                                    <?php endif;
                                    if ($social['icon_dark']): ?>
                                        <img class='hidden dark:flex w-[40px] h-[40px]' src="<?= $social['icon_dark']['url'] ?>"
                                            alt="" srcset="">
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if ($left['button']): ?>
                    <a href="<?= $left['button']['url'] ?>">
                        <button class="bg-[#292929] text-white py-[16px] px-[32px] mx-auto w-full mb-[41px]">
                            <?= $left['button']['title'] ?>
                        </button>
                    </a>
                <?php endif; ?>
            </div>
            <div class="flex w-[160px] items-start hidden lg:flex">
                <img class='flex dark:hidden object-contain'
                    src="<?= get_template_directory_uri() . '/assets/images/Portal.png' ?>" alt="">
                <img class='hidden dark:flex object-contain '
                    src="<?= get_template_directory_uri() . '/assets/images/Portal_light.png' ?>" alt="">
            </div>
        </div>
        <div class="hidden lg:flex">
            <img class='object-cover' src="<?= $image['url'] ?>" alt="">
        </div>

    </div>
</div>