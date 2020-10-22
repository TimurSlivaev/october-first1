<?php namespace Slivaev\Books\Models;

use Model;

/**
 * Model
 */
class Gerne extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'slivaev_books_genres';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
