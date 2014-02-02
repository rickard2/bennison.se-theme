<span class="entry-date">
    Av <?php the_author() ?>, publicerad i <?php the_category(', ', '') ?>
    <time class="published updated" pubdate datetime="<?php echo date( "Y-m-d", get_the_date( 'U' ) ) ?>"><?php echo relative_time_sv( get_the_date( 'U' ) ); ?></time>.

    <?php if (get_the_tag_list()) : ?>
        Taggad <?php the_tags() ?>
    <?php endif ?>
</span>