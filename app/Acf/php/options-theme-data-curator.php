<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_5ac48d9ea70de',
    'title' => 'Innehåll',
    'fields' => array(
        0 => array(
            'key' => 'field_5acb2d2a0d8dc',
            'label' => __('Innehållsansvarig', 'halland'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        1 => array(
            'key' => 'field_5acb2f3f7decc',
            'label' => __('Manuell Innehållsansvarig', 'halland'),
            'name' => 'manual_data_curator',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => __('Fyll i innehållsansvarig manuellt', 'halland'),
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        2 => array(
            'key' => 'field_5ac48df44d019',
            'label' => __('Innehållsansvarig', 'halland'),
            'name' => 'data_curator',
            'type' => 'select',
            'instructions' => __('Välj en innehållsansvarig i listan.', 'halland'),
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_5acb2f3f7decc',
                        'operator' => '!=',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                1 => __('Admin Adminsson', 'halland'),
                2 => __('Johanna Olin', 'halland'),
            ),
            'default_value' => array(
            ),
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
        3 => array(
            'key' => 'field_5acb2f957decd',
            'label' => __('Innehållsansvarig', 'halland'),
            'name' => 'innehallsansvarig',
            'type' => 'text',
            'instructions' => __('Fyll i namn på den innehållsansvarige.', 'halland'),
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_5acb2f3f7decc',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        4 => array(
            'key' => 'field_5acb2dc3c017a',
            'label' => __('E-post', 'halland'),
            'name' => 'data_curator_email',
            'type' => 'email',
            'instructions' => __('Fyll i en e-postadress till den innehållsansvarige.', 'halland'),
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_5acb2f3f7decc',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ),
        5 => array(
            'key' => 'field_5acb371ba5ed2',
            'label' => __('Innehållsbeskrivning', 'halland'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        6 => array(
            'key' => 'field_5acb3696a5ed1',
            'label' => __('Utdrag', 'halland'),
            'name' => 'excerpt',
            'type' => 'textarea',
            'instructions' => __('Beskriv kortfattat sidans innehåll. Max 80 tecken.', 'halland'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => __('T.ex. "Hitta information om vården i Halmstad"', 'halland'),
            'maxlength' => 80,
            'rows' => 2,
            'new_lines' => '',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ),
        ),
        1 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '!=',
                'value' => 'post',
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