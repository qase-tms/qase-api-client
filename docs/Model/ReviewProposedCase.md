# # ReviewProposedCase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  | [optional]
**description** | **string** |  | [optional]
**preconditions** | **string** |  | [optional]
**postconditions** | **string** |  | [optional]
**severity** | **int** |  | [optional]
**priority** | **int** |  | [optional]
**behavior** | **int** |  | [optional]
**type** | **int** |  | [optional]
**layer** | **int** |  | [optional]
**isFlaky** | **int** |  | [optional]
**isMuted** | **bool** |  | [optional]
**suiteId** | **int** |  | [optional]
**milestoneId** | **int** |  | [optional]
**isManual** | **bool** | &#x60;true&#x60; if the case is manual, &#x60;false&#x60; if it is automated. | [optional]
**isToBeAutomated** | **bool** | &#x60;true&#x60; if a manual case is planned to be automated. | [optional]
**status** | **int** |  | [optional]
**stepsType** | **string** |  | [optional]
**attachments** | **string[]** | Attachment hashes. | [optional]
**steps** | [**\Qase\APIClientV1\Model\ReviewProposedStep[]**](ReviewProposedStep.md) |  | [optional]
**tags** | **string[]** |  | [optional]
**parameters** | [**\Qase\APIClientV1\Model\TestCaseParameter[]**](TestCaseParameter.md) |  | [optional]
**customFields** | [**\Qase\APIClientV1\Model\CustomFieldValue[]**](CustomFieldValue.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
