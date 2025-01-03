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
 *   $bigtableadminService = new Google_Service_BigtableAdmin(...);
 *   $tables = $bigtableadminService->tables;
 *  </code>
 */{/**
   * Checks replication consistency based on a consistency token, that is, if
   * replication has caught up based on the conditions specified in the token and
   * the check request. (tables.checkConsistency)
   *
   * @param string $name Required. The unique name of the Table for which to check
   * replication consistency. Values are of the form
   * `projects/{project}/instances/{instance}/tables/{table}`.
   * @param Google_Service_BigtableAdmin_CheckConsistencyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_CheckConsistencyResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a new table in the specified instance. The table can be created with
   * a full set of initial column families, specified in the request.
   * (tables.create)
   *
   * @param string $parent Required. The unique name of the instance in which to
   * create the table. Values are of the form
   * `projects/{project}/instances/{instance}`.
   * @param Google_Service_BigtableAdmin_CreateTableRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_Table
   */(,,=()){=(,);=(,);(,(),);}/**
   * Permanently deletes a specified table and all of its data. (tables.delete)
   *
   * @param string $name Required. The unique name of the table to be deleted.
   * Values are of the form
   * `projects/{project}/instances/{instance}/tables/{table}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_BigtableadminEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Permanently drop/delete a row range from a specified table. The request can
   * specify whether to delete all rows in a table, or only those that match a
   * particular prefix. (tables.dropRowRange)
   *
   * @param string $name Required. The unique name of the table on which to drop a
   * range of rows. Values are of the form
   * `projects/{project}/instances/{instance}/tables/{table}`.
   * @param Google_Service_BigtableAdmin_DropRowRangeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_BigtableadminEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Generates a consistency token for a Table, which can be used in
   * CheckConsistency to check whether mutations to the table that finished before
   * this call started have been replicated. The tokens will be available for 90
   * days. (tables.generateConsistencyToken)
   *
   * @param string $name Required. The unique name of the Table for which to
   * create a consistency token. Values are of the form
   * `projects/{project}/instances/{instance}/tables/{table}`.
   * @param Google_Service_BigtableAdmin_GenerateConsistencyTokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_GenerateConsistencyTokenResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets metadata information about the specified table. (tables.get)
   *
   * @param string $name Required. The unique name of the requested table. Values
   * are of the form `projects/{project}/instances/{instance}/tables/{table}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view The view to be applied to the returned table's fields.
   * Defaults to `SCHEMA_VIEW` if unspecified.
   * @return Google_Service_BigtableAdmin_Table
   */(,=()){=();=(,);(,(),);}/**
   * Gets the access control policy for a Table resource. Returns an empty policy
   * if the resource exists but does not have a policy set. (tables.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_BigtableAdmin_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists all tables served from a specified instance.
   * (tables.listProjectsInstancesTables)
   *
   * @param string $parent Required. The unique name of the instance for which
   * tables should be listed. Values are of the form
   * `projects/{project}/instances/{instance}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum number of results per page. A page_size of
   * zero lets the server choose the number of items to return. A page_size which
   * is strictly positive will return at most that many items. A negative
   * page_size will cause an error. Following the first request, subsequent
   * paginated calls are not required to pass a page_size. If a page_size is set
   * in subsequent calls, it must match the page_size given in the first request.
   * @opt_param string pageToken The value of `next_page_token` returned by a
   * previous call.
   * @opt_param string view The view to be applied to the returned tables' fields.
   * Only NAME_ONLY view (default) and REPLICATION_VIEW are supported.
   * @return Google_Service_BigtableAdmin_ListTablesResponse
   */(,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               quested. See the operation documentation for the appropriate value
   * for this field.
   * @param Google_Service_BigtableAdmin_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_TestIamPermissionsResponse
   */(,,=()){=(,);=(,);(,(),);}}