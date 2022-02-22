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

$projects = get_field('add_project');
?>

<section class="projects">
    <div class="projects__wrapper">
        <h2><?php the_field('title'); ?></h2>
        <?php the_field('text'); ?>
        <div class="projects__columns">
            <?php if ($projects) : ?>
                <?php foreach ($projects as $project) : ?>
                    <div class="projects__columns-col">
                        <div class="projects__box">
                            <div class="projects__box-img">
                                <img src="<?php echo $project['image']['url']; ?>" alt="<?php echo $project['image']['alt']; ?>">
                            </div>
                            <div class="projects__box-title"><?php echo $project['title']; ?></div>
                            <?php echo $project['text']; ?>
                            <a href="<?php echo $project['link']['url']; ?>">
                                <?php echo $project['text_link']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="6.462" viewBox="0 0 12 6.462">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <path id="Path_13" data-name="Path 13" d="M.518-3.016h8.24V-.809c0,.288.164.357.366.153L11.848-3.4a.525.525,0,0,0,0-.738L9.124-6.883c-.2-.2-.366-.135-.366.153v2.207H.518A.52.52,0,0,0,0-4v.462A.521.521,0,0,0,.518-3.016Z" fill="#1b498a" />
                                        </clipPath>
                                        <clipPath id="clip-path-2">
                                            <path id="Path_12" data-name="Path 12" d="M-345,1106H1575V-6167H-345Z" fill="#FF9C00" />
                                        </clipPath>
                                    </defs>
                                    <g id="Group_9" data-name="Group 9" transform="translate(0 7)" clip-path="url(#clip-path)">
                                        <g id="Group_8" data-name="Group 8" clip-path="url(#clip-path-2)">
                                            <path id="Path_11" data-name="Path 11" d="M-5-12H17V4.462H-5Z" fill="#FF9C00" />
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