<?php get_header(); ?>

<div class="py-5 text-center text-md-right my-5" style="	background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/img/uiux-banner.jpg&quot;);	background-position: top left; background-size:cover;">
    <div class="row">
      <div class="p-5 mx-auto mx-md-0 ml-md-auto col-10 col-md-9">
        <h1 style="color: #ffffff; text-shadow: rgb(117, 117, 117) 0.02em 0.02em 0.1em;">UI/UX</h1>
        <h5 class="mb-3" style="color: #ffffff; text-shadow: rgb(117, 117, 117) 0.02em 0.02em 0.1em;">UX design | UI design | UX research</h5>
      </div>
    </div>
  </div>

<div class="py-5 mt-5">
    <div class="container">
        <div class="col-12">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">


              <div class="row">


                    <?php
                        if( have_posts() ){
                            while(have_posts() ){
                                the_post();
                                
                                get_template_part('template_post/content','archiveui');
                            }
                         }
                    ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php get_footer(); ?>