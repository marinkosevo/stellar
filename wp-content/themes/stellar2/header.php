<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stellar 2</title>
    <?php wp_head() ?>
</head>

<body>
    <div class="px-[20px] md:px-[40px] font-sans font-bold text-[14px]">
        <div class="max-w-[1216px] mx-auto flex flex-row justify-between py-[24px]">
            <div class="flex flex-row gap-[32px] justify-evenly">
                <img class='object-contain' src="<?= get_template_directory_uri() . '/assets/images/Logo.png' ?>"
                    alt="">
                <nav class="py-[8px] pl-[40px] w-full [&_ul]:flex [&_ul]:flex-row [&_ul]:gap-[16px] font-sans hidden lg:flex">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                </nav>
            </div>
            <div class="flex flex-row gap-[32px]">
                <div class="flex-row gap-[12px] hidden md:flex">
                    <img src="<?= get_template_directory_uri() . '/assets/images/Google badge.png' ?>" alt="">
                    <img src="<?= get_template_directory_uri() . '/assets/images/Store badge.png' ?>" alt="">
                </div>
                <div class="flex lg:hidden">
                    <img class="object-contain"
                        src="<?= get_template_directory_uri() . '/assets/images/Essential icon.png' ?>" alt="">
                </div>
            </div>

        </div>


    </div>