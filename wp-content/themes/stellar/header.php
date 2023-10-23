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
        <div
            class="max-w-[1280px] w-full mx-auto flex justify-between text-base py-[24px] px-[42px] md:py-[32px] md:px-[48px]">
            <h1 class="text-2xl md:text-3xl">Logo</h1>
            <button id="menu-toggle-button" class="flex z-100 md:hidden">
                Menu
            </button>
            <div id="mobile-menu" class="fixed top-0 left-0 text-center w-full h-full bg-gray-800 opacity-75 z-50 flex items-center justify-center nonactive">
    <button id="close-menu" class="absolute top-4 right-4 text-white text-2xl">X</button>
    <nav class="flex flex-col justify-evenly gap-5 p-5 text-white">
        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
    </nav>
</div>


            <div class="hidden md:flex">
                <nav class="flex-row justify-evenly [&_ul]:flex [&_ul]:gap-[32px]">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                </nav>
            </div>
        </div>
    </header>