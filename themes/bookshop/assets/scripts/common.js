$(document).ready(function(){

    $("#value-price").keyup(function (e) {
		computePriceWithTax();
	});

    $("#btn-download").click(function(){
        var priceDownload = parseFloat($("#value-price").val());
        var dollarPrice = 0.00;
        if(priceDownload > parseFloat(dollarPrice)) {
            $('#type_buy').val('cart_buy_money');
            $('#price_download').val(priceDownload);
            $('#form-add-to-cart').submit();
            $('#exampleModalCenter').modal('hide');
        } else  {
            $(".owl-money").css("display", "none");
            $("#form-download-book").html('<div class="form-group"><label for="">Email</label><input type="email" name="email" id="email-download" class="form-control" placeholder="Enter your email to download book" required></br><button type="button" id="btn-download-by-email" class="btn btn-primary">Download Free</button>&nbsp;<button type="button" id="btn-download-by-money" class="btn btn-secondary">Money Download</button></div>');
            $('#form-download-book').css("display", "block");
            $('#btn-download-by-money').click(function(){
                $(".owl-money").css("display", "block");
                $('#form-download-book').css("display", "none");
            })
            $('#btn-download-by-email').click(function(){
                $email = $('#email-download').val();
                if($email != null) {
                    $('#type_buy').val('email_buy_free');
                    $('#email_download').val($email);
                } else {
                    alert("email can not null");
                }
            })
        }
    });

    function computePriceWithTax(){
        var tax = 0.00;
        var basePrice = parseFloat($("#value-price").val().replace(',', '')) || 0.00;
    
        $("#Form-field-Item-tax-group").find('input[type="checkbox"]').each(function(index, el) {
            if($(this).prop('checked'))
                tax += ((parseInt($(this).val()) / 100) * basePrice);
        });
    
        var price = (basePrice + tax) || 0.00;
    
        $("#Retail_price_with_tax").html(formatMoney(price));
    }

    function formatMoney(n, c, d, t) {
        var c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;
    
        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };
});