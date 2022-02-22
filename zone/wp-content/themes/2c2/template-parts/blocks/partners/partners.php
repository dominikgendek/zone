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

$partners = get_field('add_partners');
?>

<section class="partners">
    <div class="partners__wrapper">
        <?php if ($partners) : ?>
            <div class="owl-carousel owl-partners">
                <?php foreach ($partners as $partner) : ?>
                    <div>
                        <img src="<?php echo $partner['logo']['url']; ?>" alt="<?php echo $partner['logo']['alt']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
</section>