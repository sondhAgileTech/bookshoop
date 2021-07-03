<?php namespace Admin\Manager\Components;

use Cms\Classes\ComponentBase;
use Pixel\Shop\Models\Coupon;
use Carbon\Carbon;

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
        $this->addJs('/plugins/admin/manager/assets/js/gift.js');
        $this->addJs('/plugins/pixel/shop/assets/js/alertify.min.js');
		$this->addCss('/plugins/pixel/shop/assets/css/alertify.min.css');
        $this->page['coupon'] = $this->listCoupons();
    }

    public function listCoupons() {
        $now = Carbon::now();
        $coupon = Coupon::where('is_active', 1)
                        ->where('valid_from', '<=' , $now->toDateString())
                        ->where('valid_to', '>=' , $now->toDateString())
                        ->whereColumn('used_count', '<', 'count')
                        ->inRandomOrder()
                        ->first();

        return $coupon;
    }
}
