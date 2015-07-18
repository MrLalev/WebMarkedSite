<?php

return [
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Поръчки',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'поръчка',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'App\Order',

    /**
     *
     * The columns array
     *
     * @type array
     */
    'columns' => [
        'first_name' => array(
            'title' => 'Име',
            'relationship' => 'user',
            'select' => "first_name",
        ),
        'family_name' => array(
            'title' => 'Фамилия',
            'relationship' => 'user',
            'select' => "family_name",
        ),
        'email' => array(
            'title' => 'Е-майл',
            'relationship' => 'user',
            'select' => "email",
        ),
        'product_name' => array(
            'title' => 'Име на продукта',
            'relationship' => 'product',
            'select' => "product_name",
        ),
        'product_price' => array(
            'title' => 'Цена',
            'relationship' => 'product',
            'select' => "product_price"
        )
    ],

    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => [
        'id' => array(
        )
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
