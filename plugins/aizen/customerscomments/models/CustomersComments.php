<?php namespace Aizen\Customerscomments\Models;

use Model;

/**
 * Model
 */
class CustomersComments extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    

    public $implement = [
      \RainLab\Translate\Behaviors\TranslatableModel::class
    ];
    
    public $translatable = ['name','comment','date'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'aizen_customerscomments_';

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
