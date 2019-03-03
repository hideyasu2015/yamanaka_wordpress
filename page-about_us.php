<?php
/**
* Template Name: 事務所概要
*/
get_header();?>

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>

  <section id="page_layout">
    <div class="container">
      <div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
        <div class="card bg-dark text-black border-light">
          <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law01.png" alt="">
          <div class="card-img-overlay">
            <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">事務所概要</h3>
            <p class="card-text data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800"">OfficeYamanakaについて</p>
          </div>
        </div>
      </div>
      <br>
      <h3>代表者より</h3>
      <br>
      <div class="row">
        <div class="col-3">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/image_01.jpg" alt="">
        </div>
        <div class="col-9">
          <p>土地家屋調査士は、法務省の土地家屋調査士国家試験に合格した者に与えられる国家資格です。</p>
          <p>一般にはなかなか馴染みがないかもしれませんが、専門的な法知識と測量技術で権利客体としての不動産を調査し、その場所や範囲・用途等を特定し登記することが主な業務となります。</p>
          <p>不動産は二つと同じものがなく、また何代も受け継がれてゆく大切な財産です。したがって我々の業務も一つ一つがオーダーメイドであり、
            また数十年後の安心をお約束できる信頼性の高いものでなくてはならないと考えております。</p>
            <p>Office Yamanakaでは土地家屋調査士業務を核としながら行政書士業務を兼ねる事でよりスムーズで信頼性の高い問題解決を実現してゆきます。</p>
            <p>先々代がこの可部の地で開業してより40年余、『境界の専門家』として、また不動産の取引、家の新築、相続といった場面で不動産登記を通じて皆様の生活・地域社会のお役に立って行けるよう私自身も法令・実務における研鑽を重ねて参りたいと存じます。</p>
          </div>
        </div>
        <div class="row">
          <div class="col-9">
            <dl class="row">
              <dt>プロフィール</dt>
              <dd>昭和53年広島生まれ</dd>
              <br>
              <dd>広島県立　安古市高校</dd>
              <dd>広島県立　安古市高校</dd>
              <dd>大阪大学　外国語学部</dd>
              <dd>（旧大阪外国語大学）を卒業</dd>
              <br>
              <dd>地元事務所で実務経験を積みながら資格取得</dd>
              <br>
              <dd>趣味は音楽鑑賞、美術鑑賞、写真等</dd>
              <dd>特技はピアノやギター演奏</dd>
              <dd>地元のアマチュアバンドでも演奏しております</dd>
              <br>
              <dt>＜ブログ＞</dt>
              <dd><a href="http://takumi-officeyamanaka.tumblr.com/Office"> Yamanaka別館-匠屋- </a></dd>
              <dd><a href="https://www.facebook.com/takumi.yamanaka">Facebook</a> （気軽に友達申請して下さい）</dd>
            </dl>
          </div>
          <div class="col-3">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/image_02.jpg" alt="">
          </div>
        </div>
          </div>
      </section>
      <?php
    endwhile;
  endif;
  ?>

  <?php get_footer();?>
