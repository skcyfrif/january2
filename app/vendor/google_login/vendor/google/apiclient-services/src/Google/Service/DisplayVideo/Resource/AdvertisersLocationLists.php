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
 * The "locationLists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $displayvideoService = new Google_Service_DisplayVideo(...);
 *   $locationLists = $displayvideoService->locationLists;
 *  </code>
 */{/**
   * Creates a new location list. Returns the newly created location list if
   * successful. (locationLists.create)
   *
   * @param string $advertiserId Required. The ID of the DV360 advertiser to which
   * the location list belongs.
   * @param Google_Service_DisplayVideo_LocationList $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DisplayVideo_LocationList
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets a location list. (locationLists.get)
   *
   * @param string $advertiserId Required. The ID of the DV360 advertiser to which
   * the fetched location list belongs.
   * @param string $locationListId Required. The ID of the location list to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DisplayVideo_LocationList
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists location lists based on a given advertiser id.
   * (locationLists.listAdvertisersLocationLists)
   *
   * @param string $advertiserId Required. The ID of the DV360 advertiser to which
   * the fetched location lists belong.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Allows filtering by location list fields. Supported
   * syntax: * Filter expressions are made up of one or more restrictions. *
   * Restrictions can be combined by `AND` or `OR` logical operators. A sequence
   * of restrictions implicitly uses `AND`. * A restriction has the form of
   * `{field} {operator} {value}`. * The operator must be `EQUALS (=)`. *
   * Supported fields: - `locationType` Examples: * All regional location list:
   * `locationType="TARGETING_LOCATION_TYPE_REGIONAL"` * All proximity location
   * list: `locationType="TARGETING_LOCATION_TYPE_PROXIMITY"`
   * @opt_param string orderBy Field by which to sort the list. Acceptable values
   * are: * `locationListId` (default) * `displayName` The default sorting order
   * is ascending. To specify descending order for a field, a suffix "desc" should
   * be added to the field name. Example: `displayName desc`.
   * @opt_param int pageSize Requested page size. Must be between `1` and `100`.
   * Defaults to `100` if not set. Returns error code `INVALID_ARGUMENT` if an
   * invalid value is specified.
   * @opt_param string pageToken A token identifying a page of results the server
   * should return. Typically, this is the value of next_page_token returned from
   * the previous call to `ListLocationLists` method. If not specified, the first
   * page of results will be returned.
   * @return Google_Service_DisplayVideo_ListLocationListsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a location list. Returns the updated location list if successful.
   * (locationLists.patch)
   *
   * @param string $advertiserId Required. The ID of the DV360 advertiser to which
   * the location lists belongs.
   * @param string $locationListId Output only. The unique ID of the location
   * list. Assigned by the system.
   * @param Google_Service_DisplayVideo_LocationList $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The mask to control which fields to
   * update.
   * @return Google_Service_DisplayVideo_LocationList
   */(,,,=()){=(,,);=(,);(,(),);}}