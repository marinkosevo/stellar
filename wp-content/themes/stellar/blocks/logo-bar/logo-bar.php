<?php
$logo = get_field('logo');
?>
<div class="flex flex-row py-[42px] px-[68px]  max-w-[1280px] justify-between mx-auto">
    <?php if ($logo): ?>
        <?php foreach ($logo as $images): ; ?>
        <img src="<?= ($images['image']['url']) ?>" alt="">

            
        <?php endforeach; ?>

    <?php endif; ?>
</div>