<?php

return [
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Категории',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'категория',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'App\Category',

    /**
     *
     * The columns array
     *
     * @type array
     */
    'columns' => [
        'id' => array(
            'title' => '№',
        ),
        'category_name' => array(
            'title' => 'Име на категорията',
        )
    ],

    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => [
        'category_name' => array(
            'title'=>'Име на категорията',
            'type' => 'text',

        )
    ],

    /**
     * The sort options for a model
     *
     * @type array
     */
    'sort' => array(
        'field' => 'id',
        'direction' => 'asc',
    ),

    /**
     * The width of the model's edit form
     *
     * @type int
     */
    'form_width' => 700,


];
