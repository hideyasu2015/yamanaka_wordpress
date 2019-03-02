<?php get_header();?>

<?php if ( have_posts() ):
while ( have_posts() ) : the_post();
?>

	<div class="container">
		<div class="row m-2 border-top border-bottom" id="q_and_a">
		    <h1>Q and A</h1>
		</div>
		<?php
			$customerVoice = new WP_Query(array(
				'post_per_page' => 2,
				'post_type' => 'customer_voice'
			));
			while($customerVoice->have_posts()){
				$customerVoice->the_post(); ?>



				      <?php }
				      ?>

							
<div class="row m-2 border-top border-bottom" id="q_and_a">
    <h1><?php the_title(); ?></h1>
</div>
  <div class="row">
    <div class="col-md-8">
      <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a class="text-body" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
          質問１
        </a>
      </h5>
    </div><!-- /.card-header -->
    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        解答１
      </div><!-- /.card-body -->
    </div><!-- /.collapse -->
  </div><!-- /.card -->
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed text-body" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
          質問１
        </a>
      </h5>
    </div><!-- /.card-header -->
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        解答１
      </div><!-- /.card-body -->
    </div><!-- /.collapse -->
  </div><!-- /.card -->
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed text-body" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
          質問１
        </a>
      </h5>
    </div><!-- /.card-header -->
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        解答１
      </div><!-- /.card-body -->
    </div><!-- /.collapse -->
  </div><!-- /.card -->
</div><!-- /#accordion -->
    </div>
    <div class="col-md-4 mt-2">
      <div class="card card-body border"><br>
        <p></p>

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
