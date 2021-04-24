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
            $("#form-download-book").html('<div class="form-group"><h5 class="title-money-download" for="">Please input your email to download</h5><input type="email" name="email" id="email-download" class="form-control value-money-down-email" placeholder="Enter your email" required></br><button type="button" id="btn-download-by-email" class="btn-next-down">Download</button>&nbsp;<button type="button" id="btn-download-by-money" class="btn-next-down-back">Back</button></div>');
            $('#form-download-book').css("display", "block");
            $('#btn-download-by-money').click(function(){
                $(".owl-money").css("display", "block");
                $('#form-download-book').css("display", "none");
            })
            $('#btn-download-by-email').click(function(){
                $email = $('#email-download').val();
               $emailCheck = isValidEmailAddress($email);
                if($emailCheck == true) {
                    $('#type_buy').val('email_buy_free');
                    $('#email_download').val($email);
                    $('#form-add-to-cart').submit();
                    $('#exampleModalCenter').modal('hide');
                } else {
                   alert("Email not correct");
                }
            })
        }
    });

    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    }

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