<?php
/**
* Template Name: 不動産調査
*/
get_header();?>

    <?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>


<div class="container">

</div>
<?php
      endwhile;
    endif;
    ?>

<?php get_footer();?>
