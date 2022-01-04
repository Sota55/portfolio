
<?php get_header(); ?>

<?php get_template_part('content', 'menu' ); ?>


<!-- 制作実績 -->
<section class="bg-color-sub" id="works">
    <div class="container">
        <h2 class="container-title">
            <span class="sub-title">Works</span>
            <p class="main-title">制作物</p>
        </h2>
        <div class="container-body">
        <div class="panel-wrap portfolio"> 
            
        <!-- 記事のループ -->
        <?php get_template_part('loop'); ?>
    
        <?php if (function_exists("pagination")) pagination($wp_query->max_num_pages); ?>
           
        </div>
        </div>


    </div>
</section>

<?php get_footer(); ?>