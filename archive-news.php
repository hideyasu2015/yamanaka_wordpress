<?php get_header();?>
<section id="blog-section">
  <div class="container">
    <div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
      <div class="card bg-dark text-black border-light">
        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law01.png" alt="">
        <div class="card-img-overlay">
          <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">NEWS</h3>
        </div>
      </div>
    </div>
    </div>

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>
  <div class="container">
  <hr>
  <div class="row">
    <div class="col-md-4">
     <?php the_post_thumbnail(); ?>
    </div>
  <div class="col-md-8 py-2" data-aos-delay="300" data-aos="fade-in" data-aos-duration="1500">
    <div class="row m-2 slide-left" data-aos="fade-in" data-aos-duration="1000">
      <div class="col-3 col-md-2 ">
        <div class="calender-red offset-md-1">
          <time datetime="<?php the_time('Y年n月j日'); ?>">
            <?php the_time('j日'); ?>
          </time>
        </div>
        <div class="calender-bottom offset-md-1">
          <time datetime="<?php the_time('Y年n月j日'); ?>">
            <?php the_time('n月'); ?>
          </time>
        </div>
      </div>
      <div class="col-9 col-md-10 ">
        <time datetime="<?php the_time('Y-n-j'); ?>">
          <?php the_time('Y年n月j日'); ?>
        </time>
        <p class="news-title"><?php the_title(); ?></p>
        <p class="news-desc"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
        <a href="<?php the_permalink(); ?>" class="col-md-4 m-3">
          <p>read more</p>
        </a>
      </div>
    </div>
    </div>
    </div>
  </div>
    <?php
  endwhile;
  endif;
  ?>
  </div>
  </section>

  <?php get_footer();?>
