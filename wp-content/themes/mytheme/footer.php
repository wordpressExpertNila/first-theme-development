<footer class="site-footer clearfix">
            <p>All Rights Reserved, <a href="http://itbari.com">IT-Bari Tutorials</a> &copy; 2016</p>
            <nav id="footer_nav">
                <?php 
                    $arg = array('Theme location' => 'footer' );
                    wp_nav_menu($arg);
                ?>
            </nav>
        </footer>
    </div>
    <?php wp_footer();?>
</body>

</html>