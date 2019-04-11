<?php
/**
* Template Name: 事務所概要
*/
get_header();?>

<?php if ( have_posts() ):
  while ( have_posts() ) : the_post();
  ?>

  <div id="para1">
    <div class="container-fluid pt-md-5">
    <div class="first">
      <div class="for-bgimage">
        <div class="about_us_titile">
          <br>
          <h3 class="card-title" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">事務所概要</h3>
          <p class="card-text" data-aos="fade-in" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="800">OfficeYamanakaについて</p>
        </div>
      </div>
    </div>

    <div class="article1 text-center">
        <div class="row">
          <div class="col-10 offset-1 col-md-8 offset-md-2 pt-5">
            <p>土地家屋調査士は、法務省の土地家屋調査士国家試験に合格した者に与えられる国家資格です。<br>
              <br>
              一般にはなかなか馴染みがないかもしれませんが、専門的な法知識と測量技術で権利客体としての不動産を調査し、その場所や範囲・用途等を特定し登記することが主な業務となります。<br>
              <br>
              不動産は二つと同じものがなく、また何代も受け継がれてゆく大切な財産です。したがって我々の業務も一つ一つがオーダーメイドであり、
              また数十年後の安心をお約束できる信頼性の高いものでなくてはならない、と考えております。<br>
              <br>
              Office&nbsp;Yamanakaでは土地家屋調査士業務を核としながら、行政書士業務を兼ねる事で、よりスムーズで信頼性の高い問題解決を実現してゆきます。<br>
              <br>
              先々代がこの可部の地で開業してより40年余、『境界の専門家』として、また不動産の取引、家の新築、相続といった場面で不動産登記を通じて皆様の生活・地域社会のお役に立って行けるよう私自身も法令・実務における研鑽を重ねて参りたいと存じます。
            </p>
          </div>
        </div>
    </div>
    </div>
    <br><br><br><br><br>

    <div class="container pt-md-5" style="overflow: hidden !important;">
    <div class="article2 pt-sm-5">
        <div class="mx-auto pt-md-5"><h4>事務所概要</h4></div>
        <br><br>
        <table class="table table-striped table-bordered">
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
              広島県広島市安佐北区亀山一丁目2番19－12号
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
        </table>
    </div>
    <br><br>
    <div class="article3 ">
        <div class="mx-auto"><h4>事務所沿革</h4></div>
        <br>
          <div class="timeline-container">
            <ul>
              <li>
                <div>
                  <h2>山中  守 </h2>
                  <small>昭和32年12月2日</small>
                  <p>日本土地家屋調査士連合会登録：広島第379号</p>
                    <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/history_01.png" alt="">
                </div>
              </li>
              <li>
                <div>
                  <h2>山中  守 </h2>
                  <small>昭和45年1月10日</small>
                  <p>広島県土地家屋調査士会入会</p>
                </div>
              </li>
              <li>
                <div>
                  <h2>山中  進</h2>
                  <small>昭和57年1月8日</small>
                  <p>日本土地家屋調査士会連合会登録：広島第1352号</p>
                  <p>広島県土地家屋調査士会入会</p>
                  <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/history_02.png" alt="">
                </div>
              </li>
              <li>
                <div>
                  <h2>山中  匠</h2>
                  <small>平成23年2月10日</small>
                  <p>日本土地家屋調査士会連合会登録：広島第1824号</p>
                </div>
              </li>
              <li>
                <div>
                  <h2>星野  木綿希</h2>
                  <small>平成26年10月6日</small>
                  <p>広島司法書士会登録：広島第1047号</p>
                </div>
              </li>
            </ul>
          </div>
    </div>
    </div>
    <br><br>
    <hr>
  </div>
</div>
<br><br>


<?php
endwhile;
endif;
?>

<?php get_footer();?>
