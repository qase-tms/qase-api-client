# # ReviewProposedStep

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Step action text. Used for classic steps. For gherkin steps, use the \&quot;value\&quot; property instead. | [optional]
**expectedResult** | **string** |  | [optional]
**data** | **string** |  | [optional]
**value** | **string** | Gherkin scenario text. Used when steps_type is \&quot;gherkin\&quot;. | [optional]
**shared** | **string** | Hash of the referenced shared step. | [optional]
**attachments** | **string[]** | A list of Attachment hashes. | [optional]
**steps** | **object[]** | Nested steps use the same structure. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
