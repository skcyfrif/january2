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
 * The "tables" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $tables = $bigqueryService->tables;
 *  </code>
 */{/**
   * Deletes the table specified by tableId from the dataset. If the table
   * contains data, all the data will be deleted. (tables.delete)
   *
   * @param string $projectId Project ID of the table to delete
   * @param string $datasetId Dataset ID of the table to delete
   * @param string $tableId Table ID of the table to delete
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Gets the specified table resource by table ID. This method does not return
   * the data in the table, it only returns the table resource, which describes
   * the structure of this table. (tables.get)
   *
   * @param string $projectId Project ID of the requested table
   * @param string $datasetId Dataset ID of the requested table
   * @param string $tableId Table ID of the requested table
   * @param array $optParams Optional parameters.
   *
   * @opt_param string selectedFields List of fields to return (comma-separated).
   * If unspecified, all fields are returned
   * @return Google_Service_Bigquery_Table
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (tables.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_Bigquery_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a new, empty table in the dataset. (tables.insert)
   *
   * @param string $projectId Project ID of the new table
   * @param string $datasetId Dataset ID of the new table
   * @param Google_Service_Bigquery_Table $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_Table
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists all tables in the specified dataset. Requires the READER dataset role.
   * (tables.listTables)
   *
   * @param string $projectId Project ID of the tables to list
   * @param string $datasetId Dataset ID of the tables to list
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults Maximum number of results to return
   * @opt_param string pageToken Page token, returned by a previous call, to
   * request the next page of results
   * @return Google_Service_Bigquery_TableList
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates information in an existing table. The update method replaces the
   * entire table resource, whereas the patch method only replaces fields that are
   * provided in the submitted table resource. This method supports patch
   * semantics. (tables.patch)
   *
   * @param string $projectId Project ID of the table to update
   * @param string $datasetId Dataset ID of the table to update
   * @param string $tableId Table ID of the table to update
   * @param Google_Service_Bigquery_Table $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_Table
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and
   * `PERMISSION_DENIED` errors. (tables.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_Bigquery_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * `NOT_FOUND` error. Note: This operation is designed to be used for building
   * permission-aware UIs and command-line tools, not for authorization checking.
   * This operation may "fail open" without warning. (tables.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See the operation documentation for the appropriate value
   * for this field.
   * @param Google_Service_Bigquery_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_TestIamPermissionsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates information in an existing table. The update method replaces the
   * entire table resource, whereas the patch method only replaces fields that are
   * provided in the submitted table resource. (tables.update)
   *
   * @param string $projectId Project ID of the table to update
   * @param string $datasetId Dataset ID of the table to update
   * @param string $tableId Table ID of the table to update
   * @param Google_Service_Bigquery_Table $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Bigquery_Table
   */(,,,,=()){=(,,,);=(,);(,(),);}}