<?php get_header();?>

<section>
	<div class="container">

		<div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
			<div class="card bg-dark text-black border-light">
				<img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law01.png" alt="">
				<div class="card-img-overlay">
					<h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">業務内容</h3>
				</div>
			</div>
		</div>
		<div id="job_list">
			<div class="row details">
				<div class="col-4 type1">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/box-image1.jpg" class="img-fluid">
					</a>
					<dl>
						<dt></dt>
						<dd>どのような手続きを行う場合にもまず必要となる基本的な調査です。</dd>
					</dl>
						<p>公図・地積測量図・登記の経緯等の登記情報調査</p>
					</div>
					<div class="col-4 type1">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/box-image2.jpg" class="img-fluid">
						</a>
						<dl>
							<dt></dt>
							<dd>登記情報を、書類・図面上で調査した後、現地の土地・建物を調査します。</dd>
						</dl>
						<p>登記情報調査に基づく現地調査</p>
					</div>
					<div class="col-4 type1">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/box-image4.jpg" class="img-fluid">
						</a>
						<dl>
							<dt></dt>
							<dd>境界の調査と法律的な判断とそれに基づく測量は土地家屋調査士が専門とし、たんに測量技術職ではなく所謂、隣接法律専門職である一つの大きな理由となっている分野です。</dd>
						</dd>
					</dl>
					<p>境界の鑑定調査・測量</p>
				</div>


			</div>
		</div>


		<br>
	</div>
</section>

<?php get_footer();?>
