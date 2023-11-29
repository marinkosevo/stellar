<div class="px-[20px] md:px-[40px]">
    <?php
    $partners = get_field('partners');
    if ($partners):
        ?>

        <div class="flex flex-wrap mx-auto gap-[64px] py-[25px] justify-center max-w-[1216px] border-y border-gray-300">
            <?php foreach ($partners as $partner): ?>
                <div class="my-auto">
                    <a href="<?= $partner['link']['url'] ?>">
                        <?php if ($partner['partner']): ?>
                            <img src="<?= $partner['partner']['url'] ?>" alt="">
                        <?php endif; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>