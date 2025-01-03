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
 * The "versions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $scriptService = new Google_Service_Script(...);
 *   $versions = $scriptService->versions;
 *  </code>
 */{/**
   * Creates a new immutable version using the current code, with a unique version
   * number. (versions.create)
   *
   * @param string $scriptId The script project's Drive ID.
   * @param Google_Service_Script_Version $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Version
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets a version of a script project. (versions.get)
   *
   * @param string $scriptId The script project's Drive ID.
   * @param int $versionNumber The version number.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Script_Version
   */(,,=()){=(,);=(,);(,(),);}/**
   * List the versions of a script project. (versions.listProjectsVersions)
   *
   * @param string $scriptId The script project's Drive ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of versions on each returned page.
   * Defaults to 50.
   * @opt_param string pageToken The token for continuing a previous list request
   * on the next page. This should be set to the value of `nextPageToken` from a
   * previous response.
   * @return Google_Service_Script_ListVersionsResponse
   */(,=()){=();=(,);(,(),);}}