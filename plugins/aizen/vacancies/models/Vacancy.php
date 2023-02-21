<?php namespace Aizen\Vacancies\Models;

use Model;

/**
 * Model
 */
class Vacancy extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\Sortable;



    public $implement = [
      \RainLab\Translate\Behaviors\TranslatableModel::class
    
    ];
    
    public $translatable = ['position','category', 'location', 'text', 'slug'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'aizen_vacancies_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
}
