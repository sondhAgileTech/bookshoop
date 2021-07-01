<?php namespace Admin\Manager;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
			'Admin\Manager\Components\Game' => 'game',
            'Admin\Manager\Components\Gift' => 'gift',
		];
    }

    public function registerSettings()
    {
    }
}
