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
 * The "photos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $photos = $adminService->photos;
 *  </code>
 */{/**
   * Removes the user's photo. (photos.delete)
   *
   * @param string $userKey Identifies the user in the API request. The value can
   * be the user's primary email address, alias email address, or unique user ID.
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Retrieves the user's photo. (photos.get)
   *
   * @param string $userKey Identifies the user in the API request. The value can
   * be the user's primary email address, alias email address, or unique user ID.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_UserPhoto
   */(,=()){=();=(,);(,(),);}/**
   * Adds a photo for the user. This method supports [patch semantics](/admin-
   * sdk/directory/v1/guides/performance#patch). (photos.patch)
   *
   * @param string $userKey Identifies the user in the API request. The value can
   * be the user's primary email address, alias email address, or unique user ID.
   * @param Google_Service_Directory_UserPhoto $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_UserPhoto
   */(,,=()){=(,);=(,);(,(),);}/**
   * Adds a photo for the user. (photos.update)
   *
   * @param string $userKey Identifies the user in the API request. The value can
   * be the user's primary email address, alias email address, or unique user ID.
   * @param Google_Service_Directory_UserPhoto $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_UserPhoto
   */(,,=()){=(,);=(,);(,(),);}}