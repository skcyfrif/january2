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
 * The "infoTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dlpService = new Google_Service_DLP(...);
 *   $infoTypes = $dlpService->infoTypes;
 *  </code>
 */{/**
   * Returns a list of the sensitive information types that the DLP API supports.
   * See https://cloud.google.com/dlp/docs/infotypes-reference to learn more.
   * (infoTypes.listLocationsInfoTypes)
   *
   * @param string $parent The parent resource name. The format of this value is
   * as follows: locations/ LOCATION_ID
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter filter to only return infoTypes supported by certain
   * parts of the API. Defaults to supported_by=INSPECT.
   * @opt_param string languageCode BCP-47 language code for localized infoType
   * friendly names. If omitted, or if localized strings are not available, en-US
   * strings will be returned.
   * @opt_param string locationId Deprecated. This field has no effect.
   * @return Google_Service_DLP_GooglePrivacyDlpV2ListInfoTypesResponse
   */(,=()){=();=(,);(,(),);}}