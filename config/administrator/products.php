<?php

return [
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Продукти',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'продукт',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'App\Product',

    /**
     *
     * The columns array
     *
     * @type array
     */
    'columns' => [
        'product_name' => [
            'title' => 'Заглавие'
        ],
        'product_content' => [
            'title' => 'Съдържание'
        ],
        'product_price' => [
            'title' => 'Цена'
        ],
        'product_quantity' => [
            'title' => 'Количество'
        ],
        'category' => [
            'title' => 'Категория'
        ],
        'promotionFrom' => [
            'title' => 'Промоция от'
        ],
        'promotionTo' => [
            'title' => 'Промоция до'
        ],
        'created_at' => [
            'title' => 'Дата на създаване'
        ]
    ],

    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => [
        'product_name' => [
            'title' => 'Заглавие',
            'type' => 'text'
        ],
        'product_content' => [
            'title' => 'Съдържание',
            'type' => 'wysiwyg',
            'height' => 500
        ],
        'product_price' => [
            'type' => 'number',
            'title' => 'Цена',
            'symbol' => 'лв.', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'thousands_separator' => ',', //optional, defaults to ','
            'decimal_separator' => '.', //optional, defaults to '.'
        ],
//        'category' => [
//            'type' => 'relationship',
//            'title' => 'Категория',
//            'name_field' => 'categories',
//            'select' => "categories",
//            'autocomplete' => true,
//            'num_options' => 5,
//        ],
        'promotionFrom' => array(
            'type' => 'date',
            'title' => 'Промоция от',
            'date_format' => 'yy-mm-dd', //optional, will default to this value

        ),
        'promotionTo' => array(
            'type' => 'date',
            'title' => 'Промоция до',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ),
        'product_quantity' => [
            'type' => 'number',
            'title' => 'Количество',
            'symbol' => 'бр.'
        ]
    ],

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'created_at',
        'direction' => 'desc',
    ),

    /**
     * The width of the model's edit form
     *
     * @type int
     */
    'form_width' => 700,


];
