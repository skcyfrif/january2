/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 *//**
 * The "intents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dialogflowService = new Google_Service_Dialogflow(...);
 *   $intents = $dialogflowService->intents;
 *  </code>
 */{/**
   * Deletes intents in the specified agent. Operation  (intents.batchDelete)
   *
   * @param string $parent Required. The name of the agent to delete all entities
   * types for. Format: `projects//agent`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2BatchDeleteIntentsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates/Creates multiple intents in the specified agent. Operation
   * (intents.batchUpdate)
   *
   * @param string $parent Required. The name of the agent to update or create
   * intents in. Format: `projects//agent`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2BatchUpdateIntentsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleLongrunningOperation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates an intent in the specified agent. (intents.create)
   *
   * @param string $parent Required. The agent to create a intent for. Format:
   * `projects//agent`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string intentView Optional. The resource view to apply to the
   * returned intent.
   * @opt_param string languageCode Optional. The language used to access
   * language-specific data. If not specified, the agent's default language is
   * used. For more information, see [Multilingual intent and entity
   * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-
   * entity).
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes the specified intent and its direct or indirect followup intents.
   * (intents.delete)
   *
   * @param string $name Required. The name of the intent to delete. If this
   * intent has direct or indirect followup intents, we also delete them. Format:
   * `projects//agent/intents/`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves the specified intent. (intents.get)
   *
   * @param string $name Required. The name of the intent. Format:
   * `projects//agent/intents/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string intentView Optional. The resource view to apply to the
   * returned intent.
   * @opt_param string languageCode Optional. The language used to access
   * language-specific data. If not specified, the agent's default language is
   * used. For more information, see [Multilingual intent and entity
   * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-
   * entity).
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent
   */(,=()){=();=(,);(,(),);}/**
   * Returns the list of all intents in the specified agent.
   * (intents.listProjectsAgentIntents)
   *
   * @param string $parent Required. The agent to list all intents from. Format:
   * `projects//agent`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string intentView Optional. The resource view to apply to the
   * returned intent.
   * @opt_param string languageCode Optional. The language used to access
   * language-specific data. If not specified, the agent's default language is
   * used. For more information, see [Multilingual intent and entity
   * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-
   * entity).
   * @opt_param int pageSize Optional. The maximum number of items to return in a
   * single page. By default 100 and at most 1000.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list request.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2ListIntentsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates the specified intent. (intents.patch)
   *
   * @param string $name Optional. The unique identifier of this intent. Required
   * for Intents.UpdateIntent and Intents.BatchUpdateIntents methods. Format:
   * `projects//agent/intents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string intentView Optional. The resource view to apply to the
   * returned intent.
   * @opt_param string languageCode Optional. The language used to access
   * language-specific data. If not specified, the agent's default language is
   * used. For more information, see [Multilingual intent and entity
   * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-
   * entity).
   * @opt_param string updateMask Optional. The mask to control which fields get
   * updated.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2Intent
   */(,,=()){=(,);=(,);(,(),);}}