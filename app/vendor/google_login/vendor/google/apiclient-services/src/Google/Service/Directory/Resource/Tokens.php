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
 * The "tokens" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $tokens = $adminService->tokens;
 *  </code>
 */{/**
   * Delete all access tokens issued by a user for an application. (tokens.delete)
   *
   * @param string $userKey Identifies the user in the API request. The value can
   * be the user's primary email address, alias email address, or unique user ID.
   * @param string $clientId The Client ID of the application the token is issued
   * to.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Get information about an access token issued by a user. (tokens.get)
   *
   * @param string $userKey Identifies the user in the API request. The value can
   * be the user's primary email address, alias email address, or unique user ID.
   * @param string $clientId The Client ID of the application the token is issued
   * to.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Token
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns the set of tokens specified user has issued to 3rd party
   * applications. (tokens.listTokens)
   *
   * @param string $userKey Identifies the user in the API request. The value can
   * be the user's primary email address, alias email address, or unique user ID.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Tokens
   */(,=()){=();=(,);(,(),);}}