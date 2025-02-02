<?php get_header(); ?>

<main class="container">
    <!-- Hero Section -->
    <section class="hero">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio">
    <h2>My Work</h2>
    <div class="portfolio-grid">
        <?php
        $portfolio_query = new WP_Query(array(
            'post_type' => 'portfolio',
            'posts_per_page' => 6
        ));

        if ($portfolio_query->have_posts()) :
            while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
                <div class="portfolio-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>No projects found.</p>
        <?php endif; ?>
    </div>
</section>


    <!-- About Section -->
    <section class="about">
        <h2>About Me</h2>
        <p>Hello! I'm <strong>Nimesh Rawanage</strong>, a WordPress & Python Web Developer.</p>
    </section>

    <!-- Contact Section -->
    <section class="contact">
        <h2>Contact Me</h2>
        <p>Find me on:</p>
        <ul>
            <li><a href="#">LinkedIn</a></li>
            <li><a href="#">GitHub</a></li>
        </ul>
    </section>
</main>

<?php get_footer(); ?>
