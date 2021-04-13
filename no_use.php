<?php get_header();?>


<section>
	<div class="container">
		<div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
			<div class="card bg-dark text-black border-light">
				<img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law01.png" alt="">
				<div class="card-img-overlay">
					<h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">Q and A</h3>
				</div>
			</div>
		</div>
		<?php
			$QandA = new WP_Query(array(
				'post_per_page' => 2,
				'post_type' => 'q_and_a',
				'order' => 'ASC'
			));
			while($QandA->have_posts()){
				$QandA->the_post(); ?>

  <div class="row">
		<div class="q-and-a-select">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
  </div>

<?php }
		?>
  <br>
</div>
</section>

<?php get_footer();?>
