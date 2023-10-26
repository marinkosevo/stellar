<?php

/**
 * Template Name: Sign in Template
 */
?>

<?php wp_head() ?>




<div class="relative max-w-[1440px] mx-auto">
    <div class="flex-row mx-auto text-center mb-[56px] md:absolute md:top-[40px] md:left-[40px] ">
        <img class="md:inline mx-auto" src="<?= get_template_directory_uri() . '/assets/images/Frame.png' ?>" alt="">
        <span class="font-semibold text-[16px]">PNFT Market</span>
    </div>
    <span class="hidden md:flex md:absolute md:bottom-[40px] md:left-[40px] ">@Created by NamDesing</span>

    <div class="flex flex-col md:flex-row mx-auto">

        <div class="self-center md:flex-1">
            <div class="max-w-[360px] mx-auto">
                <div class="flex just flex-col gap-[8px] mb-[56px]">
                    <h1 class="text-[#344054] text-[40px] font-semibold">
                        <?= __('NFT Access', 'stellar') ?>
                    </h1>
                    <p class="text-[#667085] text-[16px] ">
                        <?= __('Please fill your detail to access your account.', 'stellar') ?>
                    </p>
                </div>
                <div class="flex flex-col md:flex-1 gap-[20px] ">
                    <div class="flex flex-col gap-[8px]"><label class='text-[#344054]'
                            aria-placeholder="debra.holt@example.com" for="email">
                            <?= __('Email', 'stellar') ?>
                        </label><input
                            class="flex px-[14px] py-[10px] border border-solid border-gray-300 rounded-md p-2 text-[#667085] text-[16px]"
                            name="email" type="mail"> </div>
                    <div class="flex flex-col gap-[8px]"><label class='text-[#344054]' for="password">
                            <?= __('Password', 'stellar') ?>
                        </label><input
                            class="flex px-[14px] py-[10px] border border-solid border-gray-300 rounded-md p-2 text-[#667085] text-[16px]"
                            name="password" type="password"> </div>

                    <div>
                        <input
                            class='w-[14px] h-[14px] justify-center border-solid border-1 rounded-md mt-[3px] border-[#D0D5DD]'
                            type="checkbox" name="remember" id="">
                        <label class='font-[500] leading-5 text-[14px]' for="remember">
                            <?= __('Remember me', 'stellar') ?>
                        </label> <span class="ml-[113px] leading-5 text-[#5429FF] font-[500] text-[14px]">
                            <?= __('Forgot password?', 'stellar') ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-[20px] mt-[32px] text-center">

                <button class="px-[154px] py-[14px] bg-[#5429FF] text-white rounded-[8px]">
                    <?= __('Sign in', 'stellar') ?>
                </button>
                <button class="mx-auto border-gray-300 border border-solid rounded-[8px]">
                    <div class='mx-auto my-auto flex flex-row gap-[8px] text-center px-[90px] py-[10px]'><img
                            class='inline' src="<?= get_template_directory_uri() . '/assets/images/Google.png' ?>" />
                        <?= __('Sign in with Google', 'stellar') ?>
                    </div>
                </button>
                <p class="text-[#344054]">
                    <?= __('Don’t have an account?', 'stellar') ?><span class="text-[#5429FF]">
                        <?= __(' Sign up', 'stellar') ?>
                    </span>
                </p>




            </div>
        </div>
        <div class=" hidden md:flex bg-[#CBCCE8] m-[32px] rounded-[32px] h-fit pb-[31px]">
            <img src="<?= get_template_directory_uri() . '/assets/images/DRIP_20.png' ?>" alt="">

        </div>
    </div>
</div>