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
 * The "scripts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $scriptService = new Google_Service_Script(...);
 *   $scripts = $scriptService->scripts;
 *  </code>
 */{/**
   * Runs a function in an Apps Script project. The script project must be
   * deployed for use with the Apps Script API and the calling application must
   * share the same Cloud Platform project. This method requires authorization
   * with an OAuth 2.0 token that includes at least one of the scopes listed in
   * the [Authorization](#authorization-scopes) section; script projects that do
   * not require authorization cannot be executed through this API. To find the
   * correct scopes to include in the authentication token, open the script
   * project **Overview** page and scroll down to "Project OAuth Scopes." The
   * error `403, PERMISSION_DENIED: The caller does not have permission` indicates
   * that the Cloud Platform project used to authorize the request is not the same
   * as the one used by the script. (scripts.run)
   *
   * @param string $scriptId The script ID of the script to be executed. Find the
   * script ID on the **Project settings** page under "IDs."
   * @param Google_Service_Script_ExecutionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Operation
   */(,,=()){=(,);=(,);(,(),);}}