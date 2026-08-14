# Qase\APIClientV1\ReviewsApi



All URIs are relative to https://api.qase.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkCreateReviews()**](ReviewsApi.md#bulkCreateReviews) | **POST** /review/{code}/bulk | Create reviews in bulk |
| [**createReview()**](ReviewsApi.md#createReview) | **POST** /review/{code} | Create a new review |
| [**deleteReview()**](ReviewsApi.md#deleteReview) | **DELETE** /review/{code}/{id} | Delete review |
| [**getReview()**](ReviewsApi.md#getReview) | **GET** /review/{code}/{id} | Get a specific review |
| [**getReviews()**](ReviewsApi.md#getReviews) | **GET** /review/{code} | Get all reviews |
| [**updateReview()**](ReviewsApi.md#updateReview) | **PATCH** /review/{code}/{id} | Update review |


## `bulkCreateReviews()`

```php
bulkCreateReviews($code, $reviewBulk): \Qase\APIClientV1\Model\ReviewBulkResponse
```

Create reviews in bulk

This method allows to submit multiple test cases for review in one request.  Returns an error if test case review is disabled in the project settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$reviewBulk = new \Qase\APIClientV1\Model\ReviewBulk(); // \Qase\APIClientV1\Model\ReviewBulk

try {
    $result = $apiInstance->bulkCreateReviews($code, $reviewBulk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->bulkCreateReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **reviewBulk** | [**\Qase\APIClientV1\Model\ReviewBulk**](../Model/ReviewBulk.md)|  | |

### Return type

[**\Qase\APIClientV1\Model\ReviewBulkResponse**](../Model/ReviewBulkResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createReview()`

```php
createReview($code, $reviewCreate): \Qase\APIClientV1\Model\IdResponse
```

Create a new review

This method allows to submit a test case for review in selected project.  Returns an error if test case review is disabled in the project settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$reviewCreate = new \Qase\APIClientV1\Model\ReviewCreate(); // \Qase\APIClientV1\Model\ReviewCreate

try {
    $result = $apiInstance->createReview($code, $reviewCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->createReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **reviewCreate** | [**\Qase\APIClientV1\Model\ReviewCreate**](../Model/ReviewCreate.md)|  | |

### Return type

[**\Qase\APIClientV1\Model\IdResponse**](../Model/IdResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReview()`

```php
deleteReview($code, $id): \Qase\APIClientV1\Model\IdResponse
```

Delete review

This method allows to delete a review. Merged reviews cannot be deleted.  Returns an error if test case review is disabled in the project settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->deleteReview($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->deleteReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **id** | **int**| Identifier. | |

### Return type

[**\Qase\APIClientV1\Model\IdResponse**](../Model/IdResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReview()`

```php
getReview($code, $id): \Qase\APIClientV1\Model\ReviewResponse
```

Get a specific review

This method allows to retrieve a specific review, including its current approval status per reviewer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.

try {
    $result = $apiInstance->getReview($code, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->getReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **id** | **int**| Identifier. | |

### Return type

[**\Qase\APIClientV1\Model\ReviewResponse**](../Model/ReviewResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReviews()`

```php
getReviews($code, $status, $type, $caseId, $authorUuid, $reviewerUuid, $search, $limit, $offset): \Qase\APIClientV1\Model\ReviewListResponse
```

Get all reviews

This method allows to retrieve all test case reviews stored in selected project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$status = 'status_example'; // string
$type = 'type_example'; // string
$caseId = 56; // int | Filter reviews by the reviewed test case ID.
$authorUuid = 'authorUuid_example'; // string | Filter reviews by the author who created them (author UUID).
$reviewerUuid = 'reviewerUuid_example'; // string | Filter reviews by an assigned reviewer (author UUID).
$search = 'search_example'; // string | Provide a string that will be used to search by review title.
$limit = 10; // int | A number of entities in result set.
$offset = 0; // int | How many entities should be skipped.

try {
    $result = $apiInstance->getReviews($code, $status, $type, $caseId, $authorUuid, $reviewerUuid, $search, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->getReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **status** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **caseId** | **int**| Filter reviews by the reviewed test case ID. | [optional] |
| **authorUuid** | **string**| Filter reviews by the author who created them (author UUID). | [optional] |
| **reviewerUuid** | **string**| Filter reviews by an assigned reviewer (author UUID). | [optional] |
| **search** | **string**| Provide a string that will be used to search by review title. | [optional] |
| **limit** | **int**| A number of entities in result set. | [optional] [default to 10] |
| **offset** | **int**| How many entities should be skipped. | [optional] [default to 0] |

### Return type

[**\Qase\APIClientV1\Model\ReviewListResponse**](../Model/ReviewListResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReview()`

```php
updateReview($code, $id, $reviewUpdate): \Qase\APIClientV1\Model\IdResponse
```

Update review

This method allows to update the assigned reviewers and/or the proposed test case payload of an open review. The reviewed test case cannot be changed.  Returns an error if test case review is disabled in the project settings, or if the review is not open.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: TokenAuth
$config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKey('Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Qase\APIClientV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Token', 'Bearer');


$apiInstance = new Qase\APIClientV1\Api\ReviewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code of project, where to search entities.
$id = 56; // int | Identifier.
$reviewUpdate = new \Qase\APIClientV1\Model\ReviewUpdate(); // \Qase\APIClientV1\Model\ReviewUpdate

try {
    $result = $apiInstance->updateReview($code, $id, $reviewUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReviewsApi->updateReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of project, where to search entities. | |
| **id** | **int**| Identifier. | |
| **reviewUpdate** | [**\Qase\APIClientV1\Model\ReviewUpdate**](../Model/ReviewUpdate.md)|  | |

### Return type

[**\Qase\APIClientV1\Model\IdResponse**](../Model/IdResponse.md)

### Authorization

[TokenAuth](../../README.md#TokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
