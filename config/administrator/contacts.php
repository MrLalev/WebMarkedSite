<?php

return [
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'За контакт',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'контакт',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => 'App\Contact',

    /**
     *
     * The columns array
     *
     * @type array
     */
    'columns' => [
        'content' => array(
            'title' => 'Съдържание',
        ),
        'content' => array(
            'title' => 'Снимка',
        ),
    ],

    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => [
        'content' => [
            'title' => 'Съдържание',
            'type' => 'wysiwyg',
            'height' => 500
        ],
        'image' => array(
            'title' => 'Снимка',
            'type' => 'image',
            'location' => public_path() . '/img/originals/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(65, 57, 'crop', public_path() . '/img/small/', 100),
                array(220, 138, 'landscape', public_path() . '/img/medium/', 100),
                array(383, 276, 'fit', public_path() . '/img/full/', 100)
            )
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
