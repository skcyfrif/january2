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
 * The "apks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $apks = $androidpublisherService->apks;
 *  </code>
 */{/**
   * Creates a new APK without uploading the APK itself to Google Play, instead
   * hosting the APK at a specified URL. This function is only available to
   * organizations using Managed Play whose application is configured to restrict
   * distribution to the organizations. (apks.addexternallyhosted)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param Google_Service_AndroidPublisher_ApksAddExternallyHostedRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_ApksAddExternallyHostedResponse
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists all current APKs of the app and edit. (apks.listEditsApks)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_ApksListResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Uploads an APK and adds to the current edit. (apks.upload)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_Apk
   */(,,=()){=(,);=(,);(,(),);}}