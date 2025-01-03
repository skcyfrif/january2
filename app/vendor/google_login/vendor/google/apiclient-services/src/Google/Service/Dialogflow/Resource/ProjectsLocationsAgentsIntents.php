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
   * Creates an intent in the specified agent. (intents.create)
   *
   * @param string $parent Required. The agent to create an intent for. Format:
   * `projects//locations//agents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Intent $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The language of the following fields in
   * `intent`: * `Intent.training_phrases.parts.text` If not specified, the
   * agent's default language is used. [Many
   * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
   * supported. Note: languages must be enabled in the agent before they can be
   * used.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Intent
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes the specified intent. (intents.delete)
   *
   * @param string $name Required. The name of the intent to delete. Format:
   * `projects//locations//agents//intents/`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dialogflow_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves the specified intent. (intents.get)
   *
   * @param string $name Required. The name of the intent. Format:
   * `projects//locations//agents//intents/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The language to retrieve the intent for. The
   * following fields are language dependent: *
   * `Intent.training_phrases.parts.text` If not specified, the agent's default
   * language is used. [Many
   * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
   * supported. Note: languages must be enabled in the agent before they can be
   * used.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Intent
   */(,=()){=();=(,);(,(),);}/**
   * Returns the list of all intents in the specified agent.
   * (intents.listProjectsLocationsAgentsIntents)
   *
   * @param string $parent Required. The agent to list all intents for. Format:
   * `projects//locations//agents/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string intentView The resource view to apply to the returned
   * intent.
   * @opt_param string languageCode The language to list intents for. The
   * following fields are language dependent: *
   * `Intent.training_phrases.parts.text` If not specified, the agent's default
   * language is used. [Many
   * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
   * supported. Note: languages must be enabled in the agent before they can be
   * used.
   * @opt_param int pageSize The maximum number of items to return in a single
   * page. By default 100 and at most 1000.
   * @opt_param string pageToken The next_page_token value returned from a
   * previous list request.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3ListIntentsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates the specified intent. (intents.patch)
   *
   * @param string $name The unique identifier of the intent. Required for the
   * Intents.UpdateIntent method. Intents.CreateIntent populates the name
   * automatically. Format: `projects//locations//agents//intents/`.
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Intent $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The language of the following fields in
   * `intent`: * `Intent.training_phrases.parts.text` If not specified, the
   * agent's default language is used. [Many
   * languages](https://cloud.google.com/dialogflow/docs/reference/language) are
   * supported. Note: languages must be enabled in the agent before they can be
   * used.
   * @opt_param string updateMask The mask to control which fields get updated. If
   * the mask is not present, all fields will be updated.
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowCxV3Intent
   */(,,=()){=(,);=(,);(,(),);}}