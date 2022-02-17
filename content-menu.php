<header class="header js-float-menu container-body">
    <h1 class="title"><a href="<?php echo home_url(); ?>">Sota Iwakami's Portfolio</a></h1>
    
        
    <div class="menu-trigger js-toggle-sp-menu">
        <span></span>
        <span></span>
        <span></span>
    </div>
        <nav class="nav-menu js-toggle-sp-menu-target">

            <?php wp_nav_menu( array(
                'theme_location'    =>'mainmenu',
                'container'         =>'false',
                'menu_class'        =>'menu',
                'add_a_class' => 'menu-link',
                'items_wrap'        =>'<ul class="%2$s">%3$s</ul>'));
            ?>
        </nav>
</header>