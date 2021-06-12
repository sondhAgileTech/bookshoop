<?php namespace Pixel\Shop\Components;

use Auth;
use Flash;
use Request;
use Redirect;
use Validator;
use Carbon\Carbon;
use Cms\Classes\Page;
use Pixel\Shop\Classes\Cart;
use Pixel\Shop\Models\Order;
use Cms\Classes\ComponentBase;
use RainLab\Location\Models\State;
use RainLab\Location\Models\Country;
use Pixel\Shop\Components\CartTrait;
use Pixel\Shop\Components\PaymentTrait;
use Pixel\Shop\Models\GatewaysSettings;
use Pixel\Shop\Models\SalesSettings;
use Pixel\Shop\Models\Item;
use Pixel\Shop\Models\Coupon;


class CartList extends ComponentBase
{
	use CartTrait;
	use PaymentTrait;
	public $totalQty = 0;
	public $totalQtyInStock = 0;
	public $itemId = "";
	public function componentDetails(){
		return [
			'name'        => 'Cart',
			'description' => 'show list item in cart'
		];
	}

	public function defineProperties(){
		return [
			'productPage' => [
				'title'       => 'Product page',
				'description' => 'Product detail page',
				'type'        => 'dropdown',
				'default'     => 'product',
			],
			'returnPage' => [
				'title'       => 'Return Payment Page',
				'type'        => 'dropdown',
				'default'     => 'return',
            ]
		];
    }

	protected function onAddToCartItem(){
        $this->prepareLang();
    	$cart = Cart::load();
		$item = Item::find(input('id'));
		foreach ($cart->items as $key => $value) {
			if($value['fake_id'] === input('fake_id')) {
				if(input('status') === 'plus') {
					if(input('quantity') > $value['total_quantity_in_stock'] || input('quantity') === "") {
						return [
							'type' => 'error_cart_quantity',
							'current_quantity' => $value['quantity'],
							'fake_id' => $value['fake_id']
						];
					}
					if(($value['total_quantity'] >= $value['total_quantity_in_stock'])) {
						return [
							'type' => 'error_cart_quantity',
							'current_quantity' => $value['quantity'],
							'fake_id' => $value['fake_id']
						];
					}
				}

				if(input('status') === 'subtract') {
					if(input('quantity') > $value['total_quantity_in_stock'] || input('quantity') === "") {
						return [
							'type' => 'error_cart_quantity',
							'current_quantity' => $value['quantity'],
							'fake_id' => $value['fake_id']
						];
					}
				}

				if(input('status') === 'enter') {
					if(input('quantity') > $value['total_quantity_in_stock'] || input('quantity') === "") {
						return [
							'type' => 'error_cart_quantity_in_stock',
							'current_quantity' => $value['quantity'],
							'fake_id' => $value['fake_id'],
							'total_stock' => $value['total_quantity_in_stock']
						];
					}
				}

				$this->itemId = $value['fake_id'];
				$value['quantity'] = (int)input('quantity');
				$cart->items[$key]['quantity'] = (int)input('quantity');
				$cart->items[$key]['total'] = (int)input('quantity') * $value['price'];
				$cart->save();
			}

			if($value['id'] === (int)input('id') && $value['download_price'] === 0) {
				$this->totalQty = $this->totalQty + (int)$value['quantity'];
				$this->totalQtyInStock = (int)$value['total_quantity_in_stock'];
				$cart->items[$key]['total_quantity'] = (int)$this->totalQty;
				$cart->save();
			}
		}

		$cart->updateTotals();
		$cart->save();

		return [
			'total' => $cart->total,
			'current_quantity' => (int)input('quantity'),
			'total_quantity' => $this->totalQty,
			'total_quantity_in_stock' => $this->totalQtyInStock,
			'fake_id' => $this->itemId

		];
    }

	public function onChangeStatusItem() {
		$this->prepareLang();
    	$cart = Cart::load();
		$status = input('status');
		foreach ($cart->items as $key => $value) {
			if($value['fake_id'] === input('fake_id')) {
				if(!$status) {
					$cart->items[$key]['status'] = 0;
					$cart->items[$key]['total'] = 0;
					$this->totalQty = $cart->items[$key]['total_quantity'] - 1;
					$cart->save();
				} else {
					$this->totalQty = $cart->items[$key]['total_quantity'] + 1;
					$cart->items[$key]['status'] = 1;
					$cart->items[$key]['total'] = $value['download_price'] === 1 ? $value['price'] : $value['quantity'] * $value['price'];
					$cart->save();
				}
			}
		}

		if(!empty($cart->items)) {
			foreach ($cart->items as $key => $value) {
				if($value['id'] === (int)input('id') && $value['download_price'] === 0) {
					$cart->items[$key]['total_quantity'] = $this->totalQty;
					$cart->save();
				}
			}
		}
		$cart->updateTotals();
		$cart->save();

		return [
			'#cart_count' => count($cart->items),
			'update_change_status' => 'success',
			'total' => $cart->total
		];
	}

	public function onDeleteItem() {
		$cart = Cart::load();
		foreach ($cart->items as $key => $value) {
			if($value['id'] === (int)input('id')) {
				$cart->items[$key]['total_quantity'] = $cart->items[$key]['total_quantity'] - 1;
				$cart->save();
			}
			if($value['fake_id'] === input('fake_id')) {
				unset($cart->items[$key]);
			}
		}
		$cart->updateTotals();
		$cart->save();
		return [
			'delete_item' => true,
		];
	}
    
    public function getCustomFieldsSettings(){
        $fields = [
            'customer' => $this->prepareFields('customer'),
            'billing' => $this->prepareFields('billing'),
            'shipping' => $this->prepareFields('shipping')
        ];

        return $fields;
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

    public function prepareFields($key){
        $fields = SalesSettings::get($key . '_custom_fields');

        if(!$fields)
            return [];

        foreach ($fields as $key => $field) {
            $fields[$key]['name'] = str_slug($field['label'], '_');

            if(!empty($field['rules'])){
                $attrs = '';
                $rules = explode('|', $field['rules']);
                
                foreach ($rules as $rule) {
                    $parts = explode(':', $rule);

                    if(strpos($rule, 'min:') !== false)
                        $attrs .= ' minlength="'.$parts[1].'"';

                    if(strpos($rule, 'max:') !== false)
                        $attrs .= ' maxlength="'.$parts[1].'"';

                    if(strpos($rule, 'required') !== false)
                        $attrs .= ' required';

                    if(strpos($rule, 'email') !== false)
                        $fields[$key]['type'] = 'email';
                }

                $fields[$key]['attributes'] = $attrs;
            }
        }

        return $fields;
    }

	public function getProductPageOptions(){
		return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
	}

	public function getReturnPageOptions(){
		return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
	}

	public function onRun(){
        $this->prepareLang();
    	$cart = Cart::load();
		$order = $cart->createOrderFromCart();
		if(input('cart_id'))
			Cart::load(input('cart_id'));

		if(input('order_id')){
			if($order = Order::find(input('order_id'))){
				if(input('cancel')){
					$order->status = 'cancelled';
					$order->save();
				}

				if(input('paymentHash')){
					$hash = [
						$order->id,
						GatewaysSettings::get('pixelpay_app'),
						GatewaysSettings::get('pixelpay_hash')
					];

					$hash = implode('|', $hash);
					$hash = md5($hash);

					if($hash == input('paymentHash')){
						$order->status = 'await_fulfill';
						$order->is_paid = true;
						$order->paid_at = Carbon::now();
						$order->save();

						// $order->reduceInventory();
						$order->sendNotification();
						Cart::clear();
					}else{
						$this->page['validationFailed'] = true;
					}
				}
				
				$this->page['order'] = $order;
			}
		}

		$this->page['cart'] = $cart = Cart::load();
		// dd($this->page['cart']); 
		$this->page['user'] = $user = $this->user();

		$this->page['product_page'] = $this->property('productPage');
		$this->page['return_page'] = $this->property('returnPage');
		$this->page['cancel_page'] = $this->property('cancelPage');

		$this->page['countries'] = Country::isEnabled()->orderBy('is_pinned', 'desc')->get();
        $this->page['settings'] = GatewaysSettings::instance();
        
        $shippingCountry = null;
        $billingCountry = null;

		if(Country::isEnabled()->count() == 1){
            $onlyOneCountry = Country::isEnabled()->first();
            $shippingCountry = $billingCountry = $onlyOneCountry;
			$this->page['shipping_states'] = $this->page['billing_states'] = $onlyOneCountry->states ?? null;
        }
        
        if(!empty($cart->billing_address['country'])){
            $billingCountry = Country::isEnabled()->where('code', $cart->billing_address['country'])->first();
        }elseif($user){
            if($user->is_ship_same_bill && !empty($user->shipping_address['country']))
                $billingCountry = Country::isEnabled()->where('code', $user->shipping_address['country'])->first();
            elseif(!empty($user->billing_address['country']))
                $billingCountry = Country::isEnabled()->where('code', $user->billing_address['country'])->first();
        }

        if(!empty($cart->shipping_address['country'])){
            $shippingCountry = Country::isEnabled()->where('code', $cart->shipping_address['country'])->first();
        }elseif($user && !empty($user->shipping_address['country'])){
            $shippingCountry = Country::isEnabled()->where('code', $user->shipping_address['country'])->first();
        }

        $this->page['billing_country'] = $billingCountry->code ?? null;
        $this->page['shipping_country'] = $shippingCountry->code ?? null;

        $this->page['billing_states'] = $billingCountry ? $billingCountry->states : null;
        $this->page['shipping_states'] = $shippingCountry ? $shippingCountry->states : null;

        $this->page['methods_list'] = $billingCountry && property_exists($billingCountry, 'code') ? $this->getPaymentMethodsList($billingCountry->code) : null;
        $this->page['method_country_code'] = $billingCountry->code ?? null;

		$this->addCss('/plugins/pixel/shop/assets/css/alertify.min.css');
		$this->addCss('/plugins/pixel/shop/assets/css/cart_list.css');
		$this->addJs('/plugins/pixel/shop/assets/js/alertify.min.js');
		$this->addJs('/plugins/pixel/shop/assets/js/product.js');
		$this->addJs('/plugins/pixel/shop/assets/js/button.js');

	}

	public function user(){
		if (!$user = Auth::getUser())
			return null;

		return $user;
	}

	public function onShippingCountrySelect(){
        $this->prepareLang();
        
		if($country = Country::where('code', input('shipping_address.country'))->first()){
            $cart = Cart::load();
            $cart->shipping_address['country'] = input('shipping_address.country');
            $cart->updateTotals();
            $cart->save();

			$return = [
                '#shop__cart-partial' => $this->renderPartial('@list_cart_checkout', [ 'cart' => $cart ]),
                '.shippingStateContainer' => $this->renderPartial('@shiping_state_option', [
                    'shipping_states' => $country->states
                ]), 
                'code' => $country->code
            ];

			if(input('is_ship_same_bill'))
				$return['.shop__methods-list'] = $this->renderPartial('@methods', [
                    'methods_list' => $this->getPaymentMethodsList(input('shipping_address.country')),
                    'method_country_code' => input('shipping_address.country')
				]);

			return $return;
		}
	}

	public function onBillingCountrySelect(){
        $this->prepareLang();

		if($country = Country::where('code', input('billing_address.country'))->first()){
			$return = ['.billingStateContainer' => $this->renderPartial('@billing_states', [
				'billing_states' => $country->states
			]), 'code' => $country->code];

			$return['.shop__methods-list'] = $this->renderPartial('@methods', [
                'methods_list' => $this->getPaymentMethodsList(input('billing_address.country')),
                'method_country_code' => input('billing_address.country')
			]);

			return $return;
		}
	}

	public function onShippingStateSelect(){
        $this->prepareLang();

		$cart = Cart::load();
		$cart->shipping_address['state'] = input('shipping_address.state');
		$cart->shipping_address['country'] = input('shipping_address.country');
		$cart->updateTotals();
		$cart->save();

		return [ '#shop__cart-partial' => $this->renderPartial('@list_cart_checkout', [ 'cart' => $cart ]) ];
    }
    
    public function onSameAddressChange(){
        $this->prepareLang();

        $cart = Cart::load();
		$cart->billing_address['state'] = input('shipping_address.state');
		$cart->billing_address['country'] = input('shipping_address.country');
		$cart->updateTotals();
        $cart->save();
        
        $methodCountry = input('is_ship_same_bill') ? 'shipping' : 'billing';

		return [ 
            '#shop__cart-partial' => $this->renderPartial('@list_cart_checkout', [ 'cart' => $cart ]),
            '.shop__methods-list' => $this->renderPartial('@methods', [
                'methods_list' => $this->getPaymentMethodsList(input($methodCountry . '_address.country')),
                'method_country_code' => input($methodCountry . '_address.country')
			])
        ];
    }
}
