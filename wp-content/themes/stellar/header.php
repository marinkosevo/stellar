<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stellar</title>
    <?php wp_head() ?>

</head>

<body>

    <header>
        <div class="header">
            <div class="header__wrapper flex justify-evenly sm:gap-3 pl-20	pr-32 py-5">
                <div class="header__mobile-menu sm:flex md:hidden" id="toggle-menu">
                    <img class="max-w-fit" width="28px" src="<?php bloginfo('template_directory'); ?>/assets/images/menu-icon.png" alt="">
                </div>
                <div class="header__logo items-start flex">
                    <img class="max-w-fit" width="146px" height="24px" src="<?php bloginfo('template_directory'); ?>/assets/images/nectar_logo.svg" alt="" srcset="">
                </div>
                <div class="header__nav-menu items-start flex  ml-14 mr-24 hidden md:block">
                    <nav class="nav-menu flex-row items-center justify-between place-items-baseline	">
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </nav>
                </div>
                <div class="header__nav-help items-start flex hidden md:block ">
                    <nav class="nav-menu flex-row items-center justify-between place-items-baseline	">
                        <?php wp_nav_menu(array('theme_location' => 'help-menu')); ?>
                    </nav>
                </div>


            </div>

        </div>



    </header>