<?php get_header();?>

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>

	<div class="container">
    <div class="container">
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
    </div>

     <a href="<?php echo get_post_type_archive_link('news')?>">一覧へ戻る</a>
  </div>

  <?php
        endwhile;
      endif;
      ?>

  <?php get_footer();?>
