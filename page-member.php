<?php
  /**
 * Template Name: メンバー紹介
 */
 get_header();?>

    <?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>

  <div class="container">
    <div class="row m-2 border-top border-bottom" >
      <div class="col-12" data-aos="fade" data-aos-offset="200" data-aos-duration="1000">
        <p class="h4 py-3">メンバー紹介</p>
  		<p class="h3 py-1">【<?php the_title(); ?>】</p>
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

  <?php
      endwhile;
    endif;
    ?>

<?php get_footer();?>
