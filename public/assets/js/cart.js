function getCart() {
    $.ajax({
        type: 'GET',
        url: '/cart',
        success: function (data) {
            $('#cart-dropdown').html(data.view);
        },
        error: function (data) {
            console.log("Error for getting cart");
        }
    });
}

function getcartList() {
    $.ajax({
        type: 'GET',
        url: '/cart/list',
        success: function (data) {
            $('#cart-list').html(data.view);
            $('#checkout-form').disabled = false;
            $('#checkout-button').removeClass("disabled");
            if (data.grand_total < 1){
                $('#form-message').show();
                $('#checkout-button').addClass("disabled");
            }
        },
        error: function (data) {
            console.log("Error in getting cart list");
        }
    });
}

getCart();
getcartList();

function addToCart(product, csrf) {
    $.ajaxSetup({
        headers: { 
            'X-CSRF-TOKEN': csrf
        }
    });
    var formData = {
        'product': product
    };
    $.ajax({
        type: 'POST',
        url: '/cart/add',
        data: formData,
        dataType: 'json',
        success: function (data) {
            $('#cart-dropdown').html(data.view);
            $('#card-message').html("Added to Cart");
            $('#cart-message').slideToggle(200);
            $("#cart-message").delay(2000).fadeOut(200); 
        },
        error: function (data) {
            if (data.status == 401) {
                $('#message').slideToggle(200);
                $('#message').delay(2000).fadeOut(200);
            }
            console.log("Error from the server");
        }
    });
}

function removeItem(item, csrf) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrf
        }
    });
    var formData = {
        'cartItem': item
    };
    $.ajax({
        type: 'POST',
        url: '/cart/remove',
        data: formData,
        dataType: 'json',
        success: function (data) {
            getCart();
            getcartList();
            $('#cart-message').html("Item Removed<br>from Cart");
            $('#cart-message').slideToggle(10);
            $("#cart-message").delay(2000).slideToggle(10);
        },
        error: function (data) {
            if (data.status == 401) {
                $('#message').html("<strong>Login to<br>Add to Cart</strong>");
            } else if (data.status == 404) {
                $('#message').html("Data Not Found");
            }
            $('#message').show();
            $('#message').delay(2000).fadeOut(2000);
            console.log("Error from the server");
        }
    });
}