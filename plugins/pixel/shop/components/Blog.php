<?php namespace Pixel\Shop\Components;

use Cms\Classes\ComponentBase;

class Blog extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'blog Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
	{
        // $this->prepareLang();//
        
		$this->addCss('/plugins/pixel/shop/assets/css/blog.css');
    }

}
