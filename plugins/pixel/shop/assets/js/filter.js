function onSuccess(data) {
    var result = JSON.parse(data.responseJSON.data);
    console.log(result);
    if(result && result != null) {
        $('#ss-list-body-merchandise .ss-box-item').remove();
        $.each(result, function( index, product ) {
            var html = `
                <div class="ss-box-item">
                <div class="ss-item">
                    <div class="item-img">
                        <a href="${product.url}" class="imgc" title="${product.name}">
                            <img src="${product.url_img}" alt="${product.name}">
                            <span>$${product.price}</span>
                        </a>
                    </div>
                    <div class="item-body">
                        <h3 class="item-title"><a href="${product.url}" title="${product.name}">${product.name}</a></h3>
                        <div class="item-text">${product.short_description}</div>
                        <div class="btn-more blu"><a href="${product.url}" title="${product.name}">Buy now</a></div>
                    </div>
                </div>
            </div>
            `;

            $('#ss-list-body-merchandise').append(html);
        });
    }

}
