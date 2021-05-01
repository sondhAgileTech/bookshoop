var CartButton = {};

CartButton.interval = null;
CartButton.intervalTimeOut = 5000;

CartButton.onSuccess = function(data) {

	if(data.type == 'download-by-email') {
		download_file(data.url,data.name);
		$("#type_buy").val("");
		$("#email_download").val("");
	}

	if(data.type == 'error'){
		alert("Sorry ! Not available book to download");	
	}
    if(data.itemAdded) CartButton.show();
	window.location.reload();
}


CartButton.onSuccessAddMoreItem = function(data) {

	var total = parseFloat(data.total).toFixed(2);
	$(".cart-subtotal-value").text(`$${total}`);
	$(".btn-co").text(`${total}`);
    if(data.itemAdded) CartButton.show();


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
});