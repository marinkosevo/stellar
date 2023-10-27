<?php
$cards = get_field('cards');
if ($cards):
    ?>
    <div class="flex flex-col w-full md:flex-row py-[42px] px-[24px] max-w-[1280px] mx-auto">
        <?php
        foreach ($cards as $card):
            ?>

            <div class="py-[64px] px-[42px] flex flex-col gap-[42px]">
                <img class='h-[124px] mx-auto'src="<?= $card['image']['url'] ?>" alt="">
                <div class="text-center flex flex-col gap-[12px]">
                    <h1 class="text-[27px] font-semibold">
                        <?= $card['heading'] ?>
                    </h1>
                    <h1>
                        <?= $card['description'] ?>
                    </h1>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

    <?php
endif; ?>