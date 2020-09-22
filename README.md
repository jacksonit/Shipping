# Laravel Shipping VN
API Shipping (Giao hàng nhanh, ...)

-----
**Install with composer**.

Install (Laravel)
-----------------
Install via composer
```
composer require jacksonit/shipping
php artisan vendor:publish --provider="Jacksonit\Shipping\ShippingServiceProvider"
```

Get shipping Fee GHN

```
Use Jacksonit\Shipping\GHN;

$data = [
    'from_district_id'  => '',
    'from_ward_code'    => '',
    'to_district_id'    => '',
    'to_ward_code'      => '',
    'weight'            => '',
    'height'            => '',
    'length'            => '',
    'width'             => '',
    'coupon'            => ''
]
$ghn = new GHN();
$record_ghn = $ghn->shippingFee($data);
```