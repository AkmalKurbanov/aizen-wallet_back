<?php namespace Aizen\Faq\Models;

use Model;

/**
 * Model
 */
class Faq extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    public $implement = [
      \RainLab\Translate\Behaviors\TranslatableModel::class
    ];
    
    public $translatable = ['question','answer'];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'aizen_faq_';

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
