<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>GINZAKUROSAWA Officialsite</title>
  <meta name="description" content="グラフィックデザインを軸に、ウェブデザイン、イラストを手がけるデザインスタジオです。その他にグラフィックデザインの視点によるプロダクトデザイン、映像のディレクションもおこなっています。" />
  <meta name="keywords" content="銀座、銀座クロサワ、ginzakurosawa,サブレ、サブレ缶、クッキー、クロサワ、おもたせ、手土産、福島、焼菓子、フロランタン" />
  <!-- ogp -->
  <meta property="og:title" content="GINZAKUROSAWA Officialsite" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="GINZAKUROSAWA Officialsite" />
  <meta property="og:description" content="グラフィックデザインを軸に、ウェブデザイン、イラストを手がけるデザインスタジオです。その他にグラフィックデザインの視点によるプロダクトデザイン、映像のディレクションもおこなっています。" />
  <!-- ファビコン -->
  <link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
 <!-- font awesome-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <?php wp_head(); ?>
</head>
<body>

  <header class="header">
    <p class="header-text">
      <a href="https://onlineshop.ginzakurosawa.com"><span>商品の発送日について</span>商品の到着までに約2週間程度のお時間をいただきます。発送日の詳細はオンラインショップよりご確認ください。</a>
    </p>

    <div class="header-container">
      <div class="header-wrapper">
        <div class="header-logo">
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="KUROSAWA">
        </a>
        </div>
        <div class="header-wrap">
        <div class="header-icon">
          <a href="" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/Instagram.svg" alt="Instagram">
        </a>
        </div>

    <div class="hamburger js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
      </div>
    </div>

    <nav id="g-nav" class="g-nav">
      <div id="g-nav-content" class="g-nav-content">
      <?php 
        wp_nav_menu( array( 
          'theme_location' => 'header-menu' 
        ) ); 
      ?>
      </div>
      </nav>
  </header>