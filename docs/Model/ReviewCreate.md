# # ReviewCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**proposedCase** | [**\Qase\APIClientV1\Model\ReviewCaseData**](ReviewCaseData.md) | For &#x60;create&#x60; reviews &#x60;title&#x60; and all required project fields are required. For &#x60;edit&#x60; reviews send only the fields the proposal changes. |
**caseId** | **int** | ID of the reviewed test case. When present an &#x60;edit&#x60; review is created, otherwise a &#x60;create&#x60; review with a new-case draft. | [optional]
**reviewers** | **string[]** | Author UUIDs of team members to assign as reviewers (see &#x60;GET /author&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
