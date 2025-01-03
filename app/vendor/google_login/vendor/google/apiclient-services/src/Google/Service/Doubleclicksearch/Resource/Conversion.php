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
 * The "conversion" collection of methods.
 * Typical usage is:
 *  <code>
 *   $doubleclicksearchService = new Google_Service_Doubleclicksearch(...);
 *   $conversion = $doubleclicksearchService->conversion;
 *  </code>
 */{/**
   * Retrieves a list of conversions from a DoubleClick Search engine account.
   * (conversion.get)
   *
   * @param string $agencyId Numeric ID of the agency.
   * @param string $advertiserId Numeric ID of the advertiser.
   * @param string $engineAccountId Numeric ID of the engine account.
   * @param int $endDate Last date (inclusive) on which to retrieve conversions.
   * Format is yyyymmdd.
   * @param int $rowCount The number of conversions to return per call.
   * @param int $startDate First date (inclusive) on which to retrieve
   * conversions. Format is yyyymmdd.
   * @param string $startRow The 0-based starting index for retrieving conversions
   * results.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string adGroupId Numeric ID of the ad group.
   * @opt_param string adId Numeric ID of the ad.
   * @opt_param string campaignId Numeric ID of the campaign.
   * @opt_param string criterionId Numeric ID of the criterion.
   * @return Google_Service_Doubleclicksearch_ConversionList
   */(,,,,,,,=()){=(,,,,,,);=(,);(,(),);}/**
   * Inserts a batch of new conversions into DoubleClick Search.
   * (conversion.insert)
   *
   * @param Google_Service_Doubleclicksearch_ConversionList $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Doubleclicksearch_ConversionList
   */(,=()){=();=(,);(,(),);}/**
   * Updates a batch of conversions in DoubleClick Search. (conversion.update)
   *
   * @param Google_Service_Doubleclicksearch_ConversionList $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Doubleclicksearch_ConversionList
   */(,=()){=();=(,);(,(),);}/**
   * Updates the availabilities of a batch of floodlight activities in DoubleClick
   * Search. (conversion.updateAvailability)
   *
   * @param Google_Service_Doubleclicksearch_UpdateAvailabilityRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Doubleclicksearch_UpdateAvailabilityResponse
   */(,=()){=();=(,);(,(),);}}