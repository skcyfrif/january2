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
 * The "campaigns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $displayvideoService = new Google_Service_DisplayVideo(...);
 *   $campaigns = $displayvideoService->campaigns;
 *  </code>
 */{/**
   * Creates a new campaign. Returns the newly created campaign if successful.
   * (campaigns.create)
   *
   * @param string $advertiserId Output only. The unique ID of the advertiser the
   * campaign belongs to.
   * @param Google_Service_DisplayVideo_Campaign $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DisplayVideo_Campaign
   */(,,=()){=(,);=(,);(,(),);}/**
   * Permanently deletes a campaign. A deleted campaign cannot be recovered. The
   * campaign should be archived first, i.e. set entity_status to
   * `ENTITY_STATUS_ARCHIVED`, to be able to delete it. (campaigns.delete)
   *
   * @param string $advertiserId The ID of the advertiser this campaign belongs
   * to.
   * @param string $campaignId The ID of the campaign we need to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DisplayVideo_DisplayvideoEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets a campaign. (campaigns.get)
   *
   * @param string $advertiserId Required. The ID of the advertiser this campaign
   * belongs to.
   * @param string $campaignId Required. The ID of the campaign to fetch.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DisplayVideo_Campaign
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists campaigns in an advertiser. The order is defined by the order_by
   * parameter. If a filter by entity_status is not specified, campaigns with
   * `ENTITY_STATUS_ARCHIVED` will not be included in the results.
   * (campaigns.listAdvertisersCampaigns)
   *
   * @param string $advertiserId The ID of the advertiser to list campaigns for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Allows filtering by campaign properties. Supported
   * syntax: * Filter expressions are made up of one or more restrictions. *
   * Restrictions can be combined by `AND` or `OR` logical operators. A sequence
   * of restrictions implicitly uses `AND`. * A restriction has the form of
   * `{field} {operator} {value}`. * The operator used on `updateTime` must be
   * `GREATER THAN OR EQUAL TO (>=)` or `LESS THAN OR EQUAL TO (<=)`. * The
   * operator must be `EQUALS (=)`. * Supported fields: - `campaignId` -
   * `displayName` - `entityStatus` - `updateTime` (input in ISO 8601 format, or
   * YYYY-MM-DDTHH:MM:SSZ) Examples: * All `ENTITY_STATUS_ACTIVE` or
   * `ENTITY_STATUS_PAUSED` campaigns under an advertiser:
   * `(entityStatus="ENTITY_STATUS_ACTIVE" OR
   * entityStatus="ENTITY_STATUS_PAUSED")` * All campaigns with an update time
   * less than or equal to `2020-11-04T18:54:47Z (format of ISO 8601)`:
   * `updateTime<="2020-11-04T18:54:47Z"` * All campaigns with an update time
   * greater than or equal to `2020-11-04T18:54:47Z (format of ISO 8601)`:
   * `updateTime>="2020-11-04T18:54:47Z"` The length of this field should be no
   * more than 500 characters.
   * @opt_param string orderBy Field by which to sort the list. Acceptable values
   * are: * `displayName` (default) * `entityStatus` * `updateTime` The default
   * sorting order is ascending. To specify descending order for a field, a suffix
   * "desc" should be added to the field name. Example: `displayName desc`.
   * @opt_param int pageSize Requested page size. Must be between `1` and `100`.
   * If unspecified will default to `100`.
   * @opt_param string pageToken A token identifying a page of results the server
   * should return. Typically, this is the value of next_page_token returned from
   * the previous call to `ListCampaigns` method. If not specified, the first page
   * of results will be returned.
   * @return Google_Service_DisplayVideo_ListCampaignsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates an existing campaign. Returns the updated campaign if successful.
   * (campaigns.patch)
   *
   * @param string $advertiserId Output only. The unique ID of the advertiser the
   * campaign belongs to.
   * @param string $campaignId Output only. The unique ID of the campaign.
   * Assigned by the system.
   * @param Google_Service_DisplayVideo_Campaign $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The mask to control which fields to
   * update.
   * @return Google_Service_DisplayVideo_Campaign
   */(,,,=()){=(,,);=(,);(,(),);}}