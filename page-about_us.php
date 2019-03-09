<?php
/**
* Template Name: 事務所概要
*/
get_header();?>

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>

  <section>
    <!-- <div class="container">
      <div class="row py-2 mx-xs-5 m-2" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1500">
        <div class="card bg-dark text-black border-light">
          <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/bg_img_law01.png" alt="">
          <div class="card-img-overlay">
            <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">事務所概要</h3>
            <p class="card-text" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">OfficeYamanakaについて</p>
          </div>
        </div>
      </div>
    </div> -->

    <div id="para1">
    	<div class="first">
        <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">事務所概要</h3>
        <p class="card-text" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">OfficeYamanakaについて</p>
      </div>
    	<div class="article1">
        <h2>土地家屋調査士は、法務省の土地家屋調査士国家試験に合格した者に与えられる国家資格です。</h2>
        <p>
            一般にはなかなか馴染みがないかもしれませんが、専門的な法知識と測量技術で権利客体としての不動産を調査し、その場所や範囲・用途等を特定し登記することが主な業務となります。<br>
            <br>
            不動産は二つと同じものがなく、また何代も受け継がれてゆく大切な財産です。したがって我々の業務も一つ一つがオーダーメイドであり、
              また数十年後の安心をお約束できる信頼性の高いものでなくてはならないと考えております。<br>
              <br>
              Office Yamanakaでは土地家屋調査士業務を核としながら行政書士業務を兼ねる事でよりスムーズで信頼性の高い問題解決を実現してゆきます。<br>
              <br>
              先々代がこの可部の地で開業してより40年余、『境界の専門家』として、また不動産の取引、家の新築、相続といった場面で不動産登記を通じて皆様の生活・地域社会のお役に立って行けるよう私自身も法令・実務における研鑽を重ねて参りたいと存じます。
        </p>
      </div>
    	<div class="article2">
        <div class="profile">
        <h2>プロフィール</h2>
          <ul>
            <li>昭和53年広島生まれ</li>
            <li>広島県立　安古市高校</li>
            <li>大阪大学　外国語学部</li>
            <li>（旧大阪外国語大学）を卒業</li>
            <li>地元事務所で実務経験を積みながら資格取得</li>
            <li>趣味は音楽鑑賞、美術鑑賞、写真等</li>
            <li>特技はピアノやギター演奏</li>
            <li>地元のアマチュアバンドでも演奏しております</li>
          </ul>
          <h3>ブログ</h3>
           <a href="http://takumi-officeyamanaka.tumblr.com/Office"> Yamanaka別館-匠屋- </a>
           <a href="https://www.facebook.com/takumi.yamanaka">Facebook</a> （気軽に友達申請して下さい）
         </div>
      </div>
    	<div class="article3"><h2>事務所概要</h2></div>
    </div>

      </section>
      <?php
    endwhile;
  endif;
  ?>

  <?php get_footer();?>
