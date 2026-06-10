# # TestCase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**position** | **int** |  | [optional]
**title** | **string** |  | [optional]
**description** | **string** |  | [optional]
**preconditions** | **string** |  | [optional]
**postconditions** | **string** |  | [optional]
**severity** | **int** |  | [optional]
**priority** | **int** |  | [optional]
**type** | **int** |  | [optional]
**layer** | **int** |  | [optional]
**isFlaky** | **int** |  | [optional]
**behavior** | **int** |  | [optional]
**automation** | **int** | Deprecated, use &#x60;isManual&#x60; and &#x60;isToBeAutomated&#x60; instead. Encodes the test case automation state as a single integer: &#x60;0&#x60; &#x3D; manual, &#x60;1&#x60; &#x3D; manual planned to be automated, &#x60;2&#x60; &#x3D; automated. | [optional]
**isManual** | **int** | &#x60;1&#x60; if the case is manual, &#x60;0&#x60; if it is automated. Combined with &#x60;isToBeAutomated&#x60;, replaces the deprecated &#x60;automation&#x60; field. | [optional]
**isToBeAutomated** | **int** | &#x60;1&#x60; if a manual case is planned to be automated, &#x60;0&#x60; otherwise. Only meaningful when &#x60;isManual &#x3D; 1&#x60;; ignored when &#x60;isManual &#x3D; 0&#x60;. | [optional]
**status** | **int** |  | [optional]
**milestoneId** | **int** |  | [optional]
**suiteId** | **int** |  | [optional]
**customFields** | [**\Qase\APIClientV1\Model\CustomFieldValue[]**](CustomFieldValue.md) |  | [optional]
**attachments** | [**\Qase\APIClientV1\Model\Attachment[]**](Attachment.md) |  | [optional]
**stepsType** | **string** |  | [optional]
**steps** | [**\Qase\APIClientV1\Model\TestStep[]**](TestStep.md) |  | [optional]
**params** | [**\Qase\APIClientV1\Model\TestCaseParams**](TestCaseParams.md) |  | [optional]
**parameters** | [**\Qase\APIClientV1\Model\TestCaseParameter[]**](TestCaseParameter.md) |  | [optional]
**tags** | [**\Qase\APIClientV1\Model\TagValue[]**](TagValue.md) |  | [optional]
**memberId** | **int** | Deprecated, use &#x60;author_id&#x60; instead. | [optional]
**authorId** | **int** |  | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]
**deleted** | **string** |  | [optional]
**created** | **string** | Deprecated, use the &#x60;created_at&#x60; property instead. | [optional]
**updated** | **string** | Deprecated, use the &#x60;updated_at&#x60; property instead. | [optional]
**externalIssues** | [**\Qase\APIClientV1\Model\ExternalIssue[]**](ExternalIssue.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
