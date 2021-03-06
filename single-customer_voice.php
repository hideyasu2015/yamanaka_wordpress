<?php get_header(); ?>

<?php if (have_posts()) :
  while (have_posts()) : the_post();
?>
    <section>
      <div class="container">
        <div class="row py-2 mx-xs-5 m-2" data-aos="fade-in" data-aos-duration="1500">
          <div class="card bg-dark text-black border-light">
            <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/customer_voice.jpg" alt="">
            <div class="card-img-overlay">
              <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">お客様の声</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row m-md-5 p-3" data-aos="fade-in" data-aos-duration="1500">
          <div class="col-4">
            <img src="<?php the_field('icon_img'); ?>" class="img-fluid" alt="">
          </div>
          <div class="col-8">
            <p><?php the_field('customer_name'); ?><br>
              <small><?php the_field('company'); ?></small>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="enjoy-css shadow" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
            <div class="row justify-content-around">
              <div class="col-md-4 mx-3 mx-md-1 p-3 bg-light shadow custmor_voice_text">
                <p>Q1.今回の依頼した業務の内容はどんなものでしたか？</p>
              </div>
              <div class="col-md-7 pt-4 pt-md-2 py-3 custmor_voice_text">
                A. <?php the_field('q1'); ?>
              </div>
            </div>
          </div>
          <div class="enjoy-css shadow" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
            <div class="row justify-content-around">
              <div class="col-md-4 mx-3 mx-md-1 p-3 bg-light shadow custmor_voice_text">
                <p>Q2. 今回の仕事の内容はどんな問題がありましたか？</p>
              </div>
              <div class="col-md-7 p-2 custmor_voice_text">
                A. <?php the_field('q2'); ?>
              </div>
            </div>
          </div>

          <div class="enjoy-css shadow" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
            <div class="row justify-content-around">
              <div class="col-md-4 mx-3 mx-md-1 p-3 bg-light shadow custmor_voice_text">
                <p>Q3. 山中事務所に頼んで良かったと思った点はなんですか？</p>
              </div>
              <div class="col-md-7 p-2 custmor_voice_text">
                A. <?php the_field('q3'); ?>
              </div>
            </div>
          </div>

          <div class="enjoy-css shadow" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
            <div class="row justify-content-around">
              <div class="col-md-4 mx-3 mx-md-1 p-3 bg-light shadow custmor_voice_text">
                <p>Q4. これからもお願いしたいとお思いますか？</p>
              </div>
              <div class="col-md-7 p-2 custmor_voice_text">
                A. <?php the_field('q4'); ?>
              </div>
            </div>
          </div>

        </div>

        <div class="col-md-4 m-3">
          <a href="<?php echo get_post_type_archive_link('customer_voice') ?>"><button class="customer-button mx-auto d-inline-block">お客様の声一覧</button></a>
        </div>
      </div>
    </section>
<?php
  endwhile;
endif;
?>

<?php get_footer(); ?>