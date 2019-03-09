<?php get_header();?>

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>
<section>
	<div class="container">
    <div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
			<div class="card bg-dark text-black border-light">
				<img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law01.png" alt="">
				<div class="card-img-overlay">
					<h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">公図・地積測量図・登記の経緯等の登記情報調査</h3>
				</div>
			</div>
		</div>
    </div>

<div class="container">
    <figure class="snip1110">
  <img src="<?php echo get_template_directory_uri(); ?>/images/box-image4.jpg" alt="sample53" />
  <figcaption>
    <h3>公図・地積測量図・登記の経緯等の登記情報調査</h3>
    <p>どのような手続きを行う場合にもまず必要となる基本的な調査です。</p>
<p>該当土地・建物について公図、地積測量図、建物図面や登記簿の調査を行い現在に至るまでの登記の経緯等を調査します。また、お客様がお持ちの資料についても調査致します。</p>
<p>調査結果によっては現地調査を行い、依頼人様へのご説明の後必要であれば各種登記等手続きへと移らせて頂きます。</p>
  </figcaption>
  <a href="#"></a>
</figure>

<figure class="snip1110 blue">
  <img src="<?php echo get_template_directory_uri(); ?>/images/box-image1.jpg" class="img-fluid" alt="sample54" />
  <figcaption>
    <h3>こんな方に・・・</h3>
    <p>・ご自分の土地・建物の登記に疑問や不安のある方<br>
・金融機関・不動産業者、工務店、司法書士、税理士等から調査士業務が必要だと言われた方　...等

</p>
  </figcaption>
  <a href="#"></a>
</figure>

<figure class="snip1110 red"><img src="<?php echo get_template_directory_uri(); ?>/images/box-image2.jpg" class="img-fluid" alt="sample55" />
  <figcaption>
    <h3>期間・報酬は？</h3>
    <p>調査の結果から現地調査や登記、各種許認可手続き等へ移る場合には登記情報調査のみで報酬を戴くということはありませんが、登記情報の調査のみ行った場合、<br>

平均的に<br>

期間：１～３日<br>
報酬：公図・図面・登記記録取得に掛かった実費立替分＋￥5000~￥10000程度<br>

になります。<br>

期間・報酬は取得する必要のある図面・登記簿の数、管轄する法務局（支局・出張所）の場所等によって異なります。</p>
  </figcaption>
  <a href="#"></a>
</figure>
<br>
     <a href="<?php echo get_post_type_archive_link('job_content')?>"><button class="customer-button mx-auto d-inline-block">一覧へ戻る</button></a>
  </div>
  <br>
</section>
  <?php
        endwhile;
      endif;
      ?>

  <?php get_footer();?>
