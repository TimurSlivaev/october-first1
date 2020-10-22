<?php namespace Slivaev\Books\Models;

use Model;

/**
 * Model
 */
class Author_2 extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'slivaev_books_authors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
