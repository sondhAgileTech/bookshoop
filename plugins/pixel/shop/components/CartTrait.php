<?php namespace Pixel\Shop\Components;

use Flash;
use Pixel\Shop\Models\Item;
use Pixel\Shop\Classes\Cart;
use Pixel\Shop\Models\Coupon;
use Pixel\Shop\Models\Order;
use Illuminate\Support\Str;

trait CartTrait{
	public $quantity = 1;
	public $total_quantity = 0;
    protected function onAddToCart(){
        $this->prepareLang();

    	$cart = Cart::load();
    	$item = Item::find(input('id'));

		if(input('type_buy') == "nomal-cart") {
			if(!empty($cart->items)) {
				foreach ($cart->items as $key => $value) {
					if($value['id'] === (int)input('id') && $value['download_price'] === 0) {
						if($cart->items[$key]['quantity'] >= $value['total_quantity_in_stock']) {
							return [
								'type' 		  => 'error_cart_quantity'
							];
						}
						$cart->items[$key]['quantity'] = $value['quantity'] + 1 ;
						$cart->items[$key]['total'] = $cart->items[$key]['quantity'] * $value['price'];
						$cart->items[$key]['total_quantity'] = $cart->items[$key]['quantity'];
						$cart->items[$key]['status'] = 1;
						$this->quantity = $cart->items[$key]['quantity'];
						$cart->updateTotals();
						$cart->save();
						return [
							'#cart_total' => $cart->total,
							'type'   => 'success'
						];
					}
				}
			}

			// if(!empty($cart->items)) {
			// 	foreach ($cart->items as $key => $value) {
			// 		if($value['id'] === (int)input('id') && $value['download_price'] === 0) {
			// 			$this->quantity = $this->quantity + $value['quantity'];
			// 		}
			// 	}
			// }
			// if($this->quantity > $item->quantity) {
			// 	return [
			// 		'type' 		  => 'error_cart_quantity'
			// 	];
			// }
			// if(!empty($cart->items)) {
			// 	foreach ($cart->items as $key => $value) {
			// 		if($value['id'] === (int)input('id') && $value['download_price'] === 0) {
			// 			$cart->items[$key]['total_quantity'] = $this->quantity;
			// 			$cart->save();
			// 		}
			// 	}
			// }
			// $item['total_quantity'] = $this->quantity;
		}

		if(input('type_buy') == 'email_buy_free') {
			$file = Item::where('id', input('id'))->first();
			if($file) {
				if($item->gallery->first()) {
					$thumb = $item->gallery->first()->path ? $item->gallery->first()->path : "";
				} else {
					$thumb = "";
				}
				$data = [
					"id" => $item->id,
					"index" => null,
					"title" =>  $item->name,
					"description" => $item->description,
					"tax" => 0,
					"price" => 0,
					"quantity" => 0,
					"total" => 0,
					"thumb" => $thumb ? $thumb : ""
				];

				$order = new Order;
				$order->status = 'download_by_email';
				$order->gateway = 'gm';
				$order->customer_email = input('email_download');
				$order->items = [$data];
				$order->currency = 'USD';
				$order->save();

				return [
					'url' 		  => $file->attachments->path,
					'type'		  => 'download-by-email',
					'name'		  => $file->attachments->file_name
				];
			} else {
				return [
					'type' 		  => 'error'
				];
			}
		}

    	$options = input('options');
    	$optionsIndex = $this->parseOptions(input('options_index'));
    	$index = input('options_index');
    	$qty = input('quantity');
		$price = input('price');
		if((int)$qty < 1) {
			$qty = 1;
		}

		if(input('type_buy') == 'cart_buy_money') {
			$price = input('price_download');
			$item['download_price'] = 1;
			$file = Item::where('id', input('id'))->first();
			if($file) {
				$item['path_file_download'] = $file->attachments->path;
				$item['name_file_download'] = $file->attachments->file_name;
				$item['fake_id'] = Str::random(5);
			}
		}

    	if($item->is_with_variants){
	    	foreach ($item->variants as $variant) {					
				$id = $variant['id'];
				$optionVal = null;

				if(array_key_exists($id, $optionsIndex) && !empty($optionsIndex[$id]))
					$optionVal = $optionsIndex[$id];

				if($optionVal == null && !$variant['optional'])
					return [ Flash::error(trans('pixel.shop::lang.messages.option_required', ['option' => $variant['variant']])) ];
			}
		}

		$item['fake_id'] = Str::random(5);
    	$itemAdded = $cart->addItem($item, $options, $price, $qty, $index);

    	$cart->updateTotals();
    	$cart->save();

    	return [
    		'#cart_count' => count($cart->items),
    		'#cart_total' => $cart->total,
    		'itemName' => $item->name,
    		'itemAdded' => $itemAdded,
			'type'   => 'success'
    	];
    }

    protected function parseOptions($option_index){
    	$option_index = explode(',', $option_index);
    	$options = [];

    	foreach ($option_index as $el) {
    		if(empty($el))
    			continue;

    		$el = explode('::', $el);
    		$options[$el[0]] = $el[1];
    	}

    	return $options;
    }

    protected function onDeleteFromCart(){
        $this->prepareLang();
        
    	$cart = Cart::load();
    	$index = input('index');

    	$cart->deleteItem($index);
    	$cart->updateTotals();
    	$cart->save();

    	Flash::success(trans('pixel.shop::lang.messages.item_removed'));

    	return [ '#shop__cart-partial' => $this->renderPartial('@list_cart_checkout', [ 'cart' => $cart ]) ];
    }

    protected function onClearCart(){
        $this->prepareLang();
        
    	$cart = Cart::clear();

    	Flash::success(trans('pixel.shop::lang.messages.cart_clear'));

    	return [ '#shop__cart-partial' => $this->renderPartial('@list_cart_checkout', [ 'cart' => $cart, 'product_page' => $this->property('productPage') ]) ];
    }

    protected function onClearCoupon(){
        $this->prepareLang();

    	$cart = Cart::load();

    	if($coupon = Coupon::where('code', $cart->coupon['code'])->first())
    		$coupon->decrement('used_count', 1);

    	$cart->coupon = null;
    	$cart->updateTotals();
    	$cart->save();

    	Flash::success(trans('pixel.shop::lang.messages.coupon_clear'));

    	return [ '#shop__cart-partial' => $this->renderPartial('@list_cart_checkout', [ 'cart' => $cart ]) ];
    }

    protected function onCheckCoupon(){
        $this->prepareLang();

    	$code = strtoupper(input('coupon_code'));
    	if(!$coupon = Coupon::where('code', $code)->first())
    		return [ Flash::error(trans('pixel.shop::lang.coupon_codes.code_5')) ];

    	$cart = Cart::load();

    	$coupon->isValid($cart->subtotal);

    	if($coupon->errorCode > 0)
    		return [ Flash::error(trans('pixel.shop::lang.coupon_codes.code_' . $coupon->errorCode)) ];

    	$cart->coupon = [
    		'id' => $coupon->id,
    		'code' => $coupon->code,
    		'discount' => $coupon->getValueLabel(),
    		'amount' => $coupon->getFinalDiscount($cart->subtotal)
    	];

    	$coupon->increment('used_count', 1);

    	$cart->updateTotals();
    	$cart->save();

    	return [ 
    		'#shop__cart-partial' => $this->renderPartial('@list_cart_checkout', [ 'cart' => $cart ]),
    		Flash::success(trans('pixel.shop::lang.coupon_codes.code_0'))
    	];
    }
}
