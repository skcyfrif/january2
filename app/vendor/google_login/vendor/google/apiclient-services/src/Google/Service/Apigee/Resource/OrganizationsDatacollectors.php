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
 * The "datacollectors" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google_Service_Apigee(...);
 *   $datacollectors = $apigeeService->datacollectors;
 *  </code>
 */{/**
   * Creates a new data collector. (datacollectors.create)
   *
   * @param string $parent Required. Name of the organization in which to create
   * the data collector in the following format: `organizations/{org}`.
   * @param Google_Service_Apigee_GoogleCloudApigeeV1DataCollector $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string dataCollectorId ID of the data collector. Overrides any ID
   * in the data collector resource. Must begin with `dc_`.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1DataCollector
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a data collector. (datacollectors.delete)
   *
   * @param string $name Required. Name of the data collector in the following
   * format: `organizations/{org}/datacollectors/{data_collector_id}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a data collector. (datacollectors.get)
   *
   * @param string $name Required. Name of the data collector in the following
   * format: `organizations/{org}/datacollectors/{data_collector_id}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1DataCollector
   */(,=()){=();=(,);(,(),);}/**
   * Lists all data collectors. (datacollectors.listOrganizationsDatacollectors)
   *
   * @param string $parent Required. Name of the organization for which to list
   * data collectors in the following format: `organizations/{org}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum number of data collectors to return. The page
   * size defaults to 25.
   * @opt_param string pageToken Page token, returned from a previous
   * ListDataCollectors call, that you can use to retrieve the next page.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1ListDataCollectorsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a data collector. (datacollectors.patch)
   *
   * @param string $name Required. Name of the data collector in the following
   * format: `organizations/{org}/datacollectors/{data_collector_id}`.
   * @param Google_Service_Apigee_GoogleCloudApigeeV1DataCollector $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask List of fields to be updated.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1DataCollector
   */(,,=()){=(,);=(,);(,(),);}}