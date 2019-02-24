<?php get_header();?>

    <?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>

<!--メンバー紹介-->
<div class="container">
  <div class="row m-2 border-top border-bottom" id="<?php the_ID();?>">
    <div class="col-11 offset-1">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card border-white"> <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/human4.jpg" alt="">
        <div class="card-body">
          <p class="card-text"> <?php the_content(); ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-body">facebook<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>
  <br>
</div>

<?php get_footer();?>
