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
    <div class="d-block" class="py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
      <h2 class="member_line"><div data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">メンバー紹介</div></h2>
      <h3 data-aos="fade-in" data-aos-delay="500" data-aos-easing="linear" data-aos-duration="800"><?php the_title(); ?></h3>
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
      <div class="col-md-4 text-center">
        <div class="face_book p-2"><i class="fab fa-facebook-f fa-fw fb-iconcolor"></i>facebook</div>
          <div class="fb-page" data-href="https://www.facebook.com/OfficeYamanaka/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/OfficeYamanaka/" class="fb-xfbml-parse-ignore">
              <a href="https://www.facebook.com/OfficeYamanaka/">Office Yamanaka　土地家屋調査士・司法書士・行政書士・測量士</a>
            </blockquote>
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
