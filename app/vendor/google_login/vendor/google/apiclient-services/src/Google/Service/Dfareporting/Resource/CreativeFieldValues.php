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
 * The "creativeFieldValues" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $creativeFieldValues = $dfareportingService->creativeFieldValues;
 *  </code>
 */{/**
   * Deletes an existing creative field value. (creativeFieldValues.delete)
   *
   * @param string $profileId User profile ID associated with this request.
   * @param string $creativeFieldId Creative field ID for this creative field
   * value.
   * @param string $id Creative Field Value ID
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Gets one creative field value by ID. (creativeFieldValues.get)
   *
   * @param string $profileId User profile ID associated with this request.
   * @param string $creativeFieldId Creative field ID for this creative field
   * value.
   * @param string $id Creative Field Value ID
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_CreativeFieldValue
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Inserts a new creative field value. (creativeFieldValues.insert)
   *
   * @param string $profileId User profile ID associated with this request.
   * @param string $creativeFieldId Creative field ID for this creative field
   * value.
   * @param Google_Service_Dfareporting_CreativeFieldValue $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_CreativeFieldValue
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Retrieves a list of creative field values, possibly filtered. This method
   * supports paging. (creativeFieldValues.listCreativeFieldValues)
   *
   * @param string $profileId User profile ID associated with this request.
   * @param string $creativeFieldId Creative field ID for this creative field
   * value.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ids Select only creative field values with these IDs.
   * @opt_param int maxResults Maximum number of results to return.
   * @opt_param string pageToken Value of the nextPageToken from the previous
   * result page.
   * @opt_param string searchString Allows searching for creative field values by
   * their values. Wildcards (e.g. *) are not allowed.
   * @opt_param string sortField Field by which to sort the list.
   * @opt_param string sortOrder Order of sorted results.
   * @return Google_Service_Dfareporting_CreativeFieldValuesListResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates an existing creative field value. This method supports patch
   * semantics. (creativeFieldValues.patch)
   *
   * @param string $profileId User profile ID associated with this request.
   * @param string $creativeFieldId CreativeField ID.
   * @param string $id CreativeFieldValue ID.
   * @param Google_Service_Dfareporting_CreativeFieldValue $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_CreativeFieldValue
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Updates an existing creative field value. (creativeFieldValues.update)
   *
   * @param string $profileId User profile ID associated with this request.
   * @param string $creativeFieldId Creative field ID for this creative field
   * value.
   * @param Google_Service_Dfareporting_CreativeFieldValue $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_CreativeFieldValue
   */(,,,=()){=(,,);=(,);(,(),);}}