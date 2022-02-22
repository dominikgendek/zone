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

$title = get_field('title');
$text = get_field('text');
$img = get_field('image');
?>

<section class="textForm">
    <div class="textForm__wraper">
        <div class="textForm__columns">
            <div class="textForm__columns-col1">
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
            </div>
            <div class="textForm__columns-col2">
                <h2>
                    <?php echo $title; ?>
                </h2>
                <?php echo $text; ?>
                <?php echo do_shortcode('[contact-form-7 id="103" title="Formularz 1"]'); ?>
            </div>
        </div>
    </div>
</section>