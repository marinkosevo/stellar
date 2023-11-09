<?php
$benefits = get_field('benefit');
if ($benefits):
    ?>
    <div class="bg-white dark:bg-[#000] py-[78px] md:py-[236px] lg:py-[144px] px-[22px] md:px-[80px] lg:px-[100px]">
        <div
            class="max-w-[386px] md:max-w-[864px] lg:max-w-[1530px] flex flex-col md:flex-row gap-y-[144px] justify-between md:justify-between mx-auto bg-[#F6FFF6] dark:bg-[#000] px-[50px] py-[82px] border dark:border-[#646464]  rounded-[30px]">

            <div class="text-center flex flex-col gap-[21px]">
                <h1 class="text-[#83E281] dark:text-[#C8FEC7] text-[64px]">
                    Naslov
                </h1>
                <h2 class="text-[#83E281] dark:text-[#C8FEC7] text-[22px]">
                    Podnaslov
                </h2>
            </div>
            <img class='hidden lg:flex object-contain'src="<?= get_template_directory_uri() . '/assets/images/Dawn.png' ?>" alt="">
            <div class="text-center flex flex-col gap-[21px]">
                <h1 class="text-[#83E281] dark:text-[#C8FEC7] text-[64px]">
                    Naslov
                </h1>
                <h2 class="text-[#83E281] dark:text-[#C8FEC7] text-[22px]">
                    Podnaslov
                </h2>
            </div>
            <img class='hidden lg:flex object-contain' src="<?= get_template_directory_uri() . '/assets/images/Dawn.png' ?>" alt="">

            <div class="text-center flex flex-col gap-[21px]">
                <h1 class="text-[#83E281] dark:text-[#C8FEC7] text-[64px]">
                    Naslov
                </h1>
                <h2 class="text-[#83E281] dark:text-[#C8FEC7] text-[22px]">
                    Podnaslov
                </h2>
            </div>



        </div>
    </div>
<?php endif; ?>