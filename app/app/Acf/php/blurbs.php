<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5bc5e091993ac',
    'title' => __('Puffar', 'halland'),
    'fields' => array(
        0 => array(
            'key' => 'field_5bc5e09563f74',
            'label' => __('Puffar', 'halland'),
            'name' => 'blurbs',
            'type' => 'relationship',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array(
                0 => 'blurb',
            ),
            'taxonomy' => array(
            ),
            'filters' => array(
                0 => 'search',
                1 => 'post_type',
                2 => 'taxonomy',
            ),
            'elements' => '',
            'min' => '',
            'max' => '',
            'return_format' => 'object',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'page_type',
                'operator' => '==',
                'value' => 'front_page',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));
}