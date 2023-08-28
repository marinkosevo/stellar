<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stellar</title>
    <?php wp_head()?>
</head>
<body>
    <header>
<div class="header">
    <div class="header__logo">
        <img src="
        <?php bloginfo('template_directory');?>/assets/images/logo-1.png
        " alt="" srcset="">
    </div>
    <div class="header__nav">
        <nav class="nav-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
        </nav>

    </div>
    <div class="header__right-side">
        <a href="">Login</a>
        <button class="try_button">Try for free</button>
    </div>
    <div class="header__show-mobile"> 
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0 0 50 50">
<path d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 L 0 7.5 z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 L 0 22.5 z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 L 0 37.5 z" fill="white" ></path>
</svg>
        </div>
   
</div>


    </header>
    
