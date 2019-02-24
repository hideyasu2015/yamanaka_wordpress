<?php get_header();?>

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>

  <section id="team-section">
  	<div class="container">
      <h2 class="py-3">会社概要</h2>
      <!--y:2/15 レスポンシブレイアウト-->
      
    </div>
  </section>



  <?php
        endwhile;
      endif;
      ?>

  <?php get_footer();?>
