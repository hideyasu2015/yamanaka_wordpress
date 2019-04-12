<?php get_header();?>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="3000">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/top_commandview_r.jpg" alt="第1スライド">
    </div>
    <div class="carousel-item" data-interval="3000">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/top_family.jpg" alt="第2スライド">
    </div>
    <div class="carousel-item" data-interval="3000">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/top_shakehands.jpg" alt="第3スライド">
    </div>
    <div class="carousel-item" data-interval="3000">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/top_meeting.jpg" alt="第４スライド">
    </div>
  </div>
</div>
<div class="container" id="front-container" style="overflow: hidden !important;">
  <section id="message-section">
  <br>
  <br>
  <br>
    <div class="justify-content-center">
      <!-- <div class="col-8"> -->
        <div class="message-bottom p-2">
          <h2 class="text-center" data-aos="zoom-out-down" data-aos-duration="1000">信頼されるまちの法律相談所</h2>
        </div>
        <div class="message-top p-2">
          <div class="slide-left">
            <p class="text-wrap text-center" data-aos="fade-down" data-aos-offset="200" data-aos-duration="1000">やまなか事務所は広島の司法書士/<br>土地家屋調査士/行政書士事務所です</p>
          </div>
        </div>
      <!-- </div> -->
    </div>
</section>
<br>
<br>
<br>

<section id="team-section">
  <h2 class="py-3" data-aos="fadeInUp" data-aos-offset="200" data-aos-duration="1000">事務所メンバー</h2>
  <!--y:2/15 レスポンシブレイアウト-->
  <div class="card-deck">
    <div class="card my-2 img-thumbnail" data-aos="fade-left" data-aos-duration="1000">
      <div class="card_img">
        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/member_1.png" alt="">
        <p class="mx-auto">山中  匠<br />&nbsp;土地家屋調査士</p>
      </div>
      <div class="card-body">
        <p class="card-text pt-3"> 先々代がこの可部の地で開業してより40年余、『境界の専門家』として、
          また不動産の取引、家の新築、相続といった場面で不動産登記を通じて皆様の生活・地域社会のお役に立って行けるよう私自身も法令・実務における研鑽を重ねて参りたいと存じます。
        </p>
      </div>
      <div class="card-footer">
        <a href="https://yamanaka-office.hideyasu.xyz/member-1"><button class="profile-button mx-auto d-inline-block">Profile</button></a>
      </div>
    </div>

    <div class="card my-2 img-thumbnail" data-aos="fade-left" data-aos-offset="150" data-aos-duration="1000">
      <div class="card_img">
        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/member_2.jpg" alt="">
        <p>山中  智保<br />&nbsp;司法書士</p>
      </div>
      <div class="card-body">
        <p class="card-text pt-3">時代に沿った仕方でちゃんとやっていきたい。司法書士も業務がどんどん増えてきている　けれども、登記の仕事はもちろんエキスパートでないといけないと思うし、これから広がっていく仕事も、外から見たら司法書士って、、
        </p>
      </div>
      <div class="card-footer">
        <a href="https://yamanaka-office.hideyasu.xyz/member-2"><button class="profile-button mx-auto d-inline-block">Profile</button></a>
      </div>
    </div>

    <div class="card my-2 img-thumbnail" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000">
      <div class="card_img">
        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/member_3.png" alt="">
        <p>山中  渉<br />&nbsp;補助者</p>
      </div>
      <div class="card-body">
        <p class="card-text pt-3"> 自分が今できることは機械を使って測ることがメインだと思うので、そしてそこから図面を描くことなので、
          そこはきっちり正確にできるようにとは思ってやっています。
          測量学もどんどん進歩していっているし。計算や測量法なんかも、、</p>
        </div>
        <div class="card-footer">
          <a href="https://yamanaka-office.hideyasu.xyz/member-3"><button class="profile-button mx-auto d-inline-block">Profile</button></a>
        </div>
      </div>

    <div class="card my-2 img-thumbnail" data-aos="fade-left" data-aos-offset="250" data-aos-duration="1000">
        <div class="card_img">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/member_4.png" alt="">
          <p>星野  木綿希<br />&nbsp;司法書士</p>
        </div>
        <div class="card-body">
          <p class="card-text pt-3"> 私が心がけているのは、以前やったことのある業務でも、常に新しい気持ちで取り組む事です。
            登記業務でうれしいときは、お客様や本人さん、そのご家族に、信頼してもらえた！と感じた瞬間です。｢また何かあったらお願いするね｣と言っていただけたときですね。</p>
          </div>
          <div class="card-footer">
            <a href="https://yamanaka-office.hideyasu.xyz/member-4"><button class="profile-button mx-auto d-inline-block">Profile</button></a>
          </div>
        </div>
  </div>
</section>

<section id="box-section">
  <h2 class="py-3" data-aos="fadeInUp" data-aos-offset="200" data-aos-duration="1000">お客さまの声</h2>
  <div class="box-lists row-eq-height">
    <div class="row">
      <?php
      $customerVoice = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'customer_voice'
      ));
      while($customerVoice->have_posts()){
        $customerVoice->the_post();
        ?>
        <div class="col-md-6">
          <div class="wrap">
            <div class="row h-17 py-2 mx-xs-5 m-2 customor-box" data-aos-offset="300" data-aos="fade-in" data-aos-duration="1000">
              <div class="col-1 pl-2 pt-2"> <i class="fas fa-quote-left fa-lg fa-fw color-red"></i>
              </div>
              <div class="col-11 customor-voice pt-3">
                <dl>
                  <dt><?php the_title();?></dt>
                  <dd class="d-block"><?php echo wp_trim_words(get_the_content(), 35, '...'); ?></dd>
                </dl>
                <a href="<?php the_permalink();?>">
                  <p>read more</p>
                </a>
              </div>
            </div>
          </div>
          <div class="row px-3">
            <div class="col-6 col-md-4">
              <img src="<?php the_field(icon_img); ?>" class="img-fluid" alt="">
            </div>
            <div class="col-6 col-md-8">
              <p style="font-size: 1.5vw;"><?php the_field('customer_name'); ?><br>
                <small><?php the_field('company'); ?></small> </p>
              </div>
            </div>
          </div>
        <?php }
        ?>
      </div>
    </div>
    <br>
  </section>

  <seciton id="blog-section">
        <h2 data-aos="fadeInUp" data-aos-offset="200" data-aos-duration="1000">NEWS</h2>
        <hr>
        <?php
        $news = new WP_Query(array(
          'posts_per_page' => 2,
          'post_type' => 'news'
        ));
        while($news->have_posts()){
          $news->the_post(); ?>

          <div class="row m-2 slide-left" data-aos="fade-in" data-aos-duration="1000">
            <div class="col-3 col-md-2">
              <div class="calender-red offset-md-1">
                <time datetime="<?php the_time('Y年n月j日'); ?>">
                  <?php the_time('j日'); ?>
                </time>
              </div>
              <div class="calender-bottom offset-md-1">
                <time datetime="<?php the_time('Y年n月j日'); ?>">
                  <?php the_time('n月'); ?>
                </time>
              </div>
            </div>
            <div class="col-9 col-md-10 ">
              <time datetime="<?php the_time('Y-n-j'); ?>">
                <?php the_time('Y年n月j日'); ?>
              </time>
              <p class="news-title"><?php the_title(); ?></p>
              <p class="news-desc"><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
              <a href="<?php the_permalink(); ?>">
                <p>read more</p>
              </a>
            </div>
          </div>
          <hr>
        <?php }
        ?>
  </seciton>
</div>

    <?php get_footer();?>
