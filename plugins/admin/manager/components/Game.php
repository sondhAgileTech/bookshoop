<?php namespace Admin\Manager\Components;

use Cms\Classes\ComponentBase;
use Admin\Manager\Models\Game as MiniGame;
use Admin\Manager\Models\Banner;

class Game extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'game Component',
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
        $this->addJs('/plugins/admin/manager/assets/js/game.js');
        $this->page['game'] = $this->showGame();
        $this->page['showSlide'] = $this->showSlideGamePage();
        $this->addCss('/plugins/pixel/shop/assets/css/alertify.min.css');
		$this->addJs('/plugins/pixel/shop/assets/js/alertify.min.js');
    }

    public function showGame() {
        $game = MiniGame::inRandomOrder()->limit(1)->first();
        return $game;
    }

    protected function onDowndLoadGame(){ 
        $game = MiniGame::where('id', input('id'))->first();
        if($game) {
            if($game->gamefiles) {
                return [
                    'type' => 'success',
                    'path' => $game->gamefiles->path,
                    'name' => $game->gamefiles->file_name
                ];
            } else {
                return [
                    'type' => 'fail',
                ];
            }
        }
    }

    // Show slide at home page
	protected function showSlideGamePage() {
		$banner = Banner::where('page', $this->page->title)->first();
		return $banner;
	}
}
