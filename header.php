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
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
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
            <li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-job_content menu-item-has-children dropdown nav-item nav-item-93"><a href="<?php echo home_url(); ?>/job_content/real-estate-registration/" class="nav-link pl-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">業務内容</a>
              <ul class="dropdown-menu depth_0">
                <li id="menu-item-140" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-140"><a class="dropdown-item" href="<?php echo home_url(); ?>/job_content/real-estate-registration/">不動産登記申請</a></li>
                <li id="menu-item-148" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-148"><a class="dropdown-item" href="<?php echo home_url(); ?>/job_content/inheritance-and-will/">相続・遺言</a></li>
                <li id="menu-item-143" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-143"><a class="dropdown-item" href="<?php echo home_url(); ?>/job_content/commercial-registration/">商業登記申請</a></li>
                <li id="menu-item-137" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-137"><a class="dropdown-item" href="<?php echo home_url(); ?>/job_content/fieldsurvey-basedon-registration/">登記情報調査に基づく現地調査</a></li>
                <li id="menu-item-138" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-138"><a class="dropdown-item" href="<?php echo home_url(); ?>/job_content/registration-information-survey/">登記情報調査</a></li>
                <li id="menu-item-136" class="block menu-item menu-item-type-post_type menu-item-object-job_content nav-item nav-item-136"><a class="dropdown-item" href="<?php echo home_url(); ?>/job_content/realestate-surveyby-drone/">ドローンによる不動産調査</a></li>
              </ul>
            </li>
            <li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-q_and_a nav-item nav-item-92"><a href="<?php echo home_url(); ?>/q_and_a/boundaries/" class="nav-link pl-1">Q and A</a></li>
            <li id="menu-item-34" class="menu-item menu-item-type-post_type_archive menu-item-object-customer_voice nav-item nav-item-34"><a href="<?php echo home_url(); ?>/customer_voice/" class="nav-link pl-1">お客様の声</a></li>
            <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-26 current_page_item active nav-item nav-item-28"><a href="<?php echo home_url(); ?>/about_us/" class="nav-link pl-1">事務所概要</a></li>
          </ul>

        </div>
      </div>
    </nav>
  </header>