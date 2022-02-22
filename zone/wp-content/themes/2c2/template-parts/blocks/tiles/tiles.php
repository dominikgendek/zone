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
$id = 'tiles-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'tiles';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$tiles = get_field('add_tiles');
?>

<section id="tiles" class="<?php echo esc_attr($className); ?>">
    <div class="tiles__wrapper">
        <h2><?php the_field('title'); ?></h2>
        <?php the_field('text'); ?>
        <div class="tiles__columns">
            <?php if ($tiles) : ?>
                <?php foreach ($tiles as $tile) : ?>
                    <div class="tiles__columns-col">
                        <div class="tiles__box">
                            <div class="tiles__box-img" style="background-color: <?php echo $tile['bg_icon']; ?>">
                                <img src="<?php echo $tile['icon']['url']; ?>" alt="<?php echo $tile['icon']['alt']; ?>">
                            </div>
                            <div class="tiles__box-title"><?php echo $tile['title']; ?></div>
                            <?php echo $tile['text']; ?>
                            <a href="<?php echo $tile['link']['url']; ?>">
                                <?php echo $tile['text_link']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="6.462" viewBox="0 0 12 6.462">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <path id="Path_13" data-name="Path 13" d="M.518-3.016h8.24V-.809c0,.288.164.357.366.153L11.848-3.4a.525.525,0,0,0,0-.738L9.124-6.883c-.2-.2-.366-.135-.366.153v2.207H.518A.52.52,0,0,0,0-4v.462A.521.521,0,0,0,.518-3.016Z" fill="#1b498a" />
                                        </clipPath>
                                        <clipPath id="clip-path-2">
                                            <path id="Path_12" data-name="Path 12" d="M-345,1106H1575V-6167H-345Z" fill="#1b498a" />
                                        </clipPath>
                                    </defs>
                                    <g id="Group_9" data-name="Group 9" transform="translate(0 7)" clip-path="url(#clip-path)">
                                        <g id="Group_8" data-name="Group 8" clip-path="url(#clip-path-2)">
                                            <path id="Path_11" data-name="Path 11" d="M-5-12H17V4.462H-5Z" fill="#1b498a" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>