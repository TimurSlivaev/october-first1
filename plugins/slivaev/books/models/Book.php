<?php namespace Slivaev\Books\Models;

use Model;


/**
 * Model
 */
class Book extends Model
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

    public function getAuthorIdOptions() {
        $model = Author_2::lists('name','id');
        return $model;
    }
    public function getGenreIdOptions() {
        $model = Gerne::lists('title','id');
        return $model;
    }

    public $attachOne = ['cover'=>'System\Models\File'];

}
