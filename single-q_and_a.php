<?php get_header();?>

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>
<section>
  	<div class="container">
      <div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
        <div class="card bg-dark text-black border-light">
          <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law01.png" alt="">
          <div class="card-img-overlay">
            <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">Q and A</h3>
          </div>
        </div>
      </div>
                <div class="col-lg-6">
                  <div class="row py-2 mx-xs-5 m-2 customor-box" data-aos-offset="300" data-aos="fade-in">
                    <div class="col-1 custmor-quote"> <i class="fas fa-quote-left fa-lg color-red"></i>
                    </div>
                    <div class="col-11 customor-voice">
                      <dl>
                        <dt><?php the_title(); ?></dt>
                        <dd><?php the_content(); ?></dd>
                      </dl>
                    </div>
                  </div>
                  <div class="row px-3">
                    <div class="col-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/human1r.jpg" class="img-fluid" alt=""> </div>
                    <div class="col-10">
                      <p>Aiu Eo<br>
                        <small>company name</small> </p>
                    </div>
                  </div>
                </div>
        <a href="<?php echo get_post_type_archive_link('q_and_a')?>">一覧へ戻る</a>
    </div>
</section>
  <?php
        endwhile;
      endif;
      ?>

  <?php get_footer();?>
