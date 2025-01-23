<?php get_header(); ?>

<main class="container archive-portfolio">
    <h1 class="page-title">My Portfolio</h1>
    
    <div class="portfolio-grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="portfolio-item">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h3>
                </a>
            </div>
        <?php endwhile; else : ?>
            <p>No projects found.</p>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>
</main>

<?php get_footer(); ?>
