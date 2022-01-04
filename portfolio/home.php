<?php
/*
// Template Name: Home 〜トップページ〜
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'content', 'menu' ); ?>

<!-- トップバナー -->
<section class="top-area js-float-menu-target">
    <div class="top-pic-wrap">
        <div class="top-pic">
        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="80%" id="blobSvg">
        <path id="blob" d="M385.5,342.5Q357,435,258,421.5Q159,408,91.5,329Q24,250,93.5,174.5Q163,99,245.5,107Q328,115,371,182.5Q414,250,385.5,342.5Z" fill="#d1d8e0"></path>
        </svg>
        <p class="">ご覧いただきありがとうございます。<br>岩上颯太と申します。<br>最後までご覧いただけると幸いです。</p>
            <h1 class="top-title">
            <span>W</span>
            <span>e</span>
            <span>l</span>
            <span>c</span>
            <span>o</span>
            <span>m</span>
            <span>e</span>
            <span>&nbsp;</span>
            <span>M</span>
            <span>y</span>
            <span>p</span>
            <span>o</span>
            <span>r</span>
            <span>t</span>
            <span>f</span>
            <span>o</span>
            <span>l</span>
            <span>i</span>
            <span>o</span>
            </h1>
        </div>
    </div>
</section>

<!-- 自己紹介 -->
<section class="container fadeInUpTrigger" id="about">
    <h2 class="container-title">
        <span class="sub-title">About</span>
        <p class="main-title">私について</p>
    </h2>
    <div class="container-body">
        <div class="main-wrap">
            <div class="face">
                <img src="http://localhost:8888/wordpress/wp-content/uploads/2021/12/myface.jpg" alt="顔写真" class="face-pic"/>
            </div>
            <div class="about-text">
                <!-- <ul>
                    <li>名前：岩上 颯太(イワカミ ソウタ)</li>
                    <li>学歴：麗澤大学　外国語学部国際交流・国際協力専攻</li>
                    <li>出身：埼玉県</li>
                    <li>勉強を始めるきっかけ：海外渡航を機にスキルを持つことの重要さに気づきプログラミングの勉強を始める</li>
                    <li>趣味：スポーツが好きで休日は毎朝社会人チームに混ぜてもらいサッカーをしている</li>
                </ul> -->
                <p>
                    <?php echo get_post_meta($post->ID, 'about' ,true); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 制作実績 -->
<section class="bg-color-sub fadeInUpTrigger" id="works">
    <div class="container">
        <h2 class="container-title">
            <span class="sub-title">Works</span>
            <p class="main-title">制作物</p>
        </h2>
        <div class="container-body">
        <div class="panel-wrap"> 
            <a href="http://localhost:8888/wordpress/2021/12/27/%e6%9e%b6%e7%a9%ba%e3%81%ae%e3%82%ab%e3%83%95%e3%82%a7%e3%82%b5%e3%82%a4%e3%83%88/" class="panel panel-hover">
                <div class="panel-title">
                    <h2>架空カフェサイト</h2>
                </div>
                <img class="panel-pic" src="http://localhost:8888/wordpress/wp-content/uploads/2021/12/cafe-pic-1.png" alt="">
                <div class="panel-text">架空のカフェを想像してサイトを作りました。HTML、CSS、JS、PHPを使って予約フォームからデータベースに情報を保存できるようにしました。</div>
            </a>
            <a href="http://localhost:8888/wordpress/2021/12/28/%e3%82%ab%e3%83%95%e3%82%a7%e3%81%ae%e4%ba%88%e7%b4%84%e7%ae%a1%e7%90%86%e7%94%bb%e9%9d%a2/" class="panel panel-hover">
                <div class="panel-title">
                    <h2>カフェの予約管理画面</h2>
                </div>
                <img class="panel-pic" src="http://localhost:8888/wordpress/wp-content/uploads/2021/12/スクリーンショット-2021-12-28-15.15.34.png" alt="">
                <div class="panel-text">新規登録機能、ログイン機能、編集、削除機能をつけた予約管理システムを作りました。いつ何人の予約が入っているか確認しやすいように工夫しました。</div>
            </a>
            <a href="http://localhost:8888/wordpress/2022/01/02/%e3%83%9d%e3%83%bc%e3%83%88%e3%83%95%e3%82%a9%e3%83%aa%e3%82%aa%e3%82%b5%e3%82%a4%e3%83%88/"  class="panel panel-hover">
                <div class="panel-title">
                    <h2>ポートフォリオサイト</h2>
                </div>
                <img class="panel-pic" src="http://localhost:8888/wordpress/wp-content/uploads/2021/12/スクリーンショット-2021-12-28-15.20.42.png" alt="">
                <div class="panel-text">シンプルなデザインを意識して作りました。今後はワードプレス化して、管理しやすいようにします。</div>
            </a>
            <!-- <a href=""  class="panel panel-hover">
                <div class="panel-title">
                    <h2>サンプルテキスト</h2>
                </div>
                <img class="panel-pic" src="" alt="">
                <div class="panel-text">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</div>
            </a> -->
        </div>
        <div class="panel-btn">
            <a href="category/uncategorized" class="btn btn-border">制作物一覧へ</a>
        </div>
        </div>
    </div>
</section>
    
<section class="container fadeInUpTrigger" id="skill">
    <h2 class="container-title">
        <span class="sub-title">Skill</span>
        <p class="main-title">スキル</p>
    </h2>
    <div class="container-body">
    <div class="panel-wrap"> 
        <div class="panel">
            <div class="panel-title">
                <h2>コーディング</h2>
            </div>
            <div class="panel-skill-item-wrap">
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo">
                        <i class="fab fa-html5 fa-4x"></i>
                    </div>
                    <p class="">HTML5</p>
                </div>
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo">
                        <i class="fab fa-css3-alt fa-4x"></i>
                    </div>
                    <p>CSS3</p>
                </div>
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo">
                        <i class="fab fa-sass fa-3x"></i>
                    </div>
                    <p>Sass</p>
                </div>
            </div>
            <div class="panel-skill-text">
                <p>プラグインを使用したサイト制作、ワードプレス構築ができます。Sassを使った修正しやすく、保守性の高いコードを意識しています。</p>
            </div>
        </div>

        <div class="panel">
            <div class="panel-title">
                <h2>フロントエンド</h2>
            </div>
            <div class="panel-skill-item-wrap">
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo">
                        <i class="fab fa-js-square fa-4x"></i>
                    </div>
                    <p class="">JavaScript</p>
                </div>
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo-big">
                        <i class="devicon-jquery-plain-wordmark"></i>
                    </div>
                    <p>jQuery</p>
                </div>
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo">
                        <i class="fab fa-vuejs fa-4x"></i>
                    </div>
                    <p>Vue.js</p>
                </div>
            </div>
            <div class="panel-skill-text">
                <p>JavaScriptを使用して動きのあるサイトを作った経験があります。フレームワークはVue.jsを勉強していて、今後はReact.jsやNuxt.jsを学びたい。</p>
            </div>
        </div>
        <div class="panel">
            <div class="panel-title">
                <h2>バックエンド</h2>
            </div>
            <div class="panel-skill-item-wrap">
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo">
                        <i class="fab fa-php fa-4x"></i>
                    </div>
                    <p class="">PHP</p>
                </div>
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo">
                        <i class="fab fa-laravel fa-4x"></i>
                    </div>
                    <p>Laravel</p>
                </div>
            </div>
            <div class="panel-skill-text">
                <p>データベースと連携し、様々な機能をつけることができます。フレームワークはLaravelを勉強していて、次のウェブサービスを実装中。</p>
            </div>
        </div>

        <div class="panel">
            <div class="panel-title">
                <h2>データベース</h2>
            </div>
            <div class="panel-skill-item-wrap">
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo-big">
                        <i class="devicon-mysql-plain"></i>
                    </div>
                    <p class="">MySQL</p>
                </div>
            </div>
            <div class="panel-skill-text">
                <p>データベースを操作して情報を変更したり、削除することができます。phpMyAdminからの操作だけではなく、SQLコマンドでデータベース操作が可能です。</p>
            </div>
        </div>

        <div class="panel">
            <div class="panel-title">
                <h2>インフラ</h2>
            </div>
            <div class="panel-skill-item-wrap">
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo">
                        <i class="fab fa-aws fa-4x"></i>
                    </div>
                    <p class="">AWS</p>
                </div>
            </div>
            <div class="panel-skill-text">
                <p>勉強しようと思いながら、後回しにしてしまいました。次のサービスではAWSでデプロイする予定です。</p>
            </div>
        </div>

        <div class="panel">
            <div class="panel-title">
                <h2>その他</h2>
            </div>
            <div class="panel-skill-item-wrap">
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo">
                        <i class="fab fa-git-alt fa-4x"></i>
                    </div>
                    <p class="">git</p>
                </div>
                <div class="panel-skill-item">
                    <div class="panel-skill-item-logo">
                        <i class="fab fa-gulp fa-4x"></i>
                    </div>
                    <p>gulp</p>
                </div>
            </div>
            <div class="panel-skill-text">
                <p>gitを使った擬似集団開発をしています。またNode.jsによるgulpを使った開発環境で実装しています。</p>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- コンタクト -->
<section class="bg-color-sub fadeInUpTrigger" id="contact">
    <div class="container">
        <h2 class="container-title">
            <span class="sub-title">Contact</span>
            <p class="main-title">お問い合わせ</p>
        </h2>
        <div class="container-body">
        <div class="contact">
            <p class="contact-text">お問い合わせはメールまたはTwitterのDMからご連絡ください。</p>
            <div class="icon-wrap">
                <div class="icon">
                    <a href="https://mail.google.com/mail/?view=cm&to=a17258s@reitaku.jp&su= お問い合わせ"><i class="fas fa-envelope size fa-6x"></i></a>
                </div>
                <div class="icon">
                    <a href="https://twitter.com/iwaso_wir"><i class="fab fa-twitter size fa-6x"></i></a>
                </div>
            <!-- <div class="icon">
                <a href="https://www.instagram.com/iwa.so"><i class="fab fa-instagram size fa-6x"></i></a>
            </div> -->
            </div>
        </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
