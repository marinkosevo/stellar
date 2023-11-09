<?php
wp_head();
$left = get_field('left');
$image = get_field('image');
$socials = $left['social'];

?>
<div class="flex gap-[19px] font-['Anton'] flex-row bg-white lg:px-[100px] dark:bg-[#000] pt-[60px]">
    <div class="max-w-[1530px] flex flex-row mx-auto  pt-[42px]">
        <div class="max-w-[370px] md:max-w-[660px]">
            <h1
                class="text-[#292929] dark:text-white text-center text-[110px] md:text-[200px] leading-[99%] tracking-[-3.3px] mb-[10px]">
                <?= $left['heading'] ?>
            </h1>
            <h2
                class="bg-gradient-to-r  from-pink-600 to-yellow-500 text-transparent bg-clip-text  text-[58px] md:text-[104px] tracking-[-1.92px] text-center mb-[70px]">
                <?= $left['subheading'] ?>
            </h2>
            <?php if ($socials): ?>
                <div class="flex flex-row justify-between mx-auto overflow-hidden mb-[40px]">
                    <?php
                    ?>
                    <div class="border p-[6px] border-[gray] rounded-md">
                       <img class='flex dark:hidden'src="<?= get_template_directory_uri() . '/assets/images/Landing Light/Figma.png' ?>" alt="" srcset="">
                       <img class='hidden dark:flex' src="<?= get_template_directory_uri() . '/assets/images/Landing Dark/Figma.png' ?>" alt="" srcset="">

                    </div>
                    <div class="border p-[6px] border-[gray] rounded-md">
                    <img class='flex dark:hidden'src="<?= get_template_directory_uri() . '/assets/images/Landing Light/instagram.png' ?>" alt="" srcset="">
                       <img class='hidden dark:flex' src="<?= get_template_directory_uri() . '/assets/images/Landing Dark/instagram.png' ?>" alt="" srcset="">
                    </div>
                    <div class="border p-[6px] border-[gray] rounded-md">
                    <img class='flex dark:hidden'src="<?= get_template_directory_uri() . '/assets/images/Landing Light/linkedin.png' ?>" alt="" srcset="">
                       <img class='hidden dark:flex' src="<?= get_template_directory_uri() . '/assets/images/Landing Dark/linkedin.png' ?>" alt="" srcset="">
                    </div>
                    <div class="border p-[6px] border-[gray] rounded-md">
                    <img class='flex dark:hidden'src="<?= get_template_directory_uri() . '/assets/images/Landing Light/Medium Logo.png' ?>" alt="" srcset="">
                       <img class='hidden dark:flex' src="<?= get_template_directory_uri() . '/assets/images/Landing Dark/Medium Logo.png' ?>" alt="" srcset="">
                    </div>
                    <div class="border p-[6px] border-[gray] rounded-md">
                    <img class='flex dark:hidden'src="<?= get_template_directory_uri() . '/assets/images/Landing Light/telegram.png' ?>" alt="" srcset="">
                       <img class='hidden dark:flex' src="<?= get_template_directory_uri() . '/assets/images/Landing Dark/telegram.png' ?>" alt="" srcset="">
                    </div>
                    <div class="border p-[6px] border-[gray] rounded-md">
                    <img class='flex dark:hidden'src="<?= get_template_directory_uri() . '/assets/images/Landing Light/twitter.png' ?>" alt="" srcset="">
                       <img class='hidden dark:flex' src="<?= get_template_directory_uri() . '/assets/images/Landing Dark/twitter.png' ?>" alt="" srcset="">
                    </div>
                </div>
            <?php endif; ?>
            <button class="bg-[#292929] text-white py-[16px] px-[32px] mx-auto w-full mb-[41px]">Download Curiculum Vitae</button>



        </div>
        <div class="flex w-[160px] items-start hidden lg:flex">
            <img class='flex dark:hidden object-contain' src="<?=get_template_directory_uri() . '/assets/images/Portal.png'?>" alt="">
            <img class='hidden dark:flex object-contain ' src="<?=get_template_directory_uri() . '/assets/images/Portal_light.png'?>" alt="">

        </div>
    </div>
    <div class="hidden lg:flex">
        <img class='object-cover' src="<?= $image['url'] ?>" alt="">
    </div>

</div>