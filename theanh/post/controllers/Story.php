<?php

namespace TheAnh\Post\Controller;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;

class Story extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
//        'Backend\ Behaviors\FormController',
    ];

    public $listConfig = 'config_list.yaml';
//    public $formConfig = 'config_form.yaml';


    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Theanh.Post', 'main-post', 'side-post-story');
    }

    public function listExendQuery($query) {
        return $query;
    }
}
