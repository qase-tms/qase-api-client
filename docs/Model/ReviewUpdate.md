# # ReviewUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reviewers** | **string[]** | Author UUIDs of team members assigned as reviewers (see &#x60;GET /author&#x60;). When provided, replaces the current reviewer list; an empty array removes all reviewers. Omit to leave reviewers unchanged. | [optional]
**proposedCase** | [**\Qase\APIClientV1\Model\ReviewCaseData**](ReviewCaseData.md) | Sent fields are merged into the stored proposal. Changing the proposal resets all existing approvals; updating only the reviewers keeps them. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
