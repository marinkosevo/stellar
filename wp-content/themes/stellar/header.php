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
        <div class="header bg-yellow-500">
            <div class="header__wrapper flex">
                <div class="header__logo flex w-1/3 p-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-1.png" alt="" srcset="">
                </div>
                <div class="header__nav flex">
                    <nav class="nav-menu">
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </nav>
                </div>
                <div class="header__right-side flex">
                    <a href="">Login</a>
                    <button class="try_button">Try for free</button>
                </div>
            </div>
            <div class="p-4 text-white">
                Ovo je primjer korištenja Tailwind CSS unutar WordPressa.
            </div>
        </div>



    </header>

    <figure class="bg-slate-100 rounded-xl p-8 dark:bg-slate-800">
  <img class="w-24 h-24 rounded-full mx-auto" src="/sarah-dayan.jpg" alt="" width="384" height="512">
  <div class="pt-6 space-y-4">
    <blockquote>
      <p class="text-lg font-medium">
        “Tailwind CSS is the only framework that I've seen scale
        on large teams. It’s easy to customize, adapts to any design,
        and the build size is tiny.”
      </p>
    </blockquote>
    <figcaption>
      <div>
        Sarah Dayan
      </div>
      <div>
        Staff Engineer, Algolia
      </div>
    </figcaption>
  </div>
</figure>