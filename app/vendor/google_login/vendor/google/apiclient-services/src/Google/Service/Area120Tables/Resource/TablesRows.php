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
 * The "rows" collection of methods.
 * Typical usage is:
 *  <code>
 *   $area120tablesService = new Google_Service_Area120Tables(...);
 *   $rows = $area120tablesService->rows;
 *  </code>
 */{/**
   * Creates multiple rows. (rows.batchCreate)
   *
   * @param string $parent Required. The parent table where the rows will be
   * created. Format: tables/{table}
   * @param Google_Service_Area120Tables_BatchCreateRowsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Area120Tables_BatchCreateRowsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes multiple rows. (rows.batchDelete)
   *
   * @param string $parent Required. The parent table shared by all rows being
   * deleted. Format: tables/{table}
   * @param Google_Service_Area120Tables_BatchDeleteRowsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Area120Tables_Area120tablesEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates multiple rows. (rows.batchUpdate)
   *
   * @param string $parent Required. The parent table shared by all rows being
   * updated. Format: tables/{table}
   * @param Google_Service_Area120Tables_BatchUpdateRowsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Area120Tables_BatchUpdateRowsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a row. (rows.create)
   *
   * @param string $parent Required. The parent table where this row will be
   * created. Format: tables/{table}
   * @param Google_Service_Area120Tables_Row $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Optional. Column key to use for values in the row.
   * Defaults to user entered name.
   * @return Google_Service_Area120Tables_Row
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a row. (rows.delete)
   *
   * @param string $name Required. The name of the row to delete. Format:
   * tables/{table}/rows/{row}
   * @param array $optParams Optional parameters.
   * @return Google_Service_Area120Tables_Area120tablesEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a row. Returns NOT_FOUND if the row does not exist in the table.
   * (rows.get)
   *
   * @param string $name Required. The name of the row to retrieve. Format:
   * tables/{table}/rows/{row}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Optional. Column key to use for values in the row.
   * Defaults to user entered name.
   * @return Google_Service_Area120Tables_Row
   */(,=()){=();=(,);(,(),);}/**
   * Lists rows in a table. Returns NOT_FOUND if the table does not exist.
   * (rows.listTablesRows)
   *
   * @param string $parent Required. The parent table. Format: tables/{table}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Raw text query to search for in rows of
   * the table. Special characters must be escaped. Logical operators and field
   * specific filtering not supported.
   * @opt_param int pageSize The maximum number of rows to return. The service may
   * return fewer than this value. If unspecified, at most 50 rows are returned.
   * The maximum value is 1,000; values above 1,000 are coerced to 1,000.
   * @opt_param string pageToken A page token, received from a previous `ListRows`
   * call. Provide this to retrieve the subsequent page. When paginating, all
   * other parameters provided to `ListRows` must match the call that provided the
   * page token.
   * @opt_param string view Optional. Column key to use for values in the row.
   * Defaults to user entered name.
   * @return Google_Service_Area120Tables_ListRowsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a row. (rows.patch)
   *
   * @param string $name The resource name of the row. Row names have the form
   * `tables/{table}/rows/{row}`. The name is ignored when creating a row.
   * @param Google_Service_Area120Tables_Row $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The list of fields to update.
   * @opt_param string view Optional. Column key to use for values in the row.
   * Defaults to user entered name.
   * @return Google_Service_Area120Tables_Row
   */(,,=()){=(,);=(,);(,(),);}}