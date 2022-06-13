    <!--footer-->
    <footer>
        <div class="container">
            <div class="row">

                <?php
                if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>     
                <?php endif; ?>

                <?php
                if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>     
                <?php endif; ?>

                <?php
                if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>     
                <?php endif; ?>


            </div>
        </div>
        <p class="bottomBar">&copy;&nbsp;2022 &nbsp;&#8226;&nbsp; Company Name AG  &nbsp;&#8226;&nbsp; All Rights Reserved </p>
    </footer>
    
    <?php wp_footer(); ?>

</body>
</html>