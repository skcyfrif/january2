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
 * The "aliases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $aliases = $adminService->aliases;
 *  </code>
 */{/**
   * Removes an alias. (aliases.delete)
   *
   * @param string $userKey Identifies the user in the API request. The value can
   * be the user's primary email address, alias email address, or unique user ID.
   * @param string $alias The alias to be removed.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Adds an alias. (aliases.insert)
   *
   * @param string $userKey Identifies the user in the API request. The value can
   * be the user's primary email address, alias email address, or unique user ID.
   * @param Google_Service_Directory_Alias $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Alias
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists all aliases for a user. (aliases.listUsersAliases)
   *
   * @param string $userKey Identifies the user in the API request. The value can
   * be the user's primary email address, alias email address, or unique user ID.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Aliases
   */(,=()){=();=(,);(,(),);}/**
   * Watch for changes in users list. (aliases.watch)
   *
   * @param string $userKey Email or immutable ID of the user
   * @param Google_Service_Directory_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string event Events to watch for.
   * @return Google_Service_Directory_Channel
   */(,,=()){=(,);=(,);(,(),);}}