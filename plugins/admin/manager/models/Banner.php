<?php namespace Admin\Manager\Models;

use Cms\Classes\Page;
use Model;
use Lang;

/**
 * Model
 */
class Banner extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'admin_manager_banner';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
		'bannerimgs' => ['System\Models\File'],
	];


    /**
     * Get a list of all pages. Prepend an empty option to the start
     *
     * @return array
     */
    public function getUrlOptions()
    {
        $allPages = Page::sortBy('baseFileName')->lists('title', 'baseFileName');
        $pages = array(
            '' => Lang::get('benfreke.menumanager::lang.create.nolink')
        );
        foreach ($allPages as $key => $value) {
            $pages[$key] = "{$value} - (File: $key)";
        }

        return $pages;
    }
}
