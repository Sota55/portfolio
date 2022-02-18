<?php get_header(); ?>

<?php get_template_part('content', 'menu' ); ?>

<!-- 制作物詳細 -->
<section class="container">
    <h2 class="container-title">
        <span class="sub-title">Works</span>
        <p class="main-title">制作物</p>
    </h2>

    <?php if(have_posts()):?>
        <?php while (have_posts()) : the_post(); ?>

            <div class="article" id="content">
                <article clas="article-item">
                <h2 class="article-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                <h3 class="article-date"><?php the_time("Y年m月j日"); ?></h3>
                <!-- <img src="src/img/cafe-pic.png" class="article-img"> -->
                    <p>
                        <?php the_content(); ?>
                    </p>
                </article>

                <?php endwhile; ?>

            <div class="pagination">
                <ul>
                    <li class="prev"><?php previous_post_link('%link', 'PREV'); ?></li>
                    <li class="next"><?php next_post_link('%link', 'NEXT'); ?></li>
                </ul>
            </div>


            <?php endif; //end have_post?>
            </div>


</section>

<?php get_footer(); ?>