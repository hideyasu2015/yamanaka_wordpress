<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php
    if ( !is_home() ){
      wp_title('-', true, 'right');
    }
    bloginfo('name');
    ?>
  </title>
<!-- <link rel="stylesheet" type="text/css" href="normalize.css"> -->
<!-- tokuhara add 2019.2.3 -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif+SC" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
<!--y: 2/15 fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!--googlefonts-->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100" rel="stylesheet">

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
<!-- Bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
<!-- JavaScript -->
<!-- <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> -->
<!--
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP"
    crossorigin="anonymous"></script>
-->
<!--plugin-->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!--favicon-->
<link rel="icon" type="image/x-icon" href="./favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon-180x180.png">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!---->
<header>
    <div class="row justify-content-start header-top py-2">
		<div class="col-md-2">
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/tel.png" alt="">082-814-2658 </p>
      </div>
			<div class="col-md-2">
        <p><img src="<?php echo get_template_directory_uri(); ?>/images/mail.png" alt="">info@sample.co.jp</p>
      </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light static-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" class="img-fluid" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <?php wp_nav_menu(
        array(
          'menu' => 'main',
          'fallback_cb'    => '__return_false',
          'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav ml-auto">%3$s</ul>',
          'container' => 'false',
          'container_class' => '',
          'depth'          => 2,
          'walker'         => new bootstrap_4_walker_nav_menu()

        )
      );
      ?>
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
    </div>
  </div>
</nav>
</header>
