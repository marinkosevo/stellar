<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    ?>
    <h1 class="py-[42px] text-center font-semibold text-[32px]">Latest Posts</h1>
    <div class="flex flex-start grid grid-cols-3 gap-[24px] max-w-[1280px] mx-auto">
        <?php
        while ($query->have_posts()) {
            $query->the_post();

            $post_title = get_the_title();

            $post_categories = get_the_category();
            $category_names = array();
            foreach ($post_categories as $category) {
                $category_names[] = $category->name;
            }

            $featured_image = get_the_post_thumbnail_url();
            ?>
            <div>
                <?php if ($featured_image): ?> <img class='w-full'src="<?= $featured_image ?>" alt="">
                <?php else: ?> <img class='w-full'src="https://stellar.ddev.site/wp-content/uploads/2023/10/Image-1.png"
                        alt="">
                <?php endif; ?>
                <h1 class="text-[20px] font-semibold mt-[24px] mb-[8px]">
                    <?= $post_title ?>
                </h1>
                <h1 class="text-[17px]">
                    <?= implode($category_names) ?>
                </h1>

            </div>

            <?php
        }
        ?>
    </div>
    <?php
    wp_reset_postdata();
} else {
    echo 'Nema pronađenih postova.';
}
?>