<div class="banner">
<?php $img_url_slider = get_theme_mod('set-header','#') ?>
    <img src="<?php  echo wp_get_attachment_url($img_url_slider) ?>" alt="">
    <div class="banner__main">

        <div class="banner__top">
            <div class="banner__title">
                Our Newsroom
            </div>

            <div class="banner__search"><?php echo get_search_form() ?></div>

        </div>
        <?php $tags = get_tags(); ?>
        <div class="banner__tag">
            <div class="banner__tag-title">Popular Tags :</div>
            <div class="banner__tag-group">
                <?php foreach ($tags as $tag) {
                    $tag_link = get_tag_link($tag->term_id);
                    echo "<a class='banner__tag-item' href='$tag_link'>$tag->name</a>";
                } ?>
            </div>
        </div>
    </div>
</div>