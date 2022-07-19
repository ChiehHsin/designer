<?php get_header(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">


                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            
                            get_template_part('template_post/content', 'article');
                        }
                    }
                ?>
        </div>    
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 text-left">
            <p>Previous project</p>
            <h5 class="link-info">
                <?php previous_post_link( '&laquo; %link', '%title', true ); ?>
            </h5>
        </div>

        <div class="col-md-6 text-right">
            <p>Next project</p>
            <h5>
                <?php next_post_link( '%link &raquo;', '%title', true ); ?>
            </h5>
        </div>
    </div>
</div>

<?php get_footer(); ?>