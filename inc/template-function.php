<?php


function clinic_header_logo(){
     $header_logo = get_theme_mod('header_logo', get_template_directory_uri(). '/assets/img/logo.png')

     ?>
        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo $header_logo; ?>" alt=""></a>
     <?php
}

function clinic_header_social(){
     $header_fb_url = get_theme_mod('header_fb_url', '#');
     $header_twitter_url = get_theme_mod('header_twitter_url', '#');
     $header_instagram_url = get_theme_mod('header_instagram_url', '#');
     $header_linkedin_url = get_theme_mod('header_linkedin_url', '#');

     ?>
          <?php if(!empty($header_fb_url)) : ?>
          <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href="<?php echo $header_fb_url; ?>"><i class="fab fa-facebook-f"></i></a>
          <?php endif; ?>

          <?php if(!empty($header_twitter_url)) : ?>
          <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href="<?php echo $header_twitter_url; ?>"><i class="fab fa-twitter"></i></a>
          <?php endif; ?>

          <?php if(!empty($header_linkedin_url)) : ?>
          <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href="<?php echo $header_linkedin_url; ?>"><i class="fab fa-linkedin-in"></i></a>
          <?php endif; ?>

          <?php if(!empty($header_instagram_url)) : ?>
          <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href="<?php echo $header_instagram_url; ?>"><i class="fab fa-instagram"></i></a>
          <?php endif; ?>


     <?php
}