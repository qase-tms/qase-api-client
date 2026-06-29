# # TestStepResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **int** | 1 - passed, 2 - failed, 3 - blocked, 5 - skipped, 7 - in_progress | [optional]
**position** | **int** |  | [optional]
**comment** | **string** | Comment left for the step. | [optional]
**startTime** | **int** | Unix timestamp of the step start time. | [optional]
**endTime** | **int** | Unix timestamp of the step end time. | [optional]
**durationMs** | **int** | Step duration in milliseconds. | [optional]
**attachments** | [**\Qase\APIClientV1\Model\Attachment[]**](Attachment.md) |  | [optional]
**steps** | [**\Qase\APIClientV1\Model\TestStepResult[]**](TestStepResult.md) | Nested steps results will be here. The same structure is used for them. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
