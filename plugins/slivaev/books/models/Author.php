<?php namespace Slivaev\Books\Models;

use Model;

/**
 * Model
 */
class Author extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'slivaev_books_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
