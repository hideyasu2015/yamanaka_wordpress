<?php get_header();?>

<?php if ( have_posts() ):
while ( have_posts() ) : the_post();
?>

	<div class="container">
		<div class="row m-2 border-top border-bottom" id="q_and_a">
		    <h1>業務内容</h1>
		</div>
		<?php
			$jobContent = new WP_Query(array(
				'post_per_page' => 2,
				'post_type' => 'job_content'
			));
			while($jobContent->have_posts()){
				$jobContent->the_post(); ?>



				      <?php }
				      ?>
  <br>
</div>
<?php
			endwhile;
		endif;
		?>
<?php get_footer();?>
