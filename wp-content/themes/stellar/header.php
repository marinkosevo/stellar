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
            <div class="header__wrapper flex justify-between  sm:gap-3 pl-20 pr-32 py-5">
                <div class="header__mobile-menu sm:flex md:hidden" id="toggle-menu">
                    <img class="max-w-fit" src="<?php bloginfo('template_directory'); ?>/assets/images/menu-icon.png" alt="">
                </div>
                <div class="header__logo items-start ">
                    <img class="max-w-fit" src="<?php bloginfo('template_directory'); ?>/assets/images/nectar_logo.svg" alt="" srcset="">
                </div>
                <div class="header__nav-menu  ml-14 mr-24 hidden md:block">
                    <nav class="nav-menu flex-row justify-between place-items-baseline	">
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </nav>
                </div>
                <div class="header__nav-help hidden md:block ">
                    <nav class="nav-menu flex-row justify-between place-items-baseline	">
                        <?php wp_nav_menu(array('theme_location' => 'help-menu')); ?>
                    </nav>
                </div>


            </div>

        </div>



    </header>