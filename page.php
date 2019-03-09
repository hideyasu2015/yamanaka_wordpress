<?php get_header();?>

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>

  <section id="page_layout">
    <div class="container">
      <div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
        <div class="card bg-dark text-black border-light">
          <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law01.png" alt="">
          <div class="card-img-overlay">
            <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800"><?php the_title(); ?></h3>
            <p class="card-text data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800"">サブタイトル</p>
          </div>
        </div>
      </div>
      <br>
      <br>
      <?php the_content(); ?>

    </div>
  </section>
  <?php
endwhile;
endif;
?>

<?php get_footer();?>
