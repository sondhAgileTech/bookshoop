<?php namespace Pixel\Shop\Components;

use Response;
use Cms\Classes\Page;
use Pixel\Shop\Models\Item;
use Pixel\Shop\Classes\Cart;
use Pixel\Shop\Models\SalesSettings;
use Pixel\Shop\Components\CartTrait;
use Algad\Facebook\Components\AbstractFacebookComponent;
use Cms\Classes\ComponentBase;

class ProductDetails extends AbstractFacebookComponent{
	use CartTrait;

	public function componentDetails()
	{
		return [
			'name'        => 'Product Detail',
			'description' => 'Display detail of product'
		];
	}

	public function defineProperties(){
		return [
			'slug' => [
				'title'       => 'URL Slug',
				'description' => 'URL Slug',
				'default'     => '{{ :slug }}',
				'type'        => 'string'
			],
			'productsPage' => [
				'title'       => 'Products page',
				'description' => 'Product list page',
				'type'        => 'dropdown',
				'default'     => 'products',
			],
			'page_url' => [
                'title' => 'URL',
                'description' => 'URL to comment',
                'type' => 'string',
            ],
            'width' => [
                'title' => 'Width',
                'description' => 'Width of the comments box',
                'type' => 'string'
            ],
            'posts_number' => [
                'title' => 'Number of posts',
                'description' => 'Number of posts to display',
                'type' => 'string',
                'default' => '5'
            ],
            'color' => [
                'title' => 'Color scheme',
                'type' => 'dropdown',
                'default' => 'light',
                'options' => ['light' => 'light', 'dark' => 'dark']
            ],
            'custom_css' => [
                'title' => 'Css',
                'description' => 'add custom css classes',
                'type' => 'string',
            ]
		];
	}

	public function getProductPageOptions(){
		return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
	}

	public function onRun(){
        $this->prepareLang();
        
    	$slug = $this->property('slug');
    	$product = Item::where('slug', $slug)->where("is_visible", 1)->first();
		// if($product->type != "product") {
		// 	$this->addCss('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		// }

		$this->addJs('/plugins/pixel/shop/assets/js/alertify.min.js');
    	$this->addCss('/plugins/pixel/shop/assets/css/product.css');
		$this->addCss('/plugins/pixel/shop/assets/css/alertify.min.css');
		$this->addJs('/plugins/pixel/shop/assets/js/product.js');

		if ($product == null)
            return redirect($this->property('productsPage'));
        else
        	$product->increment('views_count');

        $this->page['product'] = $product;
        $this->page['shopSetting'] = SalesSettings::instance();
        $this->page['relatedProducts'] = $this->getRelatedProducts($product);
		$this->page['relatedProductsOfMerchandise'] = $this->getRelatedProductsOfMerchandise($product);

        $product->setUrl($this->page->code, $this->controller);

        if (isset($product)) {
            $this->page->meta_title = $product->meta_title;
            $this->page->meta_description = $product->meta_description;
            $this->page->meta_keywords = $product->meta_keywords;
        }
    }

    protected function prepareLang(){
        $lang = \Config::get('app.locale', 'en');

        if(\System\Models\PluginVersion::where('code', 'RainLab.Translate')->where('is_disabled', 0)->first()){
            $translator = \RainLab\Translate\Classes\Translator::instance();
            $activeLocale = $translator->getLocale();
            $lang = $activeLocale;
        }

        if(!empty(post('lang')))
            $lang = post('lang');

        \App::setLocale($lang);
    }

    public function getRelatedProducts($product){	
		$list = $product->categories->lists('id');

		$products = Item::whereHas('categories', function($query) use ($list){
			$query->whereIn('id', $list);
		})->where('id','<>', $product->id)
			->where('is_visible', 1)
			->orderBy('views_count', 'desc')
			->orderBy('sales_count', 'desc')
			->take(16)
			->get();

		foreach ($products as $product) {
			$product->setUrl($this->page->code, $this->controller);
		}

		return $products;
	}

	public function getRelatedProductsOfMerchandise($product){	

		$products = Item::where('product_related','=', $product->id)
			->where('is_visible', 1)
			->orderBy('views_count', 'desc')
			->orderBy('sales_count', 'desc')
			->take(16)
			->get();

		foreach ($products as $product) {
			$product->setUrl($this->page->code, $this->controller);
		}

		return $products;
	}
}
