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
 * The "zoneOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $resourceviewsService = new Google_Service_Resourceviews(...);
 *   $zoneOperations = $resourceviewsService->zoneOperations;
 *  </code>
 */{/**
   * Retrieves the specified zone-specific operation resource.
   * (zoneOperations.get)
   *
   * @param string $project Name of the project scoping this request.
   * @param string $zone Name of the zone scoping this request.
   * @param string $operation Name of the operation resource to return.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Resourceviews_Operation
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Retrieves the list of operation resources contained within the specified
   * zone. (zoneOperations.listZoneOperations)
   *
   * @param string $project Name of the project scoping this request.
   * @param string $zone Name of the zone scoping this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression for filtering listed
   * resources.
   * @opt_param string maxResults Optional. Maximum count of results to be
   * returned. Maximum value is 500 and default value is 500.
   * @opt_param string pageToken Optional. Tag returned by a previous list request
   * truncated by maxResults. Used to continue a previous list request.
   * @return Google_Service_Resourceviews_OperationList
   */(,,=()){=(,);=(,);(,(),);}}