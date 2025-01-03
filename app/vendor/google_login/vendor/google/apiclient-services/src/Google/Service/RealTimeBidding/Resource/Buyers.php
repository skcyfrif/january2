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
 * The "buyers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $realtimebiddingService = new Google_Service_RealTimeBidding(...);
 *   $buyers = $realtimebiddingService->buyers;
 *  </code>
 */{/**
   * Gets remarketing tag for a buyer. A remarketing tag is a piece of JavaScript
   * code that can be placed on a web page. When a user visits a page containing a
   * remarketing tag, Google adds the user to a user list.
   * (buyers.getRemarketingTag)
   *
   * @param string $name Required. To fetch remarketing tag for an account, name
   * must follow the pattern `buyers/{accountId}` where `{accountId}` represents
   * ID of a buyer that owns the remarketing tag. For a bidder accessing
   * remarketing tag on behalf of a child seat buyer, `{accountId}` should
   * represent the ID of the child seat buyer. To fetch remarketing tag for a
   * specific user list, name must follow the pattern
   * `buyers/{accountId}/userLists/{userListId}`. See UserList.name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_RealTimeBidding_GetRemarketingTagResponse
   */(,=()){=();=(,);(,(),);}}