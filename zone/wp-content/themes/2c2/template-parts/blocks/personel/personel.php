<?php

/**
 * Main Section
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = '' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$personels = get_field('add_personel');
?>

<section class="personels">
    <div class="personels__wrapper">
        <?php if ($personels) : ?>
            <div class="owl-carousel owl-personels">
                <?php foreach ($personels as $personel) : ?>
                    <div class="personels__columns">
                        <div class="personels__columns-col1">
                            <img src="<?php echo $personel['image']['url']; ?>" alt="<?php echo $personel['image']['alt']; ?>">
                        </div>
                        <div class="personels__columns-col2">
                            <div class="name"><?php echo $personel['name']; ?></div>
                            <div class="position"><?php echo $personel['position']; ?></div>
                            <?php echo $personel['text']; ?>
                            <div class="slider_nav">
                                <button class="owl-left"><img src="<?php echo get_template_directory_uri(); ?>/images/owl-left.png" alt=""></button>
                                <button class="owl-right"><img src="<?php echo get_template_directory_uri(); ?>/images/owl-right.png" alt=""></button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
</section>