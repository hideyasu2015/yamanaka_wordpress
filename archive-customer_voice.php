<?php get_header();?>
  <section>
    <div class="container">
      <div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
        <div class="card bg-dark text-black border-light">
          <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law01.png" alt="">
          <div class="card-img-overlay">
            <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">お客様の声</h3>
          </div>
        </div>
      </div>


      <?php if ( have_posts() ):
        while ( have_posts() ) : the_post();
        ?>
        <hr>
        <div class="row">
          <div class="col-md-4">
          <div class="row">
            <div class="col-5"> <img src="<?php the_field(icon_img); ?>" class="img-fluid" alt=""> </div>
            <div class="col-7">
              <p><?php the_field('customer_name'); ?><br>
                <small><?php the_field('company'); ?></small> </p>
              </div>
          </div>
          </div>
        <div class="col-md-8 py-2 customor-box" data-aos-delay="300" data-aos="fade-in" data-aos-duration="1500">
          <div class="row">
          <div class="col-1 custmor-quote"><i class="fas fa-quote-left fa-lg"></i>
          </div>
          <div class="col-11 customor-voice">
            <dl>
              <dt><?php the_title(); ?></dt>
              <dd><?php echo wp_trim_words( get_the_content(), 55, '...' ); ?></dd>
            </dl>
            <a href="<?php the_permalink(); ?>">
              <button class="customer-button col-md-4 m-3 mx-auto d-inline-block">read more</button>
            </a>
          </div>
          </div>
          </div>
        </div>
        <hr>
          <?php
        endwhile;
      endif;
      ?>
        </div>
      </section>


  <?php get_footer();?>
