<?php
function add_elementor_widget_categories( $elements_manager ) {

    $elements_manager->add_category(
        'Boilerplate',
        [
            'title' => __( 'Boilerplate', 'boilerplate-elementor-extension' ),
            'icon' => 'fas fa-temperature-high',
        ]
    );

}

add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );