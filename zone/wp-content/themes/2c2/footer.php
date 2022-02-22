<?php
$logo = get_field('logo', 'options');
$terms = get_field('terms', 'options');
$social_media = get_field('social_media', 'options');
$signature = get_field('signature', 'options');
?>

<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__columns">
            <div class="footer__columns-col1">
                <a class="footer-logo" href="<?php echo get_home_url(); ?>"> <img src="<?php echo $logo['url']; ?>" alt=""></a>
                <?php the_field('text', 'options'); ?>
                <div class="form-title"><?php the_field('title_form', 'options'); ?></div>
                <?php echo do_shortcode('[contact-form-7 id="103" title="Formularz 1"]'); ?>
            </div>
            <div class="footer__columns-col2">
                <div class="footer__flex">
                    <?php if (have_rows('kolumny', 'option')) : ?>
                        <?php while (have_rows('kolumny', 'option')) : the_row(); ?>
                            <?php if (get_row_layout() == 'columns_link') : ?>
                                <?php
                                $title = get_sub_field('title');
                                $links = get_sub_field('linki');
                                ?>
                                <div class="footer__flex-col">
                                    <div class="title-col">
                                        <?php echo $title; ?>
                                    </div>
                                    <nav class="footer_nav">
                                        <ul>
                                            <?php foreach ($links as $link) : ?>
                                                <li>
                                                    <a href="<?php echo $link['link']['url']; ?>"><?php echo $link['link']['title']; ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </nav>
                                </div>
                            <?php elseif (get_row_layout() == 'columns_text') :
                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                            ?>
                                <div class="footer__flex-col">
                                    <div class="title-col">
                                        <?php echo $title; ?>
                                    </div>
                                    <?php echo $text; ?>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="footer__columns2">
            <div class="footer__columns2-terms terms-col">
                <nav>
                    <ul>
                        <?php foreach ($terms as $term) : ?>
                            <li>
                                <a href="<?php echo $term['link']['url'] ?>"><?php echo $term['link']['title'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
            <div class="footer__columns2-social terms-col">
                <div class="social-media">
                    <?php foreach ($social_media as $social_url) : ?>
                        <a target="_blank" href="<?php echo $social_url['url'] ?>"><img src="<?php echo $social_url['icon']['url'] ?>" alt="<?php echo $social_url['icon']['alt'] ?>"></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="footer__columns2-signature terms-col">
                <?php echo $signature; ?>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>