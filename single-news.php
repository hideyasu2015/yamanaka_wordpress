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

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>
  <div class="text-center h2" data-aos-offset="300" data-aos="fade-in"><?php the_title(); ?></div>
  <div class="row">
    <div class="col-8 offset-2 p-2">
     <?php the_post_thumbnail(); ?>
    </div>
  </div>
    <div class="row py-2 mx-5 m-2" data-aos-offset="300" data-aos="fade-in">
      <div class="col-md-8 offset-md-2 pb-3">
        <time datetime="<?php the_time('Y-n-j'); ?>" class="p-2">
          <?php the_time('Y年n月j日'); ?>
        </time>
        <hr>
      <?php the_content(); ?>
      </div>
     <a href="<?php echo get_post_type_archive_link('news')?>" class="col-md-4 m-3">一覧へ戻る</a>
     </div>
     <?php
   endwhile;
   endif;
   ?>
   </div>
   </section>

  <?php get_footer();?>
