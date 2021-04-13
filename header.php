<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php
    if (!is_home()) {
      wp_title('-', true, 'right');
    }
    bloginfo('name');
    ?>
  </title>
  <!-- <link rel="stylesheet" type="text/css" href="normalize.css"> -->
  <!--y: 2/15 fontawesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!--googlefonts-->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!--plugin-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <!--favicon-->
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!---->
  <header>
    <div class="header-top"></div>

    <nav class="navbar navbar-expand-md navbar-light static-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" class="img-fluid" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <!-- nav -->
          <ul id="menu-main" class="menu navbar-nav ml-auto">
            <li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home nav-item nav-item-6"><a href="<?php echo home_url(); ?>" class="nav-link pl-1">トップページ</a></li>
            <li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-job_content menu-item-has-children dropdown nav-item nav-item-93"><a href="http://o-yamanaka.com/job_content/%e3%83%86%e3%82%b9%e3%83%88%e6%8a%95%e7%a8%bf%ef%bc%91/" class="nav-link pl-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">業務内容</a>
              <ul class="dropdown-menu depth_0">
                <li id="menu-item-140" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-140"><a class="dropdown-item" href="http://o-yamanaka.com/job_content/%e4%b8%8d%e5%8b%95%e7%94%a3%e7%99%bb%e8%a8%98%e7%94%b3%e8%ab%8b/">不動産登記申請</a></li>
                <li id="menu-item-148" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-148"><a class="dropdown-item" href="http://o-yamanaka.com/job_content/%e7%9b%b8%e7%b6%9a%e3%83%bb%e9%81%ba%e8%a8%80/">相続・遺言</a></li>
                <li id="menu-item-143" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-143"><a class="dropdown-item" href="http://o-yamanaka.com/job_content/%e5%95%86%e6%a5%ad%e7%99%bb%e8%a8%98%e7%94%b3%e8%ab%8b/">商業登記申請</a></li>
                <li id="menu-item-138" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-138"><a class="dropdown-item" href="http://o-yamanaka.com/job_content/%e5%85%ac%e5%9b%b3%e3%83%bb%e5%9c%b0%e7%a9%8d%e6%b8%ac%e9%87%8f%e5%9b%b3%e3%83%bb%e7%99%bb%e8%a8%98%e3%81%ae%e7%b5%8c%e7%b7%af%e7%ad%89%e3%81%ae%e7%99%bb%e8%a8%98%e6%83%85%e5%a0%b1%e8%aa%bf%e6%9f%bb/">登記情報調査</a></li>
                <li id="menu-item-137" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-137"><a class="dropdown-item" href="http://o-yamanaka.com/job_content/%e7%99%bb%e8%a8%98%e6%83%85%e5%a0%b1%e8%aa%bf%e6%9f%bb%e3%81%ab%e5%9f%ba%e3%81%a5%e3%81%8f%e7%8f%be%e5%9c%b0%e8%aa%bf%e6%9f%bb/">登記情報調査に基づく現地調査</a></li>
                <li id="menu-item-136" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-136"><a class="dropdown-item" href="http://o-yamanaka.com/job_content/%e3%83%89%e3%83%ad%e3%83%bc%e3%83%b3%e3%81%ab%e3%82%88%e3%82%8b%e4%b8%8d%e5%8b%95%e7%94%a3%e8%aa%bf%e6%9f%bb/">ドローンによる不動産調査</a></li>
              </ul>
            </li>
            <li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-q_and_a nav-item nav-item-92"><a href="http://o-yamanaka.com/q_and_a/%e5%9c%9f%e5%9c%b0%e5%ae%b6%e5%b1%8b%e8%aa%bf%e6%9f%bb%e5%a3%ab%e3%83%bb%e8%a1%8c%e6%94%bf%e6%9b%b8%e5%a3%ab%e3%81%ae%e5%a0%b1%e9%85%ac%e9%a1%8d%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6/" class="nav-link pl-1">Q and A</a></li>
            <li id="menu-item-34" class="menu-item menu-item-type-post_type_archive menu-item-object-customer_voice nav-item nav-item-34"><a href="http://o-yamanaka.com/customer_voice/" class="nav-link pl-1">お客様の声</a></li>
            <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-26 current_page_item active nav-item nav-item-28"><a href="http://o-yamanaka.com/about/" class="nav-link pl-1">事務所概要</a></li>
          </ul>

          <!-- end nav -->

          <!-- <?#php wp_nav_menu(
            #array(
          //     'menu' => 'main',
          //     'fallback_cb'    => '__return_false',
          //     'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav ml-auto">%3$s</ul>',
          //     'container' => 'false',
          //     'container_class' => '',
          //     'depth'          => 2,
          //     'walker'         => new bootstrap_4_walker_nav_menu()

          //   )
          // );
          ?> -->
        </div>
      </div>
    </nav>
  </header>
  <!-- <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
  <a class="nav-link pl-1" href="front-page.php">トップページ <span class="sr-only">(現位置)</span></a>
</li>
<li class="nav-item">
<a class="nav-link pl-1" href="page-business.php">業務内容</a>
</li>
<li class="nav-item">
<a class="nav-link pl-1" href="page-question.php">Q and A</a>
</li>
<li class="nav-item">
<a class="nav-link pl-1" href="page-profile.php">事務所概要</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link pl-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">不動産調査</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">メニュー1</a></li>
<li><a class="dropdown-item" href="#">メニュー1</a></li>
<li><a class="dropdown-item" href="#">メニュー1</a></li>
</ul>
</li>
</ul> -->

  <!-- <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ドロップダウン</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">メニュー1</a> -->