<?php
$logo = get_field('logo');
?>
<div class="flex flex-row w-full py-[42px] px-[20px] md:px-0 gap-[12px] max-w-[1280px] justify-between mx-auto">
    <?php if ($logo): ?>
        <?php foreach ($logo as $images): ; ?>
        <img class='object-contain' src="<?= ($images['image']['url']) ?>" alt="">

            
        <?php endforeach; ?>

    <?php endif; ?>
</div>