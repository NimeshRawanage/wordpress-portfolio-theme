<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Nimesh Rawanage. All rights reserved.</p>
        <nav class="footer-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'footer-nav'
            ));
            ?>
        </nav>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
