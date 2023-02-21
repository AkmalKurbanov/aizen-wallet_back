<?php namespace Aizen\Menuheader\Models;

use Model;

/**
 * Model
 */
class MenuHeader extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    use \Winter\Storm\Database\Traits\Sortable;



    public $implement = [
      \RainLab\Translate\Behaviors\TranslatableModel::class
    
    ];
    
    public $translatable = ['item','item_inside_list', 'inslide_item_list'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'aizen_menuheader_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = ['inslide_item_list'];

          public $attachOne = [
    'slide_img' => 'System\Models\File',
    
  ];


  public function getBasefileOptions()
{
    // get default pages
    $pages = \Cms\Classes\Page::sortBy('baseFileName')->lists('title', 'baseFileName');

    // also add static pages if the Pages plugin is installed.
    if (class_exists('Winter\Pages\Classes\Page')) {
        $pages = $pages + \Rainlab\Pages\Classes\Page::sortBy('title')
                                                     ->lists('title', 'baseFileName');
    }

    return $pages;
}
    
}
