<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
  $name = $_POST['name'];
  $location = $_POST['location'];
  $facebook = $_POST['facebook'];
  $website = $_POST['website-url'];
  $video = $_POST['video-url'];
  $gmail = $_POST['gmail'];
print_r($gmail);


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
    <link rel="stylesheet" href="css/payment.css">
    <title>Payment Gateway</title>

    <link rel="icon" href="images/favicon_Payment/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <div class="columns-container">
        <div id="columns" class="container">
            <div class="clearfix row">
                <div id="center_column" class="center_column col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="order-proccess col-md-6 col-xs-12">
                            <div class="breadcrumb clearfix"> <a class="home" href="index.html"
                                    title="Return to Home">Home</a> <span class="navigation-pipe">/</span> Your shopping
                                cart</div>
                            <div class="section__header">
                                <h2 class="section__title">Payment method</h2>
                                <p class="section__text">
                                    All transactions are secure and encrypted.
                                </p>
                            </div>
                            <div class="order-proccess-inner">
                                <input id="tab-4" class="not-styling toggle-tab" type="radio" name="order-tab"
                                    checked="">
                                <div id="opc_payment_methods" class="opc-main-block tab-content-4 order-tab-content">
                                    <div id="opc_payment_methods-overlay" class="opc-overlay"></div>
                                    <div class="paiement_block">
                                        <div id="HOOK_TOP_PAYMENT"></div>
                                        <div id="opc_payment_methods-content">
                                            <div id="HOOK_PAYMENT" class="row">
                                                <div class="row"></div>
                                                <form id="paypal_payment_form_payment" class="paypal_payment_form"
                                                    action="https://prestapro.ru/modules/paypal/express_checkout/payment.php"
                                                    data-ajax="false" title="Pay with PayPal" method="post">
                                                    <input type="hidden" name="express_checkout" value="payment_cart">
                                                    <input type="hidden" name="current_shop_url"
                                                        value="http://prestapro.ru/quick-order?">
                                                    <input type="hidden" name="bn" value="PRESTASHOP_EC">
                                                </form>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <input class="input-radio" id="checkout_payment_gateway_4028885"
                                                            data-backup="payment_gateway_4028885" aria-expanded="true"
                                                            aria-controls="payment-gateway-subfields-4028885"
                                                            type="radio" value="4028885" checked="checked"
                                                            name="checkout[payment_gateway]">
                                                        <div class="payment_module stripe-payment-16 ">
                                                            <h3 class="stripe_title">Credit card </h3>
                                                            <ul data-brand-icons-for-gateway="2474096">
                                                                <li class="payment-icon payment-icon--visa"
                                                                    data-payment-icon="visa">
                                                                    <span class="visually-hidden">Visa</span>
                                                                </li>
                                                                <li class="payment-icon payment-icon--master"
                                                                    data-payment-icon="master">
                                                                    <span class="visually-hidden">Mastercard</span>
                                                                </li>
                                                                <li class="payment-icon payment-icon--discover"
                                                                    data-payment-icon="discover">
                                                                    <span class="visually-hidden">Discover</span>
                                                                </li>
                                                            </ul>
                                                            <div id="card-token-success" class="alert alert-success">
                                                                Payment token has been created successfully, now
                                                                transaction is in progress...</div>
                                                            <div id="stripe-ajax-loader"><img
                                                                    src="/modules/stripejs/views/img/ajax-loader.gif"
                                                                    alt=""> Do not press BACK or REFRESH while
                                                                processing...</div>
                                                            <div id="stripe-translations"> <span
                                                                    id="stripe-incorrect_ownername">The card owner name
                                                                    is empty.</span> <span
                                                                    id="stripe-incorrect_number">The card number is
                                                                    incorrect.</span> <span
                                                                    id="stripe-invalid_number">The card number is not a
                                                                    valid credit card number.</span> <span
                                                                    id="stripe-invalid_expiry_month">The card's
                                                                    expiration month is invalid.</span> <span
                                                                    id="stripe-invalid_expiry_year">The card's
                                                                    expiration year is invalid.</span> <span
                                                                    id="stripe-invalid_cvc">The card's security code is
                                                                    invalid.</span> <span id="stripe-expired_card">The
                                                                    card has expired.</span> <span
                                                                    id="stripe-incorrect_cvc">The card's security code
                                                                    is incorrect.</span> <span
                                                                    id="stripe-incorrect_zip">The card's zip code failed
                                                                    validation.</span> <span
                                                                    id="stripe-card_declined">The card was
                                                                    declined.</span> <span id="stripe-missing">There is
                                                                    no card on a customer that is being charged.</span>
                                                                <span id="stripe-processing_error">An error occurred
                                                                    while processing the card.</span> <span
                                                                    id="stripe-rate_limit">An error occurred due to
                                                                    requests hitting the API too quickly. Please let us
                                                                    know if you're consistently running into this
                                                                    error.</span> <span id="stripe-3d_declined">The card
                                                                    doesn't support 3DS.</span> <span
                                                                    id="stripe-no_api_key">There's an error with your
                                                                    API keys. If you're the administrator of this
                                                                    website, please go on the "Connection" tab of your
                                                                    plugin.</span>
                                                            </div>
                                                            <form action="#" id="stripe-payment-form" _lpchecked="1">
                                                                <div class="stripe-payment-errors"></div>
                                                                <a name="stripe_error"></a>
                                                                <input type="hidden" id="stripe-publishable-key"
                                                                    value="pk_live_ccMksScZViYphGWZIQSCICvA">
                                                                <div>
                                                                    <input type="text" autocomplete="off"
                                                                        class="stripe-name" data-stripe="name"
                                                                        title="xx xx" value="xx xx">
                                                                </div>
                                                                <div>
                                                                    <input type="text" size="20" autocomplete="off"
                                                                        class="stripe-card-number" id="card_number"
                                                                        data-stripe="number"
                                                                        placeholder="●●●● ●●●● ●●●● ●●●●">
                                                                </div>
                                                                <div>
                                                                    <input type="text" size="7" autocomplete="off"
                                                                        id="card_expiry" class="stripe-card-expiry"
                                                                        maxlength="5" placeholder="MM/YY">
                                                                </div>
                                                                <div>
                                                                    <input type="text" size="7" autocomplete="off"
                                                                        data-stripe="cvc" class="stripe-card-cvc"
                                                                        placeholder="●●●"> <a href="javascript:void(0)"
                                                                        class="stripe-card-cvc-info"> What's this?<div
                                                                            class="cvc-info"> The CVC (Card Validation
                                                                            Code) is a 3 or 4 digit code on the reverse
                                                                            side of Visa, MasterCard and Discover cards
                                                                            and on the front of American Express cards.
                                                                        </div> </a>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </form>
                                                        </div>
                                                        <div id="modal_stripe" class="modal">
                                                            <div id="result_3d"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-12">
                                                        <p class="payment_module paypal">
                                                            <input class="input-radio"
                                                                id="checkout_payment_gateway_4028885"
                                                                data-backup="payment_gateway_4028885"
                                                                aria-expanded="true"
                                                                aria-controls="payment-gateway-subfields-4028885"
                                                                type="radio" value="4028885" checked="checked"
                                                                name="checkout[payment_gateway]">
                                                            <a href="javascript:void(0)"
                                                                onclick="$('#paypal_payment_form_payment').submit();"
                                                                title="Pay with PayPal"> <img
                                                                    src="/modules/paypal/views/img/logos/default_PayPal_logo_100x45.gif"
                                                                    alt="Pay with your card or your PayPal account"></a>
                                                        <ul data-brand-icons-for-gateway="2474096">
                                                            <li class="payment-icon payment-icon--visa"
                                                                data-payment-icon="visa">
                                                                <span class="visually-hidden">Visa</span>
                                                            </li>
                                                            <li class="payment-icon payment-icon--master"
                                                                data-payment-icon="master">
                                                                <span class="visually-hidden">Mastercard</span>
                                                            </li>
                                                            <li class="payment-icon payment-icon--discover"
                                                                data-payment-icon="discover">
                                                                <span class="visually-hidden">Discover</span>
                                                            </li>
                                                        </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart_navigation clearfix">
                                <a href="index.html" class="btn-default" title="Continue shopping">
                                    <svg class="icon-svg icon-svg--color-accent icon-svg--size-10 previous-link__icon rtl-flip"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                                        <path d="M8 1L7 0 3 4 2 5l1 1 4 4 1-1-4-4"></path>
                                    </svg> Continue shopping </a>
                                <button type="submit" class="stripe-submit-button">Pay Now</button>
                            </div>
                            <div class="footer-container">
                                <footer id="footer" class="footer container">
                                    <div class="row">
                                        <div class="inner-footer">
                                            <div class="custombanners displayFooter clearfix" data-hook="displayFooter">
                                                <div class="cb-wrapper" data-wrapper="3">
                                                    <div class="banner-item footer-links col-sm-4 col-xs-12">
                                                        <div class="banner-item-content">
                                                            <div class="link">
                                                                <div class="custom-html">
                                                                    <ul>
                                                                        <li><a href="#" title="Contacts">Contacts</a>
                                                                        </li>
                                                                        <li><a href="#" title="Forums">Privacy
                                                                                Policy</a></li>
                                                                        <li><a href="#" title="Blog">Refund Policy</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="banner-item footer-about col-sm-4 col-xs-12">
                                                        <div class="banner-item-content">
                                                            <div class="link">
                                                                <div class="custom-html">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="banner-item footer-payment col-sm-4 col-xs-12">
                                                        <div class="banner-item-content">
                                                            <div class="link"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                        </div>
                        <div class="order-cart col-md-6 col-xs-12">
                            <div id="order-detail-content" class="table_block table-responsive">
                                <div class="table-product">
                                    <table id="cart_summary" class="table table-bordered stock-management-off">
                                        <thead>
                                            <tr>
                                                <th class="cart_product first_item">Product</th>
                                                <th class="cart_description item">Description</th>
                                                <th class="cart_unit item text-right">Unit price</th>
                                                <th class="cart_quantity item text-center">Qty</th>
                                                <th class="cart_delete last_item">&nbsp;</th>
                                                <th class="cart_total item text-right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="product_96_10654_0_0"
                                                class="cart_item last_item first_item address_0 odd">
                                                <td class="cart_description">
                                                    <p class="product-name"><a href="">Home
                                                            Category Card</a></p> <small class="cart_ref">SKU :
                                                        Home Category </small> <small><a href="">
                                                            Single Site License : Single license, Install theme service
                                                            : Install excluded, Extend support to 12 months : Update
                                                            excluded</a></small>
                                                </td>
                                                <td class="cart_unit" data-title="Unit price">
                                                    <ul class="price text-right" id="product_price_96_10654_0">
                                                        <li class="price">7.99$</li>
                                                    </ul>
                                                </td>
                                                <td class="cart_total" data-title="Total"> <span class="price"
                                                        id="total_product_price_96_10654_0"> 7.99$</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-summary">
                                    <table class="order-summary table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td id="cart_voucher" class="cart_voucher">
                                                    <!-- Action on apply the payment -->
                                                    <form action="" method="post" id="voucher">
                                                        <fieldset>
                                                            <input type="text" class="discount_name form-control"
                                                                id="discount_name" name="discount_name" value="">
                                                            <input type="hidden" name="submitDiscount">
                                                            <button type="submit" name="submitAddDiscount"
                                                                class="button btn button-small"> <span>Apply</span>
                                                            </button>
                                                        </fieldset>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr class="cart_total_price">
                                                <td>Total products</td>
                                                <td class="price" id="total_product">7.99$</td>
                                            </tr>
                                            <tr>
                                                <td> Total gift-wrapping cost</td>
                                                <td class="price-discount price" id="total_wrapping"> 0,00 €</td>
                                            </tr>
                                            <tr class="cart_total_delivery">
                                                <td>Total shipping</td>
                                                <td class="price" id="total_shipping">Free Shipping!</td>
                                            </tr>
                                            <tr class="cart_total_voucher unvisible">
                                                <td> Total vouchers (tax excl.)</td>
                                                <td class="price-discount price" id="total_discount"> 0,00 €</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="summary-total"> <span class="total_price_container"> <span>Total:</span>
                                        <span id="hookDisplayProductPriceBlock-price"> </span> </span> <span
                                        class="price" id="total_price_container"> <span id="total_price">7.99$</span>
                                    </span>
                                </div>
                            </div>
                            <p id="emptyCartWarning" class="alert alert-warning unvisible">Your shopping cart is empty.
                            </p>
                            <div class="cart_last_product">
                                <div class="cart_last_product_header">
                                    <div class="left">Last product added</div>
                                </div>
                                <a class="cart_last_product_img" href="">
                                    <img src="" alt="Home Category Card Theme"> </a>
                                <div class="cart_last_product_content">
                                    <p class="product-name"> <a href="">
                                            Home Category Card </a></p> <small> <a href="">
                                            Single Site License : Single license, Install theme service : Install
                                            excluded, Extend support to 12 months : Update excluded </a> </small>
                                </div>
                            </div>
                            <div id="HOOK_SHOPPING_CART"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>