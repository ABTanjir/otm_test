<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
    <a class="navbar-brand" href="<?= site_url(); ?>">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
                    } else {
                        echo '<img src="' . get_template_directory_uri() . "/src/images/logo_horizontal.png" . '" alt="Default Logo">';
                }
            ?>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <?php
                
                    $args = array(
                        'menu_class' => 'navbar-nav ms-auto',
                        'theme_location' => 'primary-menu',
                        'menu_id'        => 'primary-menu',
                        'fallback_cb'   => false,
                        'add_li_class'  => 'nav-item'
                    );
                    wp_nav_menu($args);                    
                ?>
            </ul>
        </div>
    </div>
</nav>
