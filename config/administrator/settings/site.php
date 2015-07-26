<?php
/**
 * The main site settings page
 */
return array(
    /**
     * Settings page title
     *
     * @type string
     */
    'title' => 'Опции на сайта',
    /**
     * The edit fields array
     *
     * @type array
     */
    'edit_fields' => array(
        'homeContent' => array(
            'title' => 'Описание на началната страница',
            'type' => 'wysiwyg',
        ),
        'homeImg' => array(
            'title' => 'Изображение на началната страница',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() . '/',
            'size_limit' => 2,
            'sizes' => array(
                array(200, 150, 'crop', public_path() . '/resize/', 100),
            )
        ),
        'contactContent' => array(
            'title' => 'Описание на страницата за контакти',
            'type' => 'wysiwyg',
        ),
        'contactImg' => array(
            'title' => 'Изображение на страницата за контакти',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path() . '/',
            'size_limit' => 2,
            'sizes' => array(
                array(200, 150, 'crop', public_path() . '/resize/', 100),
            )
        ),
        'menuLogo' => array(
            'title' => 'Лого в менюто',
            'type' => 'text',
            'limit' => 15,
        ),
    ),
    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'homeContent' => 'required',
        'contactContent' => 'required',
    ),
    /**
     * The storage path in which to save the raw settings data
     *
     * @type string
     */
    'storage_path' => public_path() . '/',
);