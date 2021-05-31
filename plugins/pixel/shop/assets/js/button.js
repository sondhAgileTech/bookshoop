var CartButton = {};

CartButton.interval = null;
CartButton.intervalTimeOut = 5000;

CartButton.onSuccess = function(data) {
	if(data.type == 'error_cart_quantity') {
		alertify.notify('Sorry, this product is now out of stock', 'warning', 10);
		return false;
	}

	if(data.type == 'download-by-email') {
		download_file(data.url,data.name);
		$("#type_buy").val("");
		$("#email_download").val("");
	}

	if(data.type == 'error'){
		alertify.error('Sorry ! Not available book to download');
	}

	if(data.type == 'success'){
		alertify.notify('Add this item to cart success', 'success', 13);
	}
    if(data.itemAdded) CartButton.show();
	window.location.reload();
}


CartButton.onSuccessAddMoreItem = function(data) {
	if(data.type == 'error_cart_quantity') {
		alertify.notify('Sorry, this product is now out of stock', 'warning', 10);
		$(`.quantity-${data.fake_id}`).val(data.current_quantity);
		return false;
	}
	var total = parseFloat(data.total).toFixed(2);
	$(".cart-subtotal-value").text(`$${total}`);
	$(".btn-co").text(`$${total}`);
	console.log(data.fake_id);
	// console.log($("body").find(`.quantity-cart-${data.fake_id}`));
	$("body").find(`.quantity-cart-${data.fake_id}`).val(data.current_quantity);
	$("body").find(`.quantity-${data.fake_id}`).val(data.current_quantity);
	// $(`.quantity-${data.fake_id}`).val(data.current_quantity);
	// $(`.quantity-cart-${data.fake_id}`).val(data.current_quantity);
	if(data.total_quantity < data.total_quantity_in_stock) {
		$(`.plus-${data.fake_id}`).removeAttr("disabled");
	} else {
		$(`.plus-${data.fake_id}`).attr('disabled', true);
	}

    if(data.itemAdded) CartButton.show();
}

CartButton.onSuccessonChangeStatus = function(data) {

	var total = parseFloat(data.total).toFixed(2);
	$(".cart-subtotal-value").text(`$${total}`);
	$(".btn-co").text(`${total}`);
    if(data.itemAdded) CartButton.show();
}

CartButton.onSuccessonRemoveItem = function(data) {
	window.location.reload();
}



CartButton.show = function(text){
	$('.shop__cart-button').removeClass('empty');

	$('.shop__cart-button').addClass('notify');
	CartButton.interval = setTimeout(function(){
		$('.shop__cart-button').removeClass('notify');
	}, CartButton.intervalTimeOut);
};

/* Helper function */
function download_file(fileURL, fileName) {
    // for non-IE
    if (!window.ActiveXObject) {
        var save = document.createElement('a');
        save.href = fileURL;
        save.target = '_blank';
        var filename = fileURL.substring(fileURL.lastIndexOf('/')+1);
        save.download = fileName || filename;
	       if ( navigator.userAgent.toLowerCase().match(/(ipad|iphone|safari)/) && navigator.userAgent.search("Chrome") < 0) {
				document.location = save.href; 
// window event not working here
			}else{
		        var evt = new MouseEvent('click', {
		            'view': window,
		            'bubbles': true,
		            'cancelable': false
		        });
		        save.dispatchEvent(evt);
		        (window.URL || window.webkitURL).revokeObjectURL(save.href);
			}	
    }

    // for IE < 11
    else if ( !! window.ActiveXObject && document.execCommand)     {
        var _window = window.open(fileURL, '_blank');
        _window.document.close();
        _window.document.execCommand('SaveAs', true, fileName || fileURL)
        _window.close();
    }
}

jQuery(document).ready(function($) {
	$('.shop__cart-button').addClass('active');
	$('.increment-btn').click(function() {
		$('#add-more-quantity').val('plus');
	});
	$('.decrement-btn').click(function() {
		$('#add-more-quantity').val('subtract');
	});
});