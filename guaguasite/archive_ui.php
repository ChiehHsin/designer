<?php
    $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'uiux',
        'posts_per_page' => 5,
        'paged' => $paged,
    );
    $arr_posts = new WP_Query( $args );
  
    if ( $arr_posts->have_posts() ) :
  
        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>


  <div class="col-md-4 pb-3">
    <div class="card"> <img class="card-img-top" src="
                <?php
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                    endif;
                ?>" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title"><?php the_title(); ?></h4>
        <p class="card-text">  <?php the_excerpt(); ?></p>
        <div class="col-md-12 text-center"><a class="btn btn-outline-info" href="<?php the_permalink();?>" target="_blank">View project</a></div>
      </div>
    </div>
  </div>

  <?php
        endwhile;
        wp_pagenavi(
            array(
                'query' => $arr_posts,
            )
        );
    endif;
    ?>



