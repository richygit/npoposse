<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- TODO implement in wordpress-->
    <meta property="og:title" content="<?php echo get_bloginfo( 'name' ); ?>">
    <meta property="og:description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta property="og:image" content="logo.png">
    <meta property="og:url" content="npoposse.jp">
    <meta name="twitter:card" content="NPO Posse">
    <meta property="og:site_name" content="<?php echo get_bloginfo( 'name' ); ?>">
    <meta name="twitter:image:alt" content="NPO Posse">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="<?php echo get_bloginfo( 'template_directory' );?>/main.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <?php wp_head(); ?>

  </head>
  <body class="home">
    <header>
      <nav class="navbar navbar-light navbar-expand-md"><a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo">
          <div class="tagline">若者の「働くこと」に関する<br>様々な問題に取り組むNPO法人</div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse menu-links" id="main-menu">
          <ul class="list navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="/ニュース">ニュース<span class="sr-only">(current)</span></a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="about-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                について
              </a>
              <div class="dropdown-menu" aria-labelledby="about-dropdown">
                <a class="dropdown-item" href="/POSSEについて">POSSEについて</a>
                <a class="dropdown-item" href="/活動内容">活動内容</a>
                <a class="dropdown-item" href="/解決事例">解決事例</a>
                <a class="dropdown-item" href="/相談のながれ">相談のながれ</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="consultation-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                相談窓口
              </a>
              <div class="dropdown-menu" aria-labelledby="consultation-dropdown">
                <a class="dropdown-item" href="/相談窓口">相談窓口</a>
                <a class="dropdown-item" href="/労働相談">労働相談</a>
                <a class="dropdown-item" href="/生活相談">生活相談</a>
              </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="/お問い合わせ">お問い合わせ</a></li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="support-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                POSSEを支援する
              </a>
              <div class="dropdown-menu" aria-labelledby="support-dropdown">
                <a class="dropdown-item" href="/POSSEを支援する">POSSEを支援する</a>
                <a class="dropdown-item" href="/寄付">寄付</a>
                <a class="dropdown-item" href="/会員制度">会員制度</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="btn-group" role="toolbar" aria-label="生活相談, 労働相談"><a class="counselling btn align-middle" href="/労働相談">労働相談</a><a class="consultation btn align-middle" href="/生活相談">生活相談</a></div>
      </nav>
    </header>
    <div class="container-fluid">
