<?php

// カスタムヘッダー画像の設置
$custom_header_defaults = array(
    'default-image' => get_bloginfo('template_url').'/images/headers/logo.png',
    'header-text' => false, //ヘッダー画像上にテキストを被せる
);
// カスタムヘッダー機能を有効にする
add_theme_support( 'custom-header', $custom_header_defaults );

// カスタムメニュー使用
register_nav_menu('mainmenu', 'メインメニュー');

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_a_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


// ページネーション
function pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2)+1; //表示するページ数（５ページを表示）

    global $paged;//現在のページ値
    if(empty($paged)) $paged = 1;//デフォルトのページ

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;//前ページ数を取得
        if(!$pages)//全ページ数がからの場合は1とする
        {
            $pages = 1;
        }
    }

    if(1 != $pages)//全ページ数が1でない場合はページネーションを表示する
    {
        echo "<div class=\"pagination\">\n";
        echo "<ul>\n";
        // prev:現在のページ値が１より大きい場合は表示
        if($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>Prev</a></li>\n";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                // 三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
            }
        }
        //Next:そうページ数より現在のページ値が小さい場合は表示
        if ($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">Next</a></li>\n";
        echo "</ul>\n";
        echo "</div>\n";
    }
}

//カスタムフィールド
//投稿ページへ表示するカスタムボックスを定義する
add_action('admin_menu', 'add_custom_inputbox');
//追加した表示項目のデータの更新・保存のためのアクションフック
add_action('save_post', 'save_custom_postdata');

//入力項目がどの投稿タイプのページに表示されるのかの設定
function add_custom_inputbox() {
    //第一引数：編集画面のhtmlに挿入されるid属性名
    //第二引数：管理画面に表示されるカスタムフィールド名
    //第三引数：メタボックスの中に出力される関数名
    //第四引数：管理画面に表示するカスタムフィールドの場所（postなら投稿、pageなら固定ページの）
    //第五引数：配置される順序
    add_meta_box( 'about_id', 'ABOUT入力欄', 'custom_area', 'page', 'normal' );
}

//管理画面に表示される内容
function custom_area(){
    global $post;

    echo 'コメント　：<textarea cols="50" rows="5" name="about_msg">'.get_post_meta($post->ID,'about',true).'</textarea><br>';
}

// 投稿ボタンを押した際のデータ更新と保存
function save_custom_postdata($post_id){

    $about_msg = '';

    //カスタムフィールドに入力された情報を取り出す
    if(isset($_POST['about_msg'])){
        $about_msg = $_POST['about_msg'];
    }

    //内容が変わっていた場合、保存していた情報を更新する
    if( $about_msg != get_post_meta($post_id, 'about', true)){
        update_post_meta($post_id, 'about',$about_msg);
    }elseif($about_msg == ''){
        delete_post_meta($post_id, 'about',get_post_meta($post_id,'about', true));
    }
}


function add_css_js() {//関数名add_css_js()を作成
	//CSSの読み込みはここから
	
	//全てのページにcss/store.cssを読み込み
	wp_enqueue_style('reset', get_template_directory_uri().'/reset.css');
	//全てのページにstyle.cssを読み込み
	wp_enqueue_style('style',get_template_directory_uri().'/style.css' );
	//全てのページにapp.cssを読み込み
	wp_enqueue_style('app',get_template_directory_uri().'/js/app.js' );
	
}
add_action('wp_enqueue_scripts', 'add_css_js');


// カスタムウィジェット
// ウィジェットエリアを作成する関数がどれなのかを登録する
add_action('widgets_init', 'my_widget_area');
// ウィジェット自体の作成するクラスがどれなのか登録する
add_action( 'widgets_init', function(){ register_widget( 'my_widgets_item1' ); });

// ウィジェットエリアを作成する
function my_widget_area() {
    register_sidebar( array(
        'name' => 'メリットエリア',
        'id' => 'widget_merit',
        'before_widget' => '<div>',
        'after_widget' => '</div>'
    ));
};

// ウィジェット自体を作成する
// class my_widgets_item1 extends WP_Widget {
    
    // 初期化（管理画面で表示するウィジェットの名前を設定する）
    // function __construct() {
    //     parent::__construct(
    //         'my_widgets_item1', __('メリットウィジェット', 'text_domain'), array('description' => __('サンプルのウィジェット','text_domain'),)
    //     );
        // $widget_ops = array(
        //     'classname' => 'my_widgets_item1',
        //     'description' => 'メリットウィジェット'
        // );
        // parent::__construct('widget_merit', 'メリットウィジェット', $widget_ops );
    // }
    // function __construct() {
    //     parent::__construct(false, 'メリットウィジェット');
    // }

    // public function form($instance) {
        // $defaults = array(
        //     'title' => 'タイトル',
        //     'name' => '名前',
        // );
        // 入力された情報をサニタイズして変数へ格納
        // $instance = wp_parse_args( (array) $instance, $defaults );
        // $title = esc_attr($instance['title']);
        // $body = esc_attr($instance['body']);
    ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php echo 'タイトル:'; ?>
            </label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('body'); ?>">
                <?php echo '内容'; ?>
            </label>
            <textarea class="widefat" rows="16" colls="20" id="<?php echo $this->get_field_id('body'); ?>" name="<?php echo $this->get_field_name('body'); ?>"><?php echo $body; ?></textarea>
        </p>
    <?php
    // }
    // ウィジェットに入力された情報を保存する処理
    // public function update($new_instance, $old_instance) {
    //     $instance = $old_instance;
    //     $instance['title'] = strip_tags($new_instance['title']); //php,htmlタグを取り除く
    //     $instance['body'] = trim($new_instance['body']); //先頭と最後尾の空白を取り除く
        
    //     return $instance;
    // }
    // 管理画面から入力されたウィジェットを画面に表示する処理
    // function widget($args, $instance) {
        // 配列を変数に展開、配列のキー名が変数として使えるようになる
        // extract( $args );
        
        // ウィジェットから入力された情報を取得
        // $title = apply_filters( 'widget_title', $instance['title'] );
        // $body = apply_filters( 'widget_body', $instance['body'] );
        
        // ウィジェットから入力された情報がある場合、htmlを表示する
        if ( $title ) {
            ?>
                <section class="panel">
                    <h2><?php echo $title; ?></h2>
                    <p>
                        <?php echo $body; ?>
                    </p>
                </section>
                <?php
            }
            
//         }
// }



// add_action( 'widgets_init', function() { register_widget( 'my_widgets_item1' );
//     });

// ウィジェットの入力項目を作成する処理
