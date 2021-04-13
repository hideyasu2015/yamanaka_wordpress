<?php get_header(); ?>

<section>
  <div class="container">
    <div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
      <div class="card bg-dark text-black border-light">
        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/various_images.jpg" alt="">
        <div class="card-img-overlay">
          <h3 class="job_content_overlay" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">公図・地積測量図・登記の経緯等の登記情報調査</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <ul id="tab_headline">
          <?php
          $JobContent = new WP_Query(array(
            'post_per_page' => -1,
            'post_type' => 'job_content'
          ));
          while ($JobContent->have_posts()) {
            $JobContent->the_post(); ?>
            <?php if ($JobContent->current_post == 0) : ?>
              <li class="current job-content-select"><a href="javascript:void(0)"><i class="fas fa-chevron-circle-right fa-fw"></i><?php the_title(); ?></a></li>
            <?php else : ?>
              <li class="job-content-select"><a href="javascript:void(0)"><i class="fas fa-chevron-circle-right fa-fw"></i><?php the_title(); ?></a></li>
            <?php endif; ?>
          <?php }
          ?>
        </ul>
      </div>
      <div class="col-md-9">
        <ul id="tab_content">
          <?php
          $JobContent = new WP_Query(array(
            'post_per_page' => -1,
            'post_type' => 'job_content'
          ));
          while ($JobContent->have_posts()) {
            $JobContent->the_post(); ?>
            <?php if ($JobContent->current_post == 0) : ?>
              <li class="current">
              <?php else : ?>
              <li>
              <?php endif; ?>
              <h4><?php the_title(); ?></h4>
              <br>
              <hr>
              <p><?php the_content(); ?></p>
              <br>
              <h5>こんな方に・・・</h5>
              <hr>
              <p><?php the_field('for_this_custmer'); ?></p>
              <br>
              <h5>期間・報酬は？</h5>
              <hr>
              <p><?php the_field('periods_and_rewards'); ?></p>
              <br>
              </li>
            <?php }
            ?>
            <?php wp_reset_postdata(); ?>
        </ul>
      </div>
    </div>
    <br>
  </div>
  <br>
</section>


<?php get_footer(); ?>