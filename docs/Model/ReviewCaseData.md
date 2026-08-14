# # ReviewCaseData

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
**isMuted** | **bool** | Mute state of the proposed test case. | [optional]
**suiteId** | **int** |  | [optional]
**milestoneId** | **int** |  | [optional]
**isManual** | **bool** | &#x60;true&#x60; if the case is manual, &#x60;false&#x60; if it is automated. | [optional]
**isToBeAutomated** | **bool** | &#x60;true&#x60; if a manual case is planned to be automated. | [optional]
**status** | **int** |  | [optional]
**stepsType** | **string** | Format of the steps field. Omit to keep the current one, &#x60;classic&#x60; for a new-case draft; changing it requires sending &#x60;steps&#x60; in the same request. | [optional]
**attachments** | **string[]** | A list of Attachment hashes. | [optional]
**steps** | [**\Qase\APIClientV1\Model\ReviewStepData[]**](ReviewStepData.md) | For gherkin steps send the scenario in &#x60;value&#x60;. | [optional]
**tags** | **string[]** |  | [optional]
**parameters** | [**\Qase\APIClientV1\Model\TestCaseParameterCreate[]**](TestCaseParameterCreate.md) |  | [optional]
**customField** | **array<string,string>** | Map of custom field ID to value. A &#x60;create&#x60; review must carry every required custom field. An &#x60;edit&#x60; review is validated against the current test case, so send only the fields the proposal changes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
