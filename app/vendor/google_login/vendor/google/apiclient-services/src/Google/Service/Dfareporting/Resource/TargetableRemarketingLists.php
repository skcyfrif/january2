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
 * The "targetableRemarketingLists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $targetableRemarketingLists = $dfareportingService->targetableRemarketingLists;
 *  </code>
 */{/**
   * Gets one remarketing list by ID. (targetableRemarketingLists.get)
   *
   * @param string $profileId User profile ID associated with this request.
   * @param string $id Remarketing list ID.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_TargetableRemarketingList
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves a list of targetable remarketing lists, possibly filtered. This
   * method supports paging.
   * (targetableRemarketingLists.listTargetableRemarketingLists)
   *
   * @param string $profileId User profile ID associated with this request.
   * @param string $advertiserId Select only targetable remarketing lists
   * targetable by these advertisers.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool active Select only active or only inactive targetable
   * remarketing lists.
   * @opt_param int maxResults Maximum number of results to return.
   * @opt_param string name Allows searching for objects by name or ID. Wildcards
   * (*) are allowed. For example, "remarketing list*2015" will return objects
   * with names like "remarketing list June 2015", "remarketing list April 2015",
   * or simply "remarketing list 2015". Most of the searches also add wildcards
   * implicitly at the start and the end of the search string. For example, a
   * search string of "remarketing list" will match objects with name "my
   * remarketing list", "remarketing list 2015", or simply "remarketing list".
   * @opt_param string pageToken Value of the nextPageToken from the previous
   * result page.
   * @opt_param string sortField Field by which to sort the list.
   * @opt_param string sortOrder Order of sorted results.
   * @return Google_Service_Dfareporting_TargetableRemarketingListsListResponse
   */(,,=()){=(,);=(,);(,(),);}}