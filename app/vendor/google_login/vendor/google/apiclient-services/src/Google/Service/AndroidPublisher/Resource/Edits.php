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
 * The "edits" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $edits = $androidpublisherService->edits;
 *  </code>
 */{/**
   * Commits an app edit. (edits.commit)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_AppEdit
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes an app edit. (edits.delete)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Gets an app edit. (edits.get)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_AppEdit
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a new edit for an app. (edits.insert)
   *
   * @param string $packageName Package name of the app.
   * @param Google_Service_AndroidPublisher_AppEdit $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_AppEdit
   */(,,=()){=(,);=(,);(,(),);}/**
   * Validates an app edit. (edits.validate)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_AppEdit
   */(,,=()){=(,);=(,);(,(),);}}