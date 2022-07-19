<div class="container">

            <div class="row py-4 border-bottom">
                <div class="col-md-4" style="	background-image: url(<?php the_post_thumbnail_url(); ?>);	background-position: top;	background-size: cover;	background-repeat: none; height:200px; "></div>
                <div class="col-md-8">
                  <h4 class="pt-3"><?php the_title(); ?></h4>
                  <p class=""><?php the_excerpt(); ?></p>
                  <div class="">
                    <a class="btn btn-outline-dark" href="<?php the_permalink(); ?>">View Project</a>
                  </div>
                </div>
            </div>

</div>