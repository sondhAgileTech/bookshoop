<?php namespace Pixel\Shop\Components;

use Flash;
use Lang;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Pixel\Shop\Models\Order;
use Pixel\Shop\Models\Item;
use Pixel\Shop\Models\Category;
use Pixel\Shop\Models\Favorite;
use Pixel\Shop\Models\SalesSettings;
use Pixel\Shop\Components\CartTrait;
use Admin\Manager\Models\Banner;

class Home extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Home',
            'description' => 'Show home page'
        ];
    }

    public function defineProperties()
    {
        return [
        	'categoryFilter' => [
				'title'       => 'Category Filter',
				'description' => 'Look up the blog category using the supplied slug value. This property is used by the default component partial for marking the currently active category.',
				'type'        => 'dropdown',
				'default'     => '{{ :category }}',
			],
			'scope' => [
				'title'       => 'Scope by',
				'default'     => 'showItems',
				'type'        => 'dropdown',
				'options'     => [
					'showItems' => 'No scope (Show All)', 
					'onSale' => 'On Sale Only',
				]
			],
			'limitType' => [
				'title'       => 'Paginate or only Take',
				'default'     => 'paginate',
				'type'        => 'dropdown',
				'options' => [
					'paginate'	=> 'Paginate Items',
					'take'		=> 'Only Take a limit'
				]
			],
			'take' => [
				'title'       => 'Limit of products',
				'description' => 'Take X products only or paginate',
				'default'     => '20',
				'type'        => 'string',
				'validationPattern' => '^[0-9]+$',
				'validationMessage' => 'The Max Items property can contain only numeric symbols'                
			],
			'orderBy' => [
				'title'       => 'Order By',
				'description' => 'Order By',
				'default'     => 'name',
				'type'        => 'dropdown',
				'options'     => [
					'name' => 'Name', 
					'price' => 'Price with Tax', 
					'is_on_sale' => 'On Sale',
					'id' => 'ID',
					'code' => 'Code or SKU',
					'quantity' => 'Quantity',	
					'updated_at' => 'Updated At',
					'created_at' => 'Created At',
					'sales_count' => 'Sales count',
					'views_count' => 'Views count'
				]
			],   
			'sort' => [
				'title'       => 'Sort',
				'description' => 'Sort ASC or DESC',
				'default'     => 'asc',
				'type'        => 'dropdown',
				'options'     => ['asc'=>'Ascending', 'desc'=>'Descending']
			],              
			'productPage' => [
				'title'       => 'Product page',
				'description' => 'Product detail page',
				'type'        => 'dropdown',
				'default'     => 'product',
			],
			'categoryPage' => [
				'title'       => 'Products page by category',
				'type'        => 'dropdown',
				'default'     => 'products',
			],
			'showCategoriesFilter' => [
				'title'		  => 'Show categories filter',
				'type'		  => 'checkbox',
				'default'     => false,
			],
			'showSearchBar' => [
				'title'		  => 'Show search bar',
				'type'		  => 'checkbox',
				'default'     => false,
			],
			'showQuickAdd' => [
				'title'		  => 'Quick "add to cart"',
				'type'		  => 'checkbox',
				'default'     => true,
            ],
            'typeCategoriesFilter' => [
				'title'       => 'Categories Filter Type',
				'default'     => 'dropdown',
				'type'        => 'dropdown',
				'options'     => ['dropdown'=>'Dropdown', 'buttons'=>'Buttons Group']
			],
			'categoryForSlidePost' => [
				'title'       => 'Category Filter For Slide Post',
				'description' => 'Category Filter For Slide Post at home page .',
				'type'        => 'string',
				'default'     => '',
			],
			'categoryForMerchandise' => [
				'title'       => 'Category Filter For Merchandise',
				'description' => 'Show New Merchandise at home page .',
				'type'        => 'string',
				'default'     => '',
			],
        ];
    }

	protected function onSendFilter(){
		if(input('fill-all-cate')) {
			$data = $this->getProductOfCate();
			return [
				'data' => json_encode($data)
			];
		}

		if(input('fill-cate-best-seller')) {
			$data = $this->getProductOfCateBestSeller();
			return [
				'data' => json_encode($data),
			];
		}

		if(input('fill-cate-onsale')) {

			$data = $this->onSale();
			return [
				'data' => json_encode($data),
			];
		}
	}

	// FILTER ONSALE
	public function onSale() {
		$products = null;
		$page = $this->property('productPage');
		if (!$categoryId = $this->property('categoryForMerchandise'))
		return null;

		if (!$category = Category::whereSlug($categoryId)->first())
			return null;

		$query = Item::OnSale();

		if($category)
			$query->categories($category);
		
		$query->orderBy('id', 'DESC');
		$products = $query->get();

		$products->each(function($product) use ($page) {
			$product->setUrl($page, $this->controller);
		});

		$data = [];
		if(count($products) > 0) {
			foreach ($products as $key => $value) {
				$data[$key] = $value;
				$data[$key]['url_img'] = $value->gallery->first()->path ? $value->gallery->first()->path : '';
			}
		}

		return $data;
		
	}

	// FILTERS BEST SELLER
	public function getProductOfCateBestSeller(){

		$cateType = Category::where('slug', $this->property('categoryForMerchandise'))->first();
		if($cateType) {
			if(!$param = $this->paramName('categoryFilter')) {
				return;
			}
	
			$itemOrder = Order::get();
			$bestItemOrder = [];
	
			foreach ($itemOrder as $value) {
				foreach ($value->items as $item) {
					$bestItemOrder [] = $item;
				}
			}
	
			$categories = Category::where('parent_id','=', $cateType->id)->get();
			$page = $this->property('productPage');
			$list = array();
			
			$categories->each(function($item) use ($page, $param, &$list) {
				$item->setUrl($page, $this->controller, $param);
				if($item->items->count() > 0)
	
					$list[] = $item;
			});
	
			$data = [];
			if(!empty($list[0]->items)) {
				foreach ($list[0]->items as $key => $value) {
					foreach ($bestItemOrder as $k => $v) {
						if($value['id'] === $bestItemOrder[$k]['id']) {
							$data[$key] = $value;
							$data[$key]['page_url'] =$value->setUrl($page, $this->controller);
							$data[$key]['url_img'] = $value->gallery->first()->path ? $value->gallery->first()->path : '';
						}
					}
					
				}
			}
	
			return $data;
		}
	}

	// FILTERS
	public function getProductOfCate(){
		$products = null;
		$page = $this->property('productPage');
		if (!$categoryId = $this->property('categoryForMerchandise'))
		return null;

		if (!$category = Category::whereSlug($categoryId)->first())
			return null;

		$query = Item::select();

		if($category)
			$query->categories($category);
		
		$query->orderBy('id', 'DESC');
		$products = $query->get();

		$products->each(function($product) use ($page) {
			$product->setUrl($page, $this->controller);
		});

		$data = [];
		if(count($products) > 0) {
			foreach ($products as $key => $value) {
				$data[$key] = $value;
				$data[$key]['url_img'] = $value->gallery->first()->path ? $value->gallery->first()->path : '';
			}
		}

		return $data;
	}

    public function onRun()
	{
        $this->prepareLang();
		$this->addCss('/plugins/pixel/shop/assets/css/products.css');
		$this->addJs('/plugins/pixel/shop/assets/js/filter.js');
		$this->products = $this->page['products'] = $this->loadProducts();
		$this->settings = $this->page['shopSetting'] = SalesSettings::instance();
		$this->page['showSlide'] = $this->showSlideHomePage();
		$this->page['showNewsProduct'] = $this->showNewsProducts();
		$this->page['showMerchandise'] = $this->showMerchandise();
		$this->page['showSingleProduct'] = $this->showSingleProduct();

        $this->page['showCategoriesFilter'] = $this->property('showCategoriesFilter');
		$this->page['showSearchBar'] = $this->property('showSearchBar');
		$this->page['showQuickAdd'] = $this->property('showQuickAdd');
        $this->page['typeCategoriesFilter'] = $this->property('typeCategoriesFilter');
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

	// Show slide at home page
	protected function showSlideHomePage() {
		$banner = Banner::where('page', $this->page->title)->first();
		return $banner;
	}


	protected function showNewsProducts() {
		$products = null;
		$page = $this->property('productPage');
		if (!$categoryId = $this->property('categoryForSlidePost'))
		return null;

		if (!$category = Category::whereSlug($categoryId)->first())
			return null;

		$query = Item::select();

		if($category)
			$query->categories($category);
		
		$query->orderBy('updated_at');
		$products = $query->take(3)->get();

		$products->each(function($product) use ($page) {
			$product->setUrl($page, $this->controller);
		});

		return $products;
	}

	protected function showMerchandise() {
		$products = null;
		$page = $this->property('productPage');
		if (!$categoryId = $this->property('categoryForMerchandise'))
		return null;

		if (!$category = Category::whereSlug($categoryId)->first())
			return null;

		$query = Item::select();

		if($category)
			$query->categories($category);
		
		$query->orderBy('updated_at', 'DESC');
		$products = $query->take(4)->get();

		$products->each(function($product) use ($page) {
			$product->setUrl($page, $this->controller);
		});

		return $products;
	}

	protected function showSingleProduct() {
		$products = null;
		$page = $this->property('productPage');
		if (!$categoryId = $this->property('categoryForSlidePost'))
		return null;

		if (!$category = Category::whereSlug($categoryId)->first())
			return null;

		$query = Item::select();

		if($category)
			$query->categories($category);
		
		$query->orderBy('updated_at','DESC');
		$products = $query->take(1)->get();

		$products->each(function($product) use ($page) {
			$product->setUrl($page, $this->controller);
		});

		return $products[0];
	}

    // LOAD MODELS
    protected function loadCategory(){
		if (!$categoryId = $this->property('categoryFilter'))
			return null;

		if (!$category = Category::whereSlug($categoryId)->first())
			return null;

		return $category;
	}

	protected function loadProducts()
	{
		$page = $this->property('productPage');
		$scope = $this->property('scope');
		$category = $this->page['activeCategory'] = $this->loadCategory();
		$take = $this->property('take');
		$orderBy = $this->property('orderBy');
		$orderSort = $this->property('sort');
	    $products = null;

		$this->page['categoryList'] = $this->getCategoryList();

		$query = Item::select();

		if(input('search')){
			$query->where(function($query){
				$words = explode(' ', input('search'));

				foreach ($words as $word)
					$query->orWhere('name', 'LIKE', '%'.$word.'%');
			});
		}

		if($scope)
			$query->$scope();

		if($category)
			$query->categories($category);

		if($orderBy)
			$query->orderBy($orderBy, $orderSort);

		if($this->property('limitType') == 'take')
			$products = $query->take($take)->get();
		else
			$products = $query->paginate($take);
		
		$products->each(function($product) use ($page) {
			$product->setUrl($page, $this->controller);
		});

		return $products;
	}

    // OPTIONS
    public function getProductPageOptions(){
		return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
	} 

	public function getCategoryPageOptions(){
		return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
	}

	public function getCategoryFilterOptions(){
		$list = Category::lists('name', 'slug');
		array_unshift($list, trans('pixel.shop::lang.components.pl_all_cats'));
		return $list;
	}


	// METHODS
	public function getCategoryList(){
		$cateType = Category::where('slug', $this->property('categoryForMerchandise'))->first();
		if(!$param = $this->paramName('categoryFilter'))
			return;

		if($cateType) {
			$categories = Category::where('parent_id', $cateType->id)->get();
			$page = $this->property('categoryPage');
			$list = array();
			$empty = new Category();
			$empty->name = 'Best Sellers';
			$empty->setUrl($page, $this->controller, $param);
	
			$list[] = $empty;
			
			$categories->each(function($item) use ($page, $param, &$list) {
				$item->setUrl($page, $this->controller, $param);
	
				if($item->items->count() > 0)
					$list[] = $item;
			});
	
			return $list;
		}

		$list = array();
		$empty = new Category();
		$empty->name = 'Best Sellers';

		$list[] = $empty;
		return $list;
	}

	public function onSetFavorite(){
        $this->prepareLang();

		$item_id = post('id');
		
		if (class_exists("\RainLab\User\Models\User")){
			$user = \RainLab\User\Facades\Auth::getUser();
		}else{
			Flash::error('The plugin RainLab.User not found, please install first');
			return;
		}

		if($user){
			if($item_id){
				if($fav = Favorite::where('user_id', $user->id)->where('item_id', $item_id)->first()){
					$fav->is_favorite = !$fav->is_favorite;
					$fav->save();
				}else{
					$fav = Favorite::create([
						'user_id' => $user->id,
						'item_id' => $item_id,
						'is_favorite' => 1
					]);
				}

				$item = Item::find($item_id);

					return ['#favorite-product-'.$item_id => $this->renderPartial('@favorite', [
						'userLogged' => $user,
						'product' => $item
					])];
			}
		}else{
			Flash::error(trans('pixel.shop::lang.components.pl_please_login'));
			return;
		}
	}
}
