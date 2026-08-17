# # ReviewDetailed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Review ID, unique within the project. | [optional]
**title** | **string** |  | [optional]
**type** | **string** | &#x60;create&#x60; — the review proposes a new test case; &#x60;edit&#x60; — the review proposes changes to an existing test case. | [optional]
**status** | **string** |  | [optional]
**caseId** | **int** | ID of the reviewed test case. Null for new-case draft reviews. | [optional]
**authorUuid** | **string** | Author UUID of the review creator (see &#x60;GET /author&#x60;). | [optional]
**reviewers** | [**\Qase\APIClientV1\Model\ReviewReviewersInner[]**](ReviewReviewersInner.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]
**proposedCase** | **object** | The proposed test case state. Merging the review applies it to the test case. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
