<div class="flex flex-col gap-[42px] px-[24px] py-[42px]">
<?php
$testimonials = get_field('cards');
$heading = get_field('heading');
if ($heading): ?>
    <h1 class="text-[32px] font-semibold text-center">
        <?= $heading ?>
    </h1>
<?php
endif;
if ($testimonials):
    ?>
    <div class="flex flex-start grid grid-cols-1 md:grid-cols-3 gap-[24px] max-w-[1280px] mx-auto">
        <?php
        foreach ($testimonials as $testimonial):
            ?>
            <div class="bg-[#F3F3F3] p-[42px] flex flex-col justify-between gap-[68px]">
                <h1 class="text-[20px] font-semibold">
                    <?= $testimonial['introduction'] ?>
                </h1>
                <div class="flex flex-row gap-[16px]">
                    <img class='w-[50px] h-[50px] rounded-[50px]' src="<?= $testimonial['user']['photo']['url'] ?>" alt="">
                    <div>
                        <div class="flex flex-row mb-[11px] gap-[6px]">
                            <?php if ($testimonial['user']['stars'] > 5):
                                $stars = 5;
                            else:
                                $stars = $testimonial['user']['stars'];
                            endif;
                            for ($i = 0; $i < $stars; $i++):

                                ?>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <path
                                            d="M9.43664 2.64487C9.80345 1.90162 10.8633 1.90162 11.2301 2.64487L13.0396 6.31135C13.1853 6.6065 13.4669 6.81107 13.7926 6.8584L17.8388 7.44634C18.659 7.56553 18.9865 8.5735 18.393 9.15204L15.4651 12.006C15.2294 12.2357 15.1219 12.5667 15.1775 12.8911L15.8687 16.921C16.0088 17.7379 15.1514 18.3609 14.4178 17.9752L10.7987 16.0725C10.5074 15.9194 10.1594 15.9194 9.86803 16.0725L6.24899 17.9752C5.51537 18.3609 4.65793 17.7379 4.79804 16.921L5.48922 12.8911C5.54486 12.5667 5.43731 12.2357 5.20162 12.006L2.27376 9.15204C1.68024 8.5735 2.00775 7.56553 2.82797 7.44634L6.87418 6.8584C7.19989 6.81107 7.48146 6.6065 7.62712 6.31135L9.43664 2.64487Z"
                                            fill="#2D2D2D" />
                                    </svg>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <h1 class="text-[20px] font-semibold">
                            <?= $testimonial['user']['name'] ?>
                        </h1>
                        <h1 class="text-[17px]">
                            <?= $testimonial['user']['company'] ?>
                        </h1>

                    </div>

                </div>
            </div>


        <?php endforeach; ?>
    </div>
<?php endif; ?>
</div>