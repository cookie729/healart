<!DOCTYPE html>
<!-- WordPress で設定している言語を反映 -->
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- アイコンの設定 -->
  <link 
    rel="icon" 
    href="<?php echo esc_url(get_theme_file_uri('/images/leaf-left.svg')); ?>"
    type="image/svg+xml"
  >
  <!-- 
    機能を追加する function.php や、css, js を読み込むために入れる
    style.css を読み込んでくれる
  -->
  <?php wp_head(); ?>
</head>
<!-- body の php タグはページ毎に異なるスタイルを設定する -->
<body <?php body_class(); ?>>
  <!-- 必ず必要なコード、,js 等を出力 -->
  <?php wp_body_open(); ?>
  <header class="site-header">
    <div class="wrapper">
    <?php hello(); ?>

      <h1 class="site-title">
        <!-- home_url で HP にリンクさせる -->
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <h2>LUX</h2>
          <!-- 画像の設定 -->
          <img 
            class="site-logo" 
            src="<?php echo esc_url(get_theme_file_uri('/images/logo.svg')); ?>" 
            alt="<?php bloginfo('name'); ?>"
          >
        </a>
      </h1>
      <!-- 管理画面の「設定」→「一般」で設定したキャッチフレーズを表示する -->
      <p class="site-description"><?php bloginfo('description'); ?></p>
    </div>
  </header>
  <nav class="primary-navigation wrapper">
    <button class="btn-menu">メニュー</button>
    <ul class="menu-wrapper">
      <li><a href="#"></a></li>
      <li><a href="#">オーガニックフード</a></li>
      <li><a href="#">インテリア</a></li>
      <li><a href="#">アウトドアグッズ</a></li>
      <li><a href="#">ヒーリング</a></li>
    </ul>
  </nav>
  
</body>
</html>