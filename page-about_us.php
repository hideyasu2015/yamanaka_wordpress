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
    <div class="for-bgimage">
      <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">事務所概要</h3>
      <p class="card-text" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">OfficeYamanakaについて</p>
    </div>
  </div>

  <div class="article1 text-center">
    <div class="col-10 offset-2 col-md-6 offset-md-3 pt-5">
    <p>土地家屋調査士は、法務省の土地家屋調査士国家試験に合格した者に与えられる国家資格です。<br>
      <br>
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
  </div>
  <div class="article2">
    <div class="for-bgimage">
      <div class="profile">
        <h4>プロフィール</h4>
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
        <h4>ブログ</h4>
        <a href="http://takumi-officeyamanaka.tumblr.com/Office"> Yamanaka別館 -匠屋- </a><br>
        <br>
        <a href="https://www.facebook.com/takumi.yamanaka">Facebook</a> （気軽に友達申請して下さい）
      </div>
    </div>
  </div>
  <div class="article3">
    <h4>事務所概要</h4>
    <br>
    <div class="col-8">
    <table>
      <tbody>
        <tr>
          <td>事務所名</td>
          <td>Office Yamanaka（オフィス ヤマナカ）<br>
            <br>
            山中 匠 土地家屋調査士事務所<br>
            山中 進 行政書士事務所<br>
          </td>
        </tr>
        <tr>
          <td>電話・FAX番号</td>
          <td>082-814-2658（電話/Fax共に）</td>
        </tr>
        <tr>
          <td>住所</td>
          <td>〒731-0231<br>
            広島県広島市安佐北区亀山一丁目２番１９－１２号
          </td>
        </tr>
        <tr>
          <td>営業時間</td>
          <td>（月）～（金） 9:00～17:00</td>
        </tr>
        <tr>
          <td>業務内容</td>
          <td>
            ・土地建物の調査・測量<br>
            ・土地境界の調査･鑑定<br>
            ・土地分筆、合筆、地目変更等の登記<br>
            ・建物の新築、増築、合体等の登記<br>
            ・各種許認可申請<br>

            などを取り扱います。<br>
            境界や土地・建物に関するご不安や、疑問等ございましたら、お気軽にご相談ください。
          </td>
        </tr>
        <tr>
          <td>所属・関係団体</td>
          <td>
            広島県土地家屋調査士会（山中 匠）<br>
            広島県行政書士会（山中 進）<br>
            日本測量協会（山中 匠）<br>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
  </div>
</div>

</section>
<?php
endwhile;
endif;
?>

<?php get_footer();?>
