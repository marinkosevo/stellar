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
    <header class="bg-white dark:bg-[#000]">
        <div
            class="max-w-[1530px] mx-auto px-[22px] md:px-[100px] pt-[50px] pb-[30px] justify-between  flex flex-row  text-black dark:text-white">
            <div>
                <div class="inline">
                    <svg class='inline' xmlns="http://www.w3.org/2000/svg" width="27" height="28" viewBox="0 0 27 28"
                        fill="none">
                        <path class='dark:fill-white'
                            d="M20.3489 12.37C19.9699 12.7513 19.6797 13.2115 19.4989 13.7177C19.3181 14.224 19.2512 14.7639 19.3029 15.299L19.2849 15.281C19.3381 15.9109 19.2531 16.5447 19.036 17.1384C18.8189 17.732 18.4749 18.2711 18.028 18.7181C17.581 19.165 17.0419 19.5091 16.4482 19.7261C15.8546 19.9432 15.2207 20.0282 14.5909 19.975L14.6089 19.993C13.8555 19.9229 13.0988 20.0868 12.4419 20.4625C11.7851 20.8382 11.2601 21.4073 10.9386 22.0923C10.6171 22.7773 10.5146 23.5447 10.6452 24.2901C10.7759 25.0354 11.1332 25.7223 11.6685 26.2571C12.2038 26.7919 12.891 27.1486 13.6364 27.2785C14.3819 27.4085 15.1492 27.3053 15.8339 26.9832C16.5186 26.661 17.0872 26.1356 17.4623 25.4784C17.8374 24.8212 18.0007 24.0644 17.9299 23.311L17.9489 23.329C17.8957 22.6992 17.9806 22.0653 18.1977 21.4716C18.4148 20.878 18.7589 20.3389 19.2058 19.8919C19.6528 19.445 20.1919 19.1009 20.7855 18.8839C21.3792 18.6668 22.013 18.5818 22.6429 18.635L22.6239 18.617C23.2393 18.6723 23.8588 18.5714 24.4249 18.3236C24.9909 18.0758 25.4853 17.6891 25.8621 17.1994C26.2389 16.7097 26.4861 16.1327 26.5805 15.5221C26.675 14.9114 26.6138 14.2868 26.4026 13.706C26.1914 13.1253 25.837 12.6073 25.3723 12.2C24.9076 11.7927 24.3476 11.5093 23.7442 11.3761C23.1408 11.2429 22.5135 11.2641 21.9205 11.4378C21.3275 11.6116 20.788 11.9322 20.3519 12.37H20.3489Z"
                            fill="#292929" />
                        <path class='dark:fill-white'
                            d="M12.9718 17.635L12.9528 17.617C13.4881 17.6709 14.0287 17.6052 14.5356 17.4246C15.0424 17.244 15.5028 16.9531 15.8834 16.5728C16.2639 16.1925 16.5553 15.7323 16.7362 15.2256C16.9172 14.7189 16.9833 14.1784 16.9298 13.643L16.9488 13.661C16.8956 13.0311 16.9806 12.3973 17.1976 11.8036C17.4147 11.21 17.7588 10.6709 18.2057 10.2239C18.6527 9.77702 19.1918 9.43292 19.7854 9.21592C20.3791 8.99878 21.0129 8.91385 21.6428 8.96702L21.6238 8.94902C22.3773 9.01982 23.1342 8.85638 23.7914 8.48112C24.4487 8.10586 24.9741 7.53699 25.2961 6.85212C25.6181 6.16726 25.721 5.39973 25.5908 4.65422C25.4606 3.90871 25.1036 3.22153 24.5684 2.68639C24.0333 2.15126 23.3461 1.79422 22.6006 1.664C21.8551 1.53377 21.0876 1.63668 20.4027 1.9587C19.7178 2.28071 19.149 2.80616 18.7737 3.46337C18.3984 4.12057 18.235 4.87754 18.3058 5.63102L18.2878 5.61202C18.3411 6.24191 18.2563 6.87585 18.0393 7.46957C17.8223 8.06329 17.4782 8.60248 17.0313 9.04952C16.5843 9.49642 16.0451 9.84052 15.4514 10.0575C14.8576 10.2745 14.2237 10.3593 13.5938 10.306L13.6118 10.325C13.0765 10.2711 12.5358 10.3368 12.029 10.5174C11.5222 10.6979 11.0618 10.9889 10.6812 11.3692C10.3006 11.7495 10.0093 12.2097 9.82834 12.7164C9.64744 13.2231 9.58134 13.7636 9.63484 14.299L9.61684 14.281C9.66984 14.9108 9.58474 15.5446 9.36764 16.1382C9.15044 16.7317 8.80644 17.2708 8.35954 17.7177C7.9126 18.1646 7.37356 18.5086 6.78 18.7258C6.18644 18.9429 5.55265 19.028 4.92284 18.975L4.94084 18.993C4.18736 18.9222 3.43039 19.0856 2.77318 19.4609C2.11598 19.8362 1.59053 20.405 1.26852 21.0899C0.946502 21.7748 0.843582 22.5423 0.973812 23.2878C1.10404 24.0333 1.46108 24.7205 1.99621 25.2556C2.53135 25.7908 3.21853 26.1478 3.96404 26.278C4.70955 26.4082 5.47708 26.3053 6.16195 25.9833C6.84681 25.6613 7.41568 25.1359 7.79094 24.4787C8.16624 23.8214 8.32964 23.0645 8.25884 22.311L8.27784 22.329C8.22464 21.6991 8.30964 21.0653 8.52674 20.4716C8.74374 19.878 9.08784 19.3389 9.53474 18.8919C9.98174 18.445 10.5208 18.1009 11.1144 17.8839C11.7081 17.6668 12.3419 17.5818 12.9718 17.635Z"
                            fill="#292929" />
                        <path class='dark:fill-white'
                            d="M6.2699 15.628C6.64892 15.2468 6.9391 14.7866 7.11974 14.2803C7.30038 13.774 7.36702 13.234 7.3149 12.699L7.33389 12.717C7.28069 12.087 7.36565 11.4529 7.58286 10.8591C7.80007 10.2653 8.1443 9.72606 8.5915 9.27906C9.0387 8.83208 9.578 8.48809 10.1719 8.27114C10.7658 8.05418 11.3999 7.96948 12.0299 8.02296L12.0109 8.00496C12.7641 8.07553 13.5208 7.91204 14.1777 7.5368C14.8346 7.16157 15.3597 6.59284 15.6816 5.90819C16.0034 5.22353 16.1062 4.45628 15.976 3.71105C15.8458 2.96582 15.4888 2.2789 14.9539 1.74396C14.419 1.20902 13.732 0.852103 12.9868 0.721883C12.2416 0.591653 11.4743 0.694473 10.7897 1.01629C10.105 1.33811 9.5363 1.86328 9.1611 2.52018C8.7858 3.17708 8.6223 3.93374 8.6929 4.68696L8.6749 4.66896C8.7281 5.29881 8.6431 5.93268 8.426 6.52632C8.2089 7.11996 7.86492 7.65907 7.41796 8.10603C6.97101 8.55299 6.43189 8.89702 5.83825 9.11406C5.24461 9.33116 4.61075 9.41616 3.9809 9.36296L3.9989 9.38096C3.38347 9.32576 2.76406 9.42686 2.19808 9.67476C1.6321 9.92266 1.13785 10.3095 0.761139 10.7993C0.384429 11.289 0.137449 11.866 0.0430689 12.4766C-0.0513011 13.0873 0.0099889 13.7119 0.221259 14.2925C0.432529 14.8732 0.786959 15.3911 1.25169 15.7983C1.71642 16.2056 2.27642 16.4889 2.8798 16.6221C3.48317 16.7552 4.1104 16.7339 4.70337 16.5602C5.29633 16.3864 5.83583 16.0658 6.27189 15.628H6.2699Z"
                            fill="#292929" />
                    </svg>
                </div>
                <span class="font-[Poppins] font-[700] text-[20px]">tian</span>
            </div>
            <div class="hidden md:flex">
                <nav class="flex flex-col [&_ul]:flex [&_ul]:justify-between [&_ul]:gap-[30px]">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                </nav>
            </div>
            <div>
                <div class="md:hidden">
                    <div id='mobile-menu-open' class="z-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path class="dark:stroke-white" d="M5 11.6667H35" stroke="#292929" stroke-width="2.5"
                                stroke-linecap="round" />
                            <path class="dark:stroke-white" d="M5 20H35" stroke="#292929" stroke-width="2.5"
                                stroke-linecap="round" />
                            <path class="dark:stroke-white" d="M5 28.3333H35" stroke="#292929" stroke-width="2.5"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <div id="mobile-menu"
                        class="hidden fixed inset-0 bg-white dark:text-white dark:bg-black z-50 overflow-auto">
                        <nav
                            class="flex flex-col mx-auto py-[100px] [&_div]:mx-auto text-center  text-[50px] font-[Anton] [&_ul]:flex [&_ul]:flex-col [&_ul]:gap-[30px] ">
                            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                            <div class="flex flex-col py-[40px] gap-[30px]">
                                <button> Contact Me</button>
                                <div class="text-[12px]">
                                    <input type="checkbox" class="checkbox" id="checkbox">
                                    <label for="checkbox" class="checkbox-label">
                                        <i class="fas fa-moon"></i>
                                        <i class="fas fa-sun"></i>
                                        <span class="ball"></span>
                                    </label>
                                </div>
                            </div>
                            <button id="mobile-menu-close" class="text-[30px]">X</button>
                        </nav>
                    </div>
                </div>
                <div class="hidden md:flex flex-row gap-[20px]">
                    <button> Contact Me</button>
                    <div>
                        <input type="checkbox" class="checkbox" id="checkbox">
                        <label for="checkbox" class="checkbox-label">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                            <span class="ball"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </header>