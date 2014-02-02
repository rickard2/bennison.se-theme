<?php get_header(); ?>

    <div role="main">
        <?php get_template_part( 'loop' ) ?>

        <section class="comments">
            <?php comments_template() ?>
        </section>
    </div>

<?php get_footer(); ?>