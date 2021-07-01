<?php namespace Admin\Manager\Models;

use Model;

/**
 * Model
 */
class Game extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_manager_game';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
		'gameimage' => ['System\Models\File'],
        'gamefiles' => ['System\Models\File'],
	];
}
