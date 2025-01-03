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
 * The "queries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $doubleclickbidmanagerService = new Google_Service_DoubleClickBidManager(...);
 *   $queries = $doubleclickbidmanagerService->queries;
 *  </code>
 */{/**
   * Creates a query. (queries.createquery)
   *
   * @param Google_Service_DoubleClickBidManager_Query $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool asynchronous If true, tries to run the query asynchronously.
   * Only applicable when the frequency is ONE_TIME.
   * @return Google_Service_DoubleClickBidManager_Query
   */(,=()){=();=(,);(,(),);}/**
   * Deletes a stored query as well as the associated stored reports.
   * (queries.deletequery)
   *
   * @param string $queryId Query ID to delete.
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Retrieves a stored query. (queries.getquery)
   *
   * @param string $queryId Query ID to retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DoubleClickBidManager_Query
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves stored queries. (queries.listqueries)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum number of results per page. Must be between 1
   * and 100. Defaults to 100 if unspecified.
   * @opt_param string pageToken Optional pagination token.
   * @return Google_Service_DoubleClickBidManager_ListQueriesResponse
   */(=()){=();=(,);(,(),);}/**
   * Runs a stored query to generate a report. (queries.runquery)
   *
   * @param string $queryId Query ID to run.
   * @param Google_Service_DoubleClickBidManager_RunQueryRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool asynchronous If true, tries to run the query asynchronously.
   */(,,=()){=(,);=(,);(,());}}