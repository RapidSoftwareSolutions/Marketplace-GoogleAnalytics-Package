[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/GoogleAnalytics/functions?utm_source=RapidAPIGitHub_GoogleAnalyticsFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# GoogleAnalytics Package
Programmatically create, access and manage Google Analytics entities such as accounts, properties, views, etc. Manage user permissions and import data.
* Domain: [GoogleAnalytics](https://analytics.google.com/)
* Credentials: apiKey, apiSecret

## How to get credentials: 
0. Go to [Google Developers Console](https://console.developers.google.com/?authuser=1);
1. Select a project, or create a new one.
2. Press **Continue** to activate API key.
3. In the sidebar on the left, select **Credentials**.
4. If your project has no API key for the server, create it now - **Add credentials > API key > Server key**;


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## GoogleAnalytics.getAccessToken
Exchange code for access token.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| The client ID that you obtain from the API Console, as described in Obtain OAuth 2.0 credentials.
| clientSecret| credentials| The client secret that you obtain from the API Console, as described in Obtain OAuth 2.0 credentials.
| code        | String     | The authorization code that is returned from the initial request.
| redirectUri | String     | The URI that you specify in the API Console, as described in Set a redirect URI.


## GoogleAnalytics.listAccountSummaries
Returns real time data for a view (profile)

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| maxResults | Number| The maximum number of entries to include in this feed.
| startIndex | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields     | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.deleteUserFromAccount
Removes a user from the given account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Account id
| linkId     | String| Link ID to delete the user link for.

## GoogleAnalytics.addUserToAccountById
Adds a user to the given account.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account ID
| fields          | List  | Selector specifying which fields to include in a partial response.
| entity          | JSON  | Entity for this link. It can be an account, a web property, or a view (profile).
| localPermissions| List  | Permissions that a user has been assigned at this very level.
| userId          | String| Id of the user

## GoogleAnalytics.addUserToAccountByEmail
Adds a user to the given account.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account ID
| fields          | List  | Selector specifying which fields to include in a partial response.
| entity          | JSON  | Entity for this link. It can be an account, a web property, or a view (profile).
| localPermissions| List  | Permissions that a user has been assigned at this very level.
| userEmail       | String| Email of the user

## GoogleAnalytics.listAccountUsers
Lists account-user links for a given account.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Account id
| maxResults | Number| The maximum number of entries to include in this feed.
| startIndex | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.

## GoogleAnalytics.updateUserAccount
Updates permissions for an existing user on the given account.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account ID
| linkId          | String| Link ID to delete the user link for.
| fields          | List  | Selector specifying which fields to include in a partial response.
| entity          | JSON  | Entity for this link. It can be an account, a web property, or a view (profile).
| localPermissions| List  | Permissions that a user has been assigned at this very level.
| userRef         | JSON  | JSON of the user

## GoogleAnalytics.listAccounts
Lists all accounts to which the user has access.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| maxResults | Number| The maximum number of entries to include in this feed.
| startIndex | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields     | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.deleteAdwordsPropertyLink
Deletes a web property-AdWords link.

| Field                   | Type  | Description
|-------------------------|-------|----------
| accessToken             | String| OAuth 2.0 token for the current user.
| accountId               | String| Account id
| webPropertyId           | String| Web property ID
| webPropertyAdWordsLinkId| String| Web property AdWords link ID.

## GoogleAnalytics.getAdwordsPropertyLink
Retrieves a web property-AdWords link.

| Field                   | Type  | Description
|-------------------------|-------|----------
| accessToken             | String| OAuth 2.0 token for the current user.
| accountId               | String| Account id
| webPropertyId           | String| Web property ID
| webPropertyAdWordsLinkId| String| Web property AdWords link ID.
| fields                  | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addAdwordsPropertyLink
Adds a web property-AdWords link.

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| OAuth 2.0 token for the current user.
| accountId      | String| Account id
| webPropertyId  | String| Web property ID
| adWordsAccounts| List  | A list of AdWords client accounts. 
| name           | String| Name of the link.
| fields         | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listAdwordsPropertyLinks
Lists webProperty-AdWords links for a given web property. 

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.updateAdwordsPropertyLink
Updates a web property-AdWords link.

| Field                   | Type  | Description
|-------------------------|-------|----------
| accessToken             | String| OAuth 2.0 token for the current user.
| accountId               | String| Account id
| webPropertyId           | String| Web property ID
| webPropertyAdWordsLinkId| String| Web property AdWords link ID.
| adWordsAccounts         | List  | A list of AdWords client accounts. 
| name                    | String| Name of the link.
| fields                  | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listCustomDataSources
List custom data sources to which the user has access

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.getCustomDimension
Get a custom dimension to which the user has access.

| Field            | Type  | Description
|------------------|-------|----------
| accessToken      | String| OAuth 2.0 token for the current user.
| accountId        | String| Account id
| webPropertyId    | String| Web property ID
| customDimensionId| String| The ID of the custom dimension to retrieve.
| fields           | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addCustomDimension
Create a new custom dimension.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| name         | String| The ID of the custom dimension to retrieve.
| scope        | Select| Scope of the custom dimension
| active       | Select| If it is active or not
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listCustomDimensions
Lists custom dimensions to which the user has access.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.updateCustomDimension
Update existing custom dimension.

| Field                      | Type  | Description
|----------------------------|-------|----------
| accessToken                | String| OAuth 2.0 token for the current user.
| accountId                  | String| Account id
| webPropertyId              | String| Web property ID
| customDimensionId          | String| The ID of the custom dimension to retrieve.
| name                       | String| The ID of the custom dimension to retrieve.
| scope                      | Select| Scope of the custom dimension
| active                     | Select| If it is active or not
| ignoreCustomDataSourceLinks| Select| Force the update and ignore any warnings related to the custom dimension being linked to a custom data source / data set. (Default: false)
| fields                     | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.getCustomMetric
Get a custom metric to which the user has access.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| OAuth 2.0 token for the current user.
| accountId     | String| Account id
| webPropertyId | String| Web property ID
| customMetricId| String| The ID of the custom metric to retrieve.
| fields        | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addCustomMetric
Create a new custom metric.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| name         | String| The ID of the custom metric.
| scope        | Select| Scope of the custom metric
| active       | Select| If metric is active
| type         | String| The data type of the custom metric.
| maxValue     | Number| The max value of the custom metric.
| minValue     | Number| The min value of the custom metric.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listCustomMetrics
Lists custom metics to which the user has access.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.updateCustomMetric
Update existing custom metric.

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| OAuth 2.0 token for the current user.
| accountId     | String| Account id
| webPropertyId | String| Web property ID
| customMetricId| String| The ID of the custom metric to retrieve.
| name          | String| The ID of the custom metric.
| scope         | Select| Scope of the custom metric
| active        | Select| If metric is active
| type          | String| The data type of the custom metric.
| maxValue      | Number| The max value of the custom metric.
| minValue      | Number| The min value of the custom metric.
| fields        | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.deleteExperiment
Delete an experiment.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID  
| experimentId | String| Id of the experiment

## GoogleAnalytics.getExperiment
Get an experiment.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID 
| experimentId | String| Id of the experiment
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addExperiment
Add an experiment.

| Field                         | Type  | Description
|-------------------------------|-------|----------
| accessToken                   | String| OAuth 2.0 token for the current user.
| accountId                     | String| Account id
| webPropertyId                 | String| Web property ID
| profileId                     | String| View (Profile) ID 
| name                          | String| Name of the experiment
| status                        | Select| Status of the experiment
| variations                    | List  | The name of the variation.
| description                   | String| Description of the experiment
| editableInGaUi                | Select| If true, the end user will be able to edit the experiment via the Google Analytics user interface.
| equalWeighting                | Select| Boolean specifying whether to distribute traffic evenly across all variations. 
| minimumExperimentLengthInDays | Number| An integer number in [3, 90]. Specifies the minimum length of the experiment.
| objectiveMetric               | Select| The metric that the experiment is optimizing. 
| optimizationType              | Select| Whether the objectiveMetric should be minimized or maximized. 
| rewriteVariationUrlsAsOriginal| Select| Boolean specifying whether variations URLS are rewritten to match those of the original. 
| servingFramework              | Select| The framework used to serve the experiment variations and evaluate the results.
| trafficCoverage               | String| A floating-point number between 0 and 1. Specifies the fraction of the traffic that participates in the experiment.
| winnerConfidenceLevel         | String| A floating-point number between 0 and 1. Specifies the necessary confidence level to choose a winner. 
| fields                        | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listExperiments
Lists experiments to which the user has access.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID 
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.updateExperiment
Update an experiment.

| Field                         | Type  | Description
|-------------------------------|-------|----------
| accessToken                   | String| OAuth 2.0 token for the current user.
| accountId                     | String| Account id
| webPropertyId                 | String| Web property ID
| profileId                     | String| View (Profile) ID 
| experimentId                  | String| ID of the experiment
| name                          | String| Name of the experiment
| status                        | Select| Status of the experiment
| variations                    | List  | The name of the variation.
| description                   | String| Description of the experiment
| editableInGaUi                | Select| If true, the end user will be able to edit the experiment via the Google Analytics user interface.
| equalWeighting                | Select| Boolean specifying whether to distribute traffic evenly across all variations. 
| minimumExperimentLengthInDays | Number| An integer number in [3, 90]. Specifies the minimum length of the experiment.
| objectiveMetric               | Select| The metric that the experiment is optimizing. 
| optimizationType              | Select| Whether the objectiveMetric should be minimized or maximized. 
| rewriteVariationUrlsAsOriginal| Select| Boolean specifying whether variations URLS are rewritten to match those of the original. 
| servingFramework              | Select| The framework used to serve the experiment variations and evaluate the results.
| trafficCoverage               | String| A floating-point number between 0 and 1. Specifies the fraction of the traffic that participates in the experiment.
| winnerConfidenceLevel         | String| A floating-point number between 0 and 1. Specifies the necessary confidence level to choose a winner. 
| fields                        | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.deleteFilter
Delete a filter. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Account id
| filterId   | String| ID of the filter

## GoogleAnalytics.getFilter
Get a filter. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Account id
| filterId   | String| ID of the filter
| fields     | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addAdvancedFilter
Add advanced filter. 

| Field          | Type  | Description
|----------------|-------|----------
| accessToken    | String| OAuth 2.0 token for the current user.
| accountId      | String| Account id
| name           | String| Name of the filter
| advancedDetails| JSON  | advancedDetails object of the filter
| fields         | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addExcludeFilter
Add exclude filter. 

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| OAuth 2.0 token for the current user.
| accountId     | String| Account id
| name          | String| Name of the filter
| excludeDetails| JSON  | excludeDetails object of the filter
| fields        | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addLowercaseFilter
Add lowercase filter. 

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account id
| name            | String| Name of the filter
| lowercaseDetails| JSON  | lowercaseDetails object of the filter
| fields          | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addUppercase
Add uppercase filter. 

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account id
| name            | String| Name of the filter
| uppercaseDetails| JSON  | uppercaseDetails object of the filter
| fields          | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addSearchAndReplaceFilter
Add search and replace filter. 

| Field                  | Type  | Description
|------------------------|-------|----------
| accessToken            | String| OAuth 2.0 token for the current user.
| accountId              | String| Account id
| name                   | String| Name of the filter
| searchAndReplaceDetails| JSON  | searchAndReplaceDetails object of the filter
| fields                 | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addIncludeFilter
Add include filter. 

| Field         | Type  | Description
|---------------|-------|----------
| accessToken   | String| OAuth 2.0 token for the current user.
| accountId     | String| Account id
| name          | String| Name of the filter
| includeDetails| JSON  | includeDetails object of the filter
| fields        | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.updateFilter
Update a filter. 

| Field                  | Type  | Description
|------------------------|-------|----------
| accessToken            | String| OAuth 2.0 token for the current user.
| accountId              | String| Account id
| filterId               | String| ID of the filter
| name                   | String| Name of the filter
| type                   | Select| Type of the filter
| advancedDetails        | JSON  | advancedDetails object of the filter
| excludeDetails         | JSON  | excludeDetails object of the filter
| includeDetails         | JSON  | includeDetails object of the filter
| lowercaseDetails       | JSON  | lowercaseDetails object of the filter
| uppercaseDetails       | JSON  | uppercaseDetails object of the filter
| searchAndReplaceDetails| JSON  | searchAndReplaceDetails object of the filter
| fields                 | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.replaceFilter
Replace a filter with filter of other type. 

| Field                  | Type  | Description
|------------------------|-------|----------
| accessToken            | String| OAuth 2.0 token for the current user.
| accountId              | String| Account id
| filterId               | String| ID of the filter
| name                   | String| Name of the filter
| type                   | Select| Type of the filter
| advancedDetails        | JSON  | advancedDetails object of the filter
| excludeDetails         | JSON  | excludeDetails object of the filter
| includeDetails         | JSON  | includeDetails object of the filter
| lowercaseDetails       | JSON  | lowercaseDetails object of the filter
| uppercaseDetails       | JSON  | uppercaseDetails object of the filter
| searchAndReplaceDetails| JSON  | searchAndReplaceDetails object of the filter
| fields                 | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listFilters
Lists filters to which the user has access.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Account id
| maxResults | Number| The maximum number of entries to include in this feed.
| startIndex | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields     | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.getGoal
Get a goal.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID to which the goal belongs
| goalId       | String| Id of the goal
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listGoals
Lists goals to which the user has access.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID to which the goal belongs
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.deleteProfileFilterLink
Delete a profile filter link

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID to which the goal belongs
| linkId       | String| ID of the profile filter link

## GoogleAnalytics.getProfileFilterLink
Get a profile filter link

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID to which the goal belongs
| linkId       | String| ID of the profile filter link
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addProfileFilterLink
Add a profile filter link

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID to which the goal belongs
| filterRefId  | String| ID of the profile filter link
| rank         | Number| The rank of this profile filter link relative to the other filters linked to the same profile.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listProfileLinks
Lists all profile filter links for a profile. 

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID to which the goal belongs
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.updateProfileFilterLink
Update a profile filter link

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID to which the goal belongs
| linkId       | String| ID of the profile filter link
| filterRefId  | String| ID of the profile filter link
| rank         | Number| The rank of this profile filter link relative to the other filters linked to the same profile.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.deleteProfileUserLink
Removes a user from the given view (profile)

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID to which the goal belongs
| linkId       | String| ID of the profile user link

## GoogleAnalytics.addUserToProfileById
Adds a user to the given profile by Id.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account ID
| fields          | List  | Selector specifying which fields to include in a partial response.
| entity          | JSON  | Entity for this link. It can be an account, a web property, or a view (profile).
| localPermissions| List  | Permissions that a user has been assigned at this very level.
| userId          | String| Id of the user
| webPropertyId   | String| Web property ID
| profileId       | String| View (Profile) ID to which the goal belongs

## GoogleAnalytics.addUserToProfileByEmail
Adds a user to the given profile by email.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account ID
| fields          | List  | Selector specifying which fields to include in a partial response.
| entity          | JSON  | Entity for this link. It can be an account, a web property, or a view (profile).
| localPermissions| List  | Permissions that a user has been assigned at this very level.
| userEmail       | String| Email of the user
| webPropertyId   | String| Web property ID
| profileId       | String| View (Profile) ID to which the goal belongs

## GoogleAnalytics.listProfileUsers
Lists profile-user links for a given view (profile). 

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID to which the goal belongs
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.updateProfileUser
Updates permissions for an existing user on the given view (profile).

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account ID
| linkId          | String| Link ID of user
| webPropertyId   | String| Web property ID
| profileId       | String| View (Profile) ID to which the goal belongs
| fields          | List  | Selector specifying which fields to include in a partial response.
| entity          | JSON  | Entity for this link. It can be an account, a web property, or a view (profile).
| localPermissions| List  | Permissions that a user has been assigned at this very level.
| userRef         | JSON  | JSON of the user

## GoogleAnalytics.deleteRemarketingAudience
Delete a remarketing audience. 

| Field                | Type  | Description
|----------------------|-------|----------
| accessToken          | String| OAuth 2.0 token for the current user.
| accountId            | String| Account id
| webPropertyId        | String| Web property ID
| remarketingAudienceId| String| The ID of the remarketing audience

## GoogleAnalytics.getRemarketingAudience
Get a remarketing audience. 

| Field                | Type  | Description
|----------------------|-------|----------
| accessToken          | String| OAuth 2.0 token for the current user.
| accountId            | String| Account id
| webPropertyId        | String| Web property ID
| remarketingAudienceId| String| The ID of the remarketing audience
| fields               | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addRemarketingAudience
Add a remarketing audience. 

| Field                       | Type  | Description
|-----------------------------|-------|----------
| accessToken                 | String| OAuth 2.0 token for the current user.
| accountId                   | String| Account id
| webPropertyId               | String| Web property ID
| audienceDefinition          | JSON  | The simple audience definition object that will cause a user to be added to an audience.
| name                        | String| The name of this remarketing audience.
| audienceType                | Select| The type of this remarketing audience.
| linkedAdAccounts            | List  | The linked ad accounts associated with this remarketing audience. A remarketing audience can have only one linkedAdAccount currentl
| linkedViews            | List  | The views (profiles) that this remarketing audience is linked to.
| stateBasedAudienceDefinition| JSON  | A state based audience definition that will cause a user to be added or removed from an audience.
| fields                      | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listRemarketingAudience
Lists remarketing audiences to which the user has access.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| type         | String| Audience type
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.updateRemarketingAudience
Update a remarketing audience. 

| Field                       | Type  | Description
|-----------------------------|-------|----------
| accessToken                 | String| OAuth 2.0 token for the current user.
| accountId                   | String| Account id
| webPropertyId               | String| Web property ID
| remarketingAudienceId       | String| The ID of the remarketing audience
| audienceDefinition          | JSON  | The simple audience definition object that will cause a user to be added to an audience.
| name                        | String| The false of this remarketing audience.
| audienceType                | Select| The type of this remarketing audience.
| linkedAdAccounts            | List  | The linked ad accounts associated with this remarketing audience. A remarketing audience can have only one linkedAdAccount currentl
| linkedViews            | List  | The views (profiles) that this remarketing audience is linked to.
| stateBasedAudienceDefinition| JSON  | A state based audience definition that will cause a user to be added or removed from an audience.
| fields                      | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listSegments
Lists segments to which the user has access.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| maxResults | Number| The maximum number of entries to include in this feed.
| startIndex | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields     | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.deleteUnsampledReport
Deletes an unsampled report.

| Field            | Type  | Description
|------------------|-------|----------
| accessToken      | String| OAuth 2.0 token for the current user.
| accountId        | String| Account id
| webPropertyId    | String| Web property ID
| profileId        | String| View (Profile) ID 
| unsampledReportId| String| Id of the unsampled report

## GoogleAnalytics.getUnsampledReport
Retrieves an unsampled report.

| Field            | Type  | Description
|------------------|-------|----------
| accessToken      | String| OAuth 2.0 token for the current user.
| accountId        | String| Account id
| webPropertyId    | String| Web property ID
| profileId        | String| View (Profile) ID 
| unsampledReportId| String| Id of the unsampled report
| fields           | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.addUnsampledReport
Adds an unsampled report.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID 
| title        | String| Title of the unsampled report
| metrics      | String| Metrics of the unsampled report
| fields       | List  | Selector specifying which fields to include in a partial response.
| startDate    | String| The start date for the unsampled report.
| endDate      | String| The end date for the unsampled report.
| filters      | String| Filters of the unsampled report
| dimensions   | String| Dimensions of the unsampled report
| segment      | String| Segment of the unsampled report

## GoogleAnalytics.listUnsampledReports
Lists unsampled reports to which the user has access. 

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID 
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.deleteUploadData
Delete data associated with a previous upload.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| OAuth 2.0 token for the current user.
| accountId         | String| Account id
| webPropertyId     | String| Web property ID
| customDataSourceId| String| Custom data source Id
|customDataImportUids| List  | Custom data import Ids

## GoogleAnalytics.getUpload
Gets data associated with a previous upload.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| OAuth 2.0 token for the current user.
| accountId         | String| Account id
| webPropertyId     | String| Web property ID
| customDataSourceId| String| Custom data source Id
| uploadId          | String| ID of the upload
| fields            | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listUpload
List uploads to which the user has access.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| OAuth 2.0 token for the current user.
| accountId         | String| Account id
| webPropertyId     | String| Web property ID
| customDataSourceId| String| Custom data source Id
| fields            | List  | Selector specifying which fields to include in a partial response.
| maxResults        | Number| The maximum number of entries to include in this feed.
| startIndex        | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.

## GoogleAnalytics.addUpload
Upload data for a custom data source.

| Field             | Type  | Description
|-------------------|-------|----------
| accessToken       | String| OAuth 2.0 token for the current user.
| accountId         | String| Account id
| webPropertyId     | String| Web property ID
| customDataSourceId| String| Custom data source Id
| file              | File  | File to upload
| fields            | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.deleteProfile
Deletes a view (profile).

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID

## GoogleAnalytics.getProfile
Retrieves a view (profile).

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listProfiles
Lists views (profiles) to which the user has access.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| fields       | List  | Selector specifying which fields to include in a partial response.
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.

## GoogleAnalytics.getWebProperty
Gets a property to which the user has access.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.listProperties
Lists properties to which the user has access.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| OAuth 2.0 token for the current user.
| accountId  | String| Account id
| fields     | List  | Selector specifying which fields to include in a partial response.
| maxResults | Number| The maximum number of entries to include in this feed.
| startIndex | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.

## GoogleAnalytics.deleteWebPropertyUser
Removes a user from the given web property. 

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| profileId    | String| View (Profile) ID to which the goal belongs
| linkId       | String| ID of the profile user link

## GoogleAnalytics.addUserToWebPropertyById
Adds a user to the given web property by Id.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account ID
| fields          | List  | Selector specifying which fields to include in a partial response.
| entity          | JSON  | Entity for this link. It can be an account, a web property, or a view (profile).
| localPermissions| List  | Permissions that a user has been assigned at this very level.
| userId          | String| Id of the user
| webPropertyId   | String| Web property ID

## GoogleAnalytics.addUserToWebPropertyByEmail
Adds a user to the given web property by email.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account ID
| fields          | List  | Selector specifying which fields to include in a partial response.
| entity          | JSON  | Entity for this link. It can be an account, a web property, or a view (profile).
| localPermissions| List  | Permissions that a user has been assigned at this very level.
| userEmail       | String| Email of the user
| webPropertyId   | String| Web property ID

## GoogleAnalytics.listWebPropertyUsers
Lists webProperty-user links for a given web property.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| OAuth 2.0 token for the current user.
| accountId    | String| Account id
| webPropertyId| String| Web property ID
| maxResults   | Number| The maximum number of entries to include in this feed.
| startIndex   | Number| An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
| fields       | List  | Selector specifying which fields to include in a partial response.

## GoogleAnalytics.updateWebPropertyUser
Updates permissions for an existing user on the given web property.

| Field           | Type  | Description
|-----------------|-------|----------
| accessToken     | String| OAuth 2.0 token for the current user.
| accountId       | String| Account ID
| linkId          | String| Link ID of user
| webPropertyId   | String| Web property ID
| fields          | List  | Selector specifying which fields to include in a partial response.
| entity          | JSON  | Entity for this link. It can be an account, a web property, or a view (profile).
| localPermissions| List  | Permissions that a user has been assigned at this very level.
| userRef         | JSON  | JSON of the user

