<div class="mobile_container show-for-small-only">
    <nav class="mobile menu">
        <?php
            $menu_name = 'top-bar-r';

            if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

                $menu_items = wp_get_nav_menu_items($menu->term_id);

                $menu_list = '<ul class="active" id="menu-' . $menu_name . '">';

                foreach ( (array) $menu_items as $key => $menu_item ) {
                    $title = $menu_item->title;
                    $url = $menu_item->url;
                    $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
                }

                $menu_list .= '</ul>';
            }else{
                $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
            }

            echo $menu_list;
        ?>
        <a class="toggle-nav" href="#">&#9776;</a>
    </nav>
</div>
