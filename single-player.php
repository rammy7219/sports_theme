<?php 

    get_header();

    while(have_posts()) {
        the_post(); 
        pageBanner();
        ?>
        
        

        <div class="container container--narrow page-section">

        <div class="metabox metabox--position-up metabox--with-home-link">
          
        </div>

            <div class="generic-content">

                <div class="row group">

                    <div class="one-third">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <div class="two-third">
                        <?php the_content(); ?>
                    </div>

                </div>

            </div>

    <?php }
    
    get_footer();

?>