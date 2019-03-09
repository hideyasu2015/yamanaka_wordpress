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
<<<<<<< HEAD
        <div class="row">
          <div class="col-4">
            <div class="row">
            <div class="col-5"> <img src="<?php echo get_template_directory_uri(); ?>/images/human1r.jpg" class="img-fluid" alt=""> </div>
            <div class="col-7">
              <p><?php the_field('customer_name'); ?><br>
                <small><?php the_field('company'); ?></small> </p>
              </div>
          </div>
          </div>
        <div class="col-8 py-2 customor-box" data-aos-delay="300" data-aos="fade-in" data-aos-duration="1500">
          <div class="row">
          <div class="col-1 custmor-quote"><i class="fas fa-quote-left fa-lg"></i>
=======
      <div class="col-lg-6 m-5">
        <div class="row py-2 mx-xs-5 m-2 customor-box" data-aos-offset="300" data-aos="fade-in">
          <div class="col-1 custmor-quote"> <i class="fas fa-quote-left fa-lg color-red"></i>
>>>>>>> origin/yoshikawa
          </div>
          <div class="col-11 customor-voice">
            <dl>
              <dt><?php the_title(); ?></dt>
              <dd><?php echo wp_trim_words( get_the_content(), 55, '...' ); ?></dd>
            </dl>
            <a href="<?php the_permalink(); ?>">
<<<<<<< HEAD
              <button class="customer-button mx-auto d-inline-block">read more</button>
            </a>
          </div>
          </div>
          </div>
        </div>
        <hr>
=======
              <p>read more</p>
            </a> </div>
          </div>
          <div class="row px-3">
            <div class="col-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/human1r.jpg" class="img-fluid" alt=""> </div>
            <div class="col-10">
              <p><?php the_field('customer_name'); ?><br>
                <small><?php the_field('company'); ?></small> </p>
              </div>
            </div>
          </div>
>>>>>>> origin/yoshikawa
          <?php
        endwhile;
      endif;
      ?>
        </div>
      </section>


  <?php get_footer();?>
