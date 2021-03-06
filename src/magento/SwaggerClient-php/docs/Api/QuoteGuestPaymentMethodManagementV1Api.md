# Swagger\Client\QuoteGuestPaymentMethodManagementV1Api

All URIs are relative to *http://t2010.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestPaymentMethodManagementV1GetGet**](QuoteGuestPaymentMethodManagementV1Api.md#quoteGuestPaymentMethodManagementV1GetGet) | **GET** /V1/guest-carts/{cartId}/selected-payment-method | 
[**quoteGuestPaymentMethodManagementV1GetListGet**](QuoteGuestPaymentMethodManagementV1Api.md#quoteGuestPaymentMethodManagementV1GetListGet) | **GET** /V1/guest-carts/{cartId}/payment-methods | 
[**quoteGuestPaymentMethodManagementV1SetPut**](QuoteGuestPaymentMethodManagementV1Api.md#quoteGuestPaymentMethodManagementV1SetPut) | **PUT** /V1/guest-carts/{cartId}/selected-payment-method | 


# **quoteGuestPaymentMethodManagementV1GetGet**
> \Swagger\Client\Model\QuoteDataPaymentInterface quoteGuestPaymentMethodManagementV1GetGet($cart_id)



Return the payment method for a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteGuestPaymentMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | The cart ID.

try {
    $result = $apiInstance->quoteGuestPaymentMethodManagementV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementV1Api->quoteGuestPaymentMethodManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |

### Return type

[**\Swagger\Client\Model\QuoteDataPaymentInterface**](../Model/QuoteDataPaymentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestPaymentMethodManagementV1GetListGet**
> \Swagger\Client\Model\QuoteDataPaymentMethodInterface[] quoteGuestPaymentMethodManagementV1GetListGet($cart_id)



List available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#GuestPaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteGuestPaymentMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | The cart ID.

try {
    $result = $apiInstance->quoteGuestPaymentMethodManagementV1GetListGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementV1Api->quoteGuestPaymentMethodManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |

### Return type

[**\Swagger\Client\Model\QuoteDataPaymentMethodInterface[]**](../Model/QuoteDataPaymentMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestPaymentMethodManagementV1SetPut**
> int quoteGuestPaymentMethodManagementV1SetPut($cart_id, $body)



Add a specified payment method to a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\QuoteGuestPaymentMethodManagementV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cart_id = "cart_id_example"; // string | The cart ID.
$body = new \Swagger\Client\Model\Body59(); // \Swagger\Client\Model\Body59 | 

try {
    $result = $apiInstance->quoteGuestPaymentMethodManagementV1SetPut($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementV1Api->quoteGuestPaymentMethodManagementV1SetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |
 **body** | [**\Swagger\Client\Model\Body59**](../Model/Body59.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

