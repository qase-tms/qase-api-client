# # ReviewStepData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Step action text. Classic steps only. | [optional]
**shared** | **string** | Hash of an existing shared step to insert at this position. | [optional]
**expectedResult** | **string** |  | [optional]
**data** | **string** |  | [optional]
**value** | **string** | Gherkin scenario text. Used when steps_type is \&quot;gherkin\&quot;. Example: \&quot;Given a user exists\\nWhen they log in\\nThen they see the dashboard\&quot; | [optional]
**attachments** | **string[]** | A list of Attachment hashes. | [optional]
**steps** | **object[]** | Nested steps may be passed here. Use same structure for them. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
