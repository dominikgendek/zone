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
$className = 'hero';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$template = [
    ['core/button']
];

$title = get_field('title');
$text = get_field('text');
$img = get_field('image');
?>

<section class="hero">
    <div class="hero__container">
        <div class="hero__columns">
            <div class="hero__columns-col1">
                <h1>
                    <?php echo $title; ?>
                </h1>
                <?php echo $text; ?>
                <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" />
            </div>
            <div class="hero__columns-col2">
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
            </div>
        </div>
    </div>
</section>