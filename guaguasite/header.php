<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <!-- Theme CSS -->
  <?php wp_head(); ?>

  <!--font family-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Manjari:wght@100;400&amp;family=Open+Sans&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  
<!-- Script: Make my navbar transparent when the document is scrolled to top -->
<script src="<?php echo get_template_directory_uri();?>/js/navbar-ontop.js"></script>


  <script>
  (function(d) {
    var config = {
      kitId: 'rrw3rvp',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<!-- swiper -->
<style>
.swiper {
    width: 100%;
    height: 250px;
  }

.swiper-wrapper{
    height: 250px;
}

.swiper-slide {
    height: 250px;
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

</style>


</head>

<body class="" >

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-light mb-4" style="	background-image: url(<?php echo get_template_directory_uri(); ?>/img/background.jpg);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container"> <a class="navbar-brand" href="https://guaguastudio.net/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="40px" height="40px"></a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
      
      <?php wp_nav_menu(
          array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul id="" class="navbar-nav">%3$s</ul>'
          )

      ); ?>
      
      <!-- <ul class="navbar-nav">
          <li class="nav-item mx-2"> <a class="nav-link" href="#">Work</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="#">Illustration</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="#">About</a> </li>
        </ul> -->
      </div>
    </div>
  </nav>


