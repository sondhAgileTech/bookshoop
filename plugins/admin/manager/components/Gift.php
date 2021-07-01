<?php namespace Admin\Manager\Components;

use Cms\Classes\ComponentBase;

class Gift extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'gift Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
	{
		$this->addCss('/plugins/admin/manager/assets/css/style.css');
        
    }
}
