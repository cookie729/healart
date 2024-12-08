<!-- 
  css, js を読み込む
  wordpress の機能を有効化、無効化する
  テーマに独自の機能を追加する
  全て php で記述する
-->

<?php
function add_files() {
  // 読み込みたいファイルを書いていく
  // リセット CSS
  wp_enqueue_style('reset-style', 'https://unpkg.com/destyle.css@2.0.2/destyle.css');
  // Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');
  // メインの CSS ファイル
  wp_enqueue_style('main-style', get_stylesheet_uri());
}

function hello() {
  echo 'Hello World!';
}
function theme_setup() {
  // title タグ
  // wordpress が用意している機能を有効化するための add_theme_support()
  add_theme_support('title-tag');

  // メニュー(メニューを有効化)
  register_nav_menus(
    array(
      'main-menu' => 'メインメニュー',
    )
  );
}


// add_files() を呼び出す
add_action('after_setup_theme', 'theme_setup');
add_action('wp_enqueue_scripts', 'add_files');