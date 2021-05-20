<?php

function my_enqueue_scripts()
{
  wp_enqueue_style('font_awasome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array());
  wp_enqueue_script('viewport-extra', 'https://cdn.jsdelivr.net/npm/viewport-extra@1.0.2/dist/viewport-extra.min.js', array());
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

function add_files()
{
  define("TEMPLATE_DIRE", get_template_directory_uri());
  define("TEMPLATE_PATH", get_template_directory());

  function wp_css($css_name, $file_path)
  {
    wp_enqueue_style($css_name, TEMPLATE_DIRE . $file_path, array(), date('YmdGis', filemtime(TEMPLATE_PATH . $file_path)));
  }
  function wp_script($script_name, $file_path, $bool = true)
  {
    wp_enqueue_script($script_name, TEMPLATE_DIRE . $file_path, array(), date('YmdGis', filemtime(TEMPLATE_PATH . $file_path)), $bool);
  }

  wp_css('my_style', '/dist/css/style.css');
  // wp_css('scroll-hint_css', '/dist/css/scroll-hint/scroll-hint.css');
  wp_css('slick_theme', '/dist/css/slick/slick.min.css');
  wp_css('slick_css', '/dist/css/slick/slick-theme.min.css');
  wp_script('jquery', '');
  wp_script('picturefill_js', '/dist/js/picturefill.min.js');
  wp_script('slick_js', '/dist/js/slick.min.js');
  // wp_script('scroll-hint_js', '/dist/js/scroll-hint.min.js');
  wp_script('script_js', '/dist/js/script.min.js');
}
add_action('wp_enqueue_scripts', 'add_files', 1);



//head内にRSSフィードリンクを出力
add_theme_support('automatic_feed_links');

//タイトルを動的に出力
add_theme_support('title-tag');

//ブロックエディター用のCSSを有効化
add_theme_support('wp-block-styles');

//埋め込みコンテンツをレスポンシブ対応にする
add_theme_support('responsive-embeds');

//アクション画像を有効化
add_theme_support('post-thumbnails');
// set_post_thumbnail_size(231, 127, false);
add_theme_support('menu');

//カスタムメニューの有効化、メニューの位置を設定
register_nav_menus(
  array(
    'gNav' => 'グローバルナビゲーション',
    'fNav' => 'フッターナビゲーション'
  )
);


//img属性の不要なタグを削除
function get_thumb_img($size = 'full', $class)
{
  $thumb_id = get_post_thumbnail_id(); // アイキャッチ画像のIDを取得
  $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
  $thumb_img = wp_get_attachment_image_src($thumb_id, $size);
  // $sizeサイズの画像内容を取得
  $thumb_src = $thumb_img[0]; // 画像のurlだけ取得
  $thumb_alt = $alt; //alt属性に入れるもの（記事のタイトルにしています）
  $thumb_class = $class; //alt属性に入れるもの（記事のタイトルにしています）

  return '<img src="' . $thumb_src . '" class="' . $thumb_class . '" alt="' . $thumb_alt . '">';
}

//固定ページで"抜粋文"を操作できるようにする
add_post_type_support('page', 'excerpt');

function mycustom_wp_footer()
{
?>
  <script>
    document.addEventListener('wpcf7mailsent', function(event) {
      location.replace('<?php echo home_url() . '/confirm'; ?>');
    }, false);
  </script>
<?php
}
add_action('wp_footer', 'mycustom_wp_footer');


// ① liの「CSS class (オプション)」と余計なコードの削除するコード
add_filter('nav_menu_css_class', 'remove_to_currentClass', 10, 2);
function remove_to_currentClass($classes, $item)
{
  $classes = array();
  $classes[] = 'nav';
  if ($item->current == true) {
    $classes[] = 'current';
  }
  if (!empty($custom_class)) {
    $classes[] = $custom_class;
  }
  return $classes;
}

// ②前述のaタグに「CSS class (オプション)」を反映するコード
add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
function add_class_on_link($item_output, $item)
{
  $css_class = esc_attr($item->classes[0]);
  if ($css_class) {
    return preg_replace('/(<a.*?)/', '$1' . " class='" . $css_class . "'", $item_output);
  } else {
    return $item_output;
  }
}

//メニューの<li>からID除去
function removeMenuId($id)
{
  return $id = array();
}
add_filter('nav_menu_item_id', 'removeMenuId', 10);

//メニューの<li>からクラス除去
function removeMenuClass($classes)
{
  return $classes = array();
}
add_filter('nav_menu_css_class', 'removeMenuClass', 10, 2);

// pタグからデフォルトで吐き出される'p'を削除する
remove_filter('the_excerpt', 'wpautop');


// function add_prev_post_link_class($output)
// {
//   return str_replace('<a href=', '<a class="BUTTON single__prev" href=', $output);
// }
// add_filter('previous_post_link', 'add_prev_post_link_class');

// function add_next_post_link_class($output)
// {
//   return str_replace('<a href=', '<a class="BUTTON single__next" href=', $output);
// }
// add_filter('next_post_link', 'add_next_post_link_class');
