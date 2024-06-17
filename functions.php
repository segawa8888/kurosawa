<?php

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'news'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

add_theme_support('post-thumbnails');

//メニューの登録
function register_my_menus() { 
    register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
    //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
      'header-menu' => 'Header Menu',
      'side-menu' => 'Side Menu',
      'footer-menu'  => 'Footer Menu PC',
      'footer-menu-sp' => 'Footer Menu SP',
    ) );
  }
  add_action( 'after_setup_theme', 'register_my_menus' );

?>