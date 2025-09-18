# Qase\APIClientV1\SharedParametersApi

All URIs are relative to https://api.qase.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSharedParameter()**](SharedParametersApi.md#createSharedParameter) | **POST** /shared_parameter | Create a new shared parameter |
| [**deleteSharedParameter()**](SharedParametersApi.md#deleteSharedParameter) | **DELETE** /shared_parameter/{id} | Delete shared parameter |
| [**getSharedParameter()**](SharedParametersApi.md#getSharedParameter) | **GET** /shared_parameter/{id} | Get a specific shared parameter |
| [**getSharedParameters()**](SharedParametersApi.md#getSharedParameters) | **GET** /shared_parameter | Get all shared parameters |
| [**updateSharedParameter()**](SharedParametersApi.md#updateSharedParameter) | **PATCH** /shared_parameter/{id} | Update shared parameter |


## `createSharedParameter()`

```php
createSharedParameter($sharedParameterCreate): \Qase\APIClientV1\Model\UuidResponse
```

Create a new shared parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\SharedParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharedParameterCreate = new \Qase\APIClientV1\Model\SharedParameterCreate(); // \Qase\APIClientV1\Model\SharedParameterCreate

try {
    $result = $apiInstance->createSharedParameter($sharedParameterCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedParametersApi->createSharedParameter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sharedParameterCreate** | [**\Qase\APIClientV1\Model\SharedParameterCreate**](../Model/SharedParameterCreate.md)|  | |

### Return type

[**\Qase\APIClientV1\Model\UuidResponse**](../Model/UuidResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSharedParameter()`

```php
deleteSharedParameter($id): \Qase\APIClientV1\Model\UuidResponse1
```

Delete shared parameter

Delete shared parameter along with all its usages in test cases and reviews.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\SharedParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier.

try {
    $result = $apiInstance->deleteSharedParameter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedParametersApi->deleteSharedParameter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier. | |

### Return type

[**\Qase\APIClientV1\Model\UuidResponse1**](../Model/UuidResponse1.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSharedParameter()`

```php
getSharedParameter($id): \Qase\APIClientV1\Model\SharedParameterResponse
```

Get a specific shared parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\SharedParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier.

try {
    $result = $apiInstance->getSharedParameter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedParametersApi->getSharedParameter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier. | |

### Return type

[**\Qase\APIClientV1\Model\SharedParameterResponse**](../Model/SharedParameterResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSharedParameters()`

```php
getSharedParameters($limit, $offset, $filtersSearch, $filtersType, $filtersProjectCodes): \Qase\APIClientV1\Model\SharedParameterListResponse
```

Get all shared parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\SharedParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | A number of entities in result set.
$offset = 0; // int | How many entities should be skipped.
$filtersSearch = 'filtersSearch_example'; // string
$filtersType = 'filtersType_example'; // string
$filtersProjectCodes = array('filtersProjectCodes_example'); // string[]

try {
    $result = $apiInstance->getSharedParameters($limit, $offset, $filtersSearch, $filtersType, $filtersProjectCodes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedParametersApi->getSharedParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| A number of entities in result set. | [optional] [default to 10] |
| **offset** | **int**| How many entities should be skipped. | [optional] [default to 0] |
| **filtersSearch** | **string**|  | [optional] |
| **filtersType** | **string**|  | [optional] |
| **filtersProjectCodes** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Qase\APIClientV1\Model\SharedParameterListResponse**](../Model/SharedParameterListResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSharedParameter()`

```php
updateSharedParameter($id, $sharedParameterUpdate): \Qase\APIClientV1\Model\UuidResponse1
```

Update shared parameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\SharedParametersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier.
$sharedParameterUpdate = new \Qase\APIClientV1\Model\SharedParameterUpdate(); // \Qase\APIClientV1\Model\SharedParameterUpdate

try {
    $result = $apiInstance->updateSharedParameter($id, $sharedParameterUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedParametersApi->updateSharedParameter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier. | |
| **sharedParameterUpdate** | [**\Qase\APIClientV1\Model\SharedParameterUpdate**](../Model/SharedParameterUpdate.md)|  | |

### Return type

[**\Qase\APIClientV1\Model\UuidResponse1**](../Model/UuidResponse1.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
