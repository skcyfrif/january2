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
 * The "buildings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $buildings = $adminService->buildings;
 *  </code>
 */{/**
   * Deletes a building. (buildings.delete)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param string $buildingId The id of the building to delete.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Retrieves a building. (buildings.get)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param string $buildingId The unique ID of the building to retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Building
   */(,,=()){=(,);=(,);(,(),);}/**
   * Inserts a building. (buildings.insert)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param Google_Service_Directory_Building $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string coordinatesSource Source from which Building.coordinates
   * are derived.
   * @return Google_Service_Directory_Building
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves a list of buildings for an account.
   * (buildings.listResourcesBuildings)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Maximum number of results to return.
   * @opt_param string pageToken Token to specify the next page in the list.
   * @return Google_Service_Directory_Buildings
   */(,=()){=();=(,);(,(),);}/**
   * Patches a building via Apiary Patch Orchestration. (buildings.patch)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param string $buildingId The id of the building to update.
   * @param Google_Service_Directory_Building $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string coordinatesSource Source from which Building.coordinates
   * are derived.
   * @return Google_Service_Directory_Building
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Updates a building. (buildings.update)
   *
   * @param string $customer The unique ID for the customer's Google Workspace
   * account. As an account administrator, you can also use the `my_customer`
   * alias to represent your account's customer ID.
   * @param string $buildingId The id of the building to update.
   * @param Google_Service_Directory_Building $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string coordinatesSource Source from which Building.coordinates
   * are derived.
   * @return Google_Service_Directory_Building
   */(,,,=()){=(,,);=(,);(,(),);}}