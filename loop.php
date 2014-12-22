<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

<article role="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1 class="entry-title">

            <?php if ( ! is_single() && ! is_page() ) : ?>
            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>

            <?php else : ?>
            <?php the_title() ?>

            <?php endif; ?>
        </h1>

        <?php if ( is_single() || is_home() ) : ?>
        <div class="entry-meta">
            <?php get_template_part( 'entry', 'meta' ); ?>
        </div>
        <?php endif; ?>

    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <?php if ( ! is_single() && ! is_page() ) : ?>
        <footer>
            <a href="<?php the_permalink() ?>" rel="bookmark">Kommentera</a> (<?php comments_number() ?>)
        </footer>
    <?php endif ?>

</article>

<?php endwhile; endif; ?>

<?php $next = get_next_posts_link() ?>
<?php $previous = get_previous_posts_link() ?>

<?php if ($next || $previous) : ?>
    <nav class="pager">
        <?php if ($next) : ?>
            <div class="next-page">
                <?php echo $next ?>
            </div>
        <?php endif ?>

        <?php if ($previous) : ?>
            <div class="previous-page">
                <?php echo $previous ?>
            </div>
        <?php endif ?>
    </nav>
<?php endif ?>