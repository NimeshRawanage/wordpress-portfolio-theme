<?php get_header(); ?>

<main class="container single-portfolio">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>

            <div class="portfolio-content">
                <?php the_content(); ?>
            </div>

            <!-- Project Metadata -->
            <div class="portfolio-meta">
                <p><strong>Published on:</strong> <?php echo get_the_date(); ?></p>
                <p><strong>Categories:</strong> <?php the_category(', '); ?></p>
                <p><strong>Tags:</strong> <?php the_tags('', ', ', ''); ?></p>
            </div>

            <!-- Back to Portfolio Link -->
            <a href="<?php echo site_url('/portfolio'); ?>" class="back-link">← Back to Portfolio</a>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
