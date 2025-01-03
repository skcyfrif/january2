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
 * The "user_permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tagmanagerService = new Google_Service_TagManager(...);
 *   $user_permissions = $tagmanagerService->user_permissions;
 *  </code>
 */{/**
   * Creates a user's Account & Container access. (user_permissions.create)
   *
   * @param string $parent GTM Account's API relative path. Example:
   * accounts/{account_id}
   * @param Google_Service_TagManager_UserPermission $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_UserPermission
   */(,,=()){=(,);=(,);(,(),);}/**
   * Removes a user from the account, revoking access to it and all of its
   * containers. (user_permissions.delete)
   *
   * @param string $path GTM UserPermission's API relative path. Example:
   * accounts/{account_id}/user_permissions/{user_permission_id}
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Gets a user's Account & Container access. (user_permissions.get)
   *
   * @param string $path GTM UserPermission's API relative path. Example:
   * accounts/{account_id}/user_permissions/{user_permission_id}
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_UserPermission
   */(,=()){=();=(,);(,(),);}/**
   * List all users that have access to the account along with Account and
   * Container user access granted to each of them.
   * (user_permissions.listAccountsUserPermissions)
   *
   * @param string $parent GTM Accounts's API relative path. Example:
   * accounts/{account_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken Continuation token for fetching the next page of
   * results.
   * @return Google_Service_TagManager_ListUserPermissionsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a user's Account & Container access. (user_permissions.update)
   *
   * @param string $path GTM UserPermission's API relative path. Example:
   * accounts/{account_id}/user_permissions/{user_permission_id}
   * @param Google_Service_TagManager_UserPermission $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TagManager_UserPermission
   */(,,=()){=(,);=(,);(,(),);}}