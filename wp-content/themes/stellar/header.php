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
            <div class="max-w-[1280px] w-full mx-auto flex justify-between text-base py-[24px] px-[42px]">
                <h1>Logo</h1>
                
                <div class=''>
                    <nav class="flex-row justify-evenly [&_ul]:flex [&_ul]:gap-[24px]">
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </nav>
                </div>
                


            </div>

        </div>



    </header>