<?php
  /**
 * Template Name: メンバー紹介
 */
 get_header();?>

    <?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>
<section>
  <div class="container">
    <div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
      <div class="card bg-light text-black border-light">
        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law03.png" alt="">
        <div class="card-img-overlay">
          <h2 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">メンバー紹介</h2>
          <h3 class="card-text" data-aos="fade-in" data-aos-delay="500" data-aos-easing="linear" data-aos-duration="800">【<?php the_title(); ?>】</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card border-white" data-aos="fade" data-aos-offset="200" data-aos-duration="1000">
  		  <img class="card-img-top" src="<?php the_field('picture'); ?>" alt="">
          <div class="card-body">
            <p class="card-text">
              <?php the_content(); ?>

  			</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-body">facebook<br>
          <div class="fb-page" data-href="https://www.facebook.com/OfficeYamanaka/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OfficeYamanaka/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OfficeYamanaka/">Office Yamanaka　土地家屋調査士・司法書士・行政書士・測量士</a></blockquote></div>
        </div>
      </div>
    </div>
    <br>
  </div>
</section>
  <?php
      endwhile;
    endif;
    ?>

<?php get_footer();?>
