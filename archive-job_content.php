<?php get_header();?>

<section>
	<div class="container">
		<div class="container">
		  <div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
		    <div class="card bg-dark text-black border-light">
		      <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law01.png" alt="">
		      <div class="card-img-overlay">
		        <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">業務内容</h3>
		      </div>
		    </div>
		  </div>
		</div>
		<?php
			$jobContent = new WP_Query(array(
				'post_type' => 'job_content'
			));
			while($jobContent->have_posts()){
				$jobContent->the_post(); ?>




				      <?php }
				      ?>
  <br>
</div>
</section>

		?>
<?php get_footer();?>
