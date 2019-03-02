<?php get_header();?>

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>

	<div class="container pt-10">


            <div class="col-lg-6">
              <div class="row py-2 mx-xs-5 m-2 customor-box" data-aos-offset="300" data-aos="fade-in">
                <div class="col-1 custmor-quote"> <i class="fas fa-quote-left fa-lg color-red"></i>
                  <!--					<img src="images/quote.png" alt="">-->
                </div>
                <div class="col-11 customor-voice">
                  <dl>
                    <dt><?php the_title(); ?></dt>
                    <dd><?php echo wp_trim_words( get_the_content(), 55, '...' ); ?></dd>
                  </dl>
                  <a href="<?php the_permalink(); ?>">
                  <p>read more</p>
                  </a> </div>
              </div>
              <div class="row px-3">
                <div class="col-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/human1r.jpg" class="img-fluid" alt=""> </div>
                <div class="col-10">
                  <p>Aiu Eo<br>
                    <small>company name</small> </p>
                </div>
              </div>
            </div>

  </div>
  <?php
        endwhile;
      endif;
      ?>

  <?php get_footer();?>
