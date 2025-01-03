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
 * The "column" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $column = $fusiontablesService->column;
 *  </code>
 */{/**
   * Deletes the specified column. (column.delete)
   *
   * @param string $tableId Table from which the column is being deleted.
   * @param string $columnId Name or identifier for the column being deleted.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Retrieves a specific column by its ID. (column.get)
   *
   * @param string $tableId Table to which the column belongs.
   * @param string $columnId Name or identifier for the column that is being
   * requested.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */(,,=()){=(,);=(,);(,(),);}/**
   * Adds a new column to the table. (column.insert)
   *
   * @param string $tableId Table for which a new column is being added.
   * @param Google_Service_Fusiontables_Column $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves a list of columns. (column.listColumn)
   *
   * @param string $tableId Table whose columns are being listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults Maximum number of columns to return. Default is
   * 5.
   * @opt_param string pageToken Continuation token specifying which result page
   * to return.
   * @return Google_Service_Fusiontables_ColumnList
   */(,=()){=();=(,);(,(),);}/**
   * Updates the name or type of an existing column. This method supports patch
   * semantics. (column.patch)
   *
   * @param string $tableId Table for which the column is being updated.
   * @param string $columnId Name or identifier for the column that is being
   * updated.
   * @param Google_Service_Fusiontables_Column $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Updates the name or type of an existing column. (column.update)
   *
   * @param string $tableId Table for which the column is being updated.
   * @param string $columnId Name or identifier for the column that is being
   * updated.
   * @param Google_Service_Fusiontables_Column $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */(,,,=()){=(,,);=(,);(,(),);}}