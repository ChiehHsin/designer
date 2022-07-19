<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


<div class="container">
        
        <?php
            $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'uiux',
                'posts_per_page' => 10,
                'paged' => $paged,
            );
            $arr_posts = new WP_Query( $args );
        
            if ( $arr_posts->have_posts() ) :
        
                while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
        ?>


        <article class="d-md-flex justify-content-md-start">
                <div class="col-md-4" style="	background-image: url(<?php the_post_thumbnail_url(); ?>);	background-position:center;	background-size: cover;	background-repeat: none; height:200px; "></div>
                <div class="col-md-8">
                  <h4 class="pt-2"><?php the_title(); ?></h4>
                  <p class=""><?php the_excerpt(); ?></p>
                  <div class="text-right">
                    <a class="btn btn-outline-dark" href="<?php the_permalink(); ?>">View Project</a>
                  </div>
                </div>
            </div>

        </article>
            <?php
                endwhile;
                wp_pagenavi(
                    array(
                        'query' => $arr_posts,
                    )
                );
                endif;
            ?>

            </div>
            </main>

</div>