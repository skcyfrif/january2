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
 * The "webPropertyAdWordsLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new Google_Service_Analytics(...);
 *   $webPropertyAdWordsLinks = $analyticsService->webPropertyAdWordsLinks;
 *  </code>
 */{/**
   * Deletes a web property-Google Ads link. (webPropertyAdWordsLinks.delete)
   *
   * @param string $accountId ID of the account which the given web property
   * belongs to.
   * @param string $webPropertyId Web property ID to delete the Google Ads link
   * for.
   * @param string $webPropertyAdWordsLinkId Web property Google Ads link ID.
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Returns a web property-Google Ads link to which the user has access.
   * (webPropertyAdWordsLinks.get)
   *
   * @param string $accountId ID of the account which the given web property
   * belongs to.
   * @param string $webPropertyId Web property ID to retrieve the Google Ads link
   * for.
   * @param string $webPropertyAdWordsLinkId Web property-Google Ads link ID.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_EntityAdWordsLink
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Creates a webProperty-Google Ads link. (webPropertyAdWordsLinks.insert)
   *
   * @param string $accountId ID of the Google Analytics account to create the
   * link for.
   * @param string $webPropertyId Web property ID to create the link for.
   * @param Google_Service_Analytics_EntityAdWordsLink $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_EntityAdWordsLink
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists webProperty-Google Ads links for a given web property.
   * (webPropertyAdWordsLinks.listManagementWebPropertyAdWordsLinks)
   *
   * @param string $accountId ID of the account which the given web property
   * belongs to.
   * @param string $webPropertyId Web property ID to retrieve the Google Ads links
   * for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results The maximum number of webProperty-Google Ads links
   * to include in this response.
   * @opt_param int start-index An index of the first webProperty-Google Ads link
   * to retrieve. Use this parameter as a pagination mechanism along with the max-
   * results parameter.
   * @return Google_Service_Analytics_EntityAdWordsLinks
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates an existing webProperty-Google Ads link. This method supports patch
   * semantics. (webPropertyAdWordsLinks.patch)
   *
   * @param string $accountId ID of the account which the given web property
   * belongs to.
   * @param string $webPropertyId Web property ID to retrieve the Google Ads link
   * for.
   * @param string $webPropertyAdWordsLinkId Web property-Google Ads link ID.
   * @param Google_Service_Analytics_EntityAdWordsLink $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_EntityAdWordsLink
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Updates an existing webProperty-Google Ads link.
   * (webPropertyAdWordsLinks.update)
   *
   * @param string $accountId ID of the account which the given web property
   * belongs to.
   * @param string $webPropertyId Web property ID to retrieve the Google Ads link
   * for.
   * @param string $webPropertyAdWordsLinkId Web property-Google Ads link ID.
   * @param Google_Service_Analytics_EntityAdWordsLink $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Analytics_EntityAdWordsLink
   */(,,,,=()){=(,,,);=(,);(,(),);}}