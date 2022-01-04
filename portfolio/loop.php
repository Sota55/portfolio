<?php if(have_posts()):?>
<?php while(have_posts()):the_post();?>
<article class="panel panel-hover panel-loop">

    <a href="<?php the_permalink();?>">
        <div class="panel-title">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="panel-text">
            <p>
                <?php the_content();?>
            </p>
        </div>
    </a>
</article>


    
    <!-- 記事のループ -->
    <?php endwhile; //endwhile have_post?>

    <?php endif; //end have_post?>
    

