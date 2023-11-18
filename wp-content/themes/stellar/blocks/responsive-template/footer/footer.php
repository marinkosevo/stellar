<div class="bg-[#292929] pb-[30px]  ">
    <div class="border-b-2 border-white">
        <div class="flex flex-col mx-auto text-center lg:max-w-[1530px]  px-[24px] md:px-[80px] lg:px-[96px] pb-[44px]">
            <div class="h-[112px] bg-[#A87FF3] mt-[-48px] rounded-[16px] relative flex flex-row mb-[48px]">
                <div>
                    <img class='object-contain ml-[-30px]'
                        src="<?= get_template_directory_uri() . '/assets/images/covik.png' ?>" alt="">

                </div>
                <div>
                    <p class="text-[10px] md:text-[22px] md:font-bold text-white py-[26px] pr-[80px] font-[Gotham]">
                        Thanks
                        for
                        visit my website
                        If you have any questions you can write me to any of my social networks, I am sure I will answer
                        you.
                    </p>


                    <svg class="absolute w-[82px] top-0 right-0" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 150 125" fill="none">
                        <g clip-path="url(#clip0_2_6710)">
                            <path
                                d="M2.10877 0C-2.47972 13.6472 -2.58169 43.5005 33.7184 53.7359C59.5135 61.0093 71.9043 73.0204 77.0377 82.4238C80.2882 88.3782 81.1898 95.5294 85.2231 100.984C95.8663 115.378 118.222 127.95 152 101.842"
                                stroke="white" stroke-width="2" />
                            <path
                                d="M19.1088 -13C14.5203 -0.635856 14.4183 26.4107 50.7184 35.6838C75.0048 41.8879 87.4091 51.897 93.0613 60.1568C97.2397 66.2629 98.3974 74.2127 103.299 79.7555C114.332 92.234 136.32 102.152 169 79.2674"
                                stroke="white" stroke-width="2" />
                            <path
                                d="M33.1088 -32C28.5203 -20.1024 28.4183 5.92351 64.7184 14.8467C88.3918 20.666 100.775 29.9642 106.62 37.7912C111.197 43.9198 112.493 52.2044 117.761 57.7503C128.94 69.52 150.771 78.5029 183 56.7856"
                                stroke="white" stroke-width="2" />
                            <path
                                d="M58.1088 -43C53.5203 -31.1024 53.4183 -5.07649 89.7184 3.84669C113.392 9.666 125.775 18.9642 131.62 26.7912C136.197 32.9198 137.493 41.2044 142.761 46.7503C153.94 58.52 175.771 67.5029 208 45.7856"
                                stroke="white" stroke-width="2" />
                        </g>
                        <defs>
                            <clipPath id="clip0_2_6710">
                                <rect width="150" height="125" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between w-full gap-[40px]">
                <img class='mx-auto md:m-0' src="<?= get_template_directory_uri() . '/assets/images/svduje.png' ?>"
                    alt="">
                <nav
                    class="[&_ul]:flex [&_ul]:flex-row [&_ul]:mx-auto [&_ul]:justify-between md:[&_ul]:gap-[30px] text-white">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                </nav>
            </div>

        </div>
    </div>
</div>