<?php return [
    'plugin'    => [
        'name'        => 'Post',
        'description' => 'Story plugin',
    ],
    'field'     => [
        'id'                       => 'ID',
        'name'                     => 'Name',
        'title'                    => 'Title',
        'active'                   => 'Active',
        'description'              => 'Description',
    ],
    'component' => [
        'article_page'         => 'Article page',
        'article_page_desc'    => '',
        'article_data'         => 'Article data',
        'article_data_desc'    => '',
        'article_list'         => 'Article list',
        'article_list_desc'    => '',

        'category_page'        => 'Category page',
        'category_page_desc'   => '',
        'category_data'        => 'Category data',
        'category_data_desc'   => '',
        'category_list'        => 'Category list',
        'category_list_desc'   => '',

        'sorting_publish_asc'     => 'By date of publication (asc)',
        'sorting_publish_desc'    => 'By date of publication (desc)',
        'sorting_view_count_acs'  => 'By view count (asc)',
        'sorting_view_count_desc' => 'By view count (desc)',
    ],
    'menu'      => [
        'post' => 'Post',
        'story'  => 'Story',
    ],
    'tab'       => [
        'permissions'     => 'Manage site settings',
        'description'     => 'Description',
    ],
    'story'   => [
        'name'       => 'story',
        'list_title' => 'Story list',
    ],
    'active' => [
        0 => 'Inactive',
        1 => 'Active',
    ],
    'permission' => [
        'story'  => 'Manage story',
    ],
];
