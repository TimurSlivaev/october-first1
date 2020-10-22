<?php namespace Slivaev\Products\Models;

use Model;

/**
 * Model
 */
class Prod extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'slivaev_products_list';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
