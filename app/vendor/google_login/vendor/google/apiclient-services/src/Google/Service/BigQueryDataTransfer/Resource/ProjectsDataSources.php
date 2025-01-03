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
 * The "dataSources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigquerydatatransferService = new Google_Service_BigQueryDataTransfer(...);
 *   $dataSources = $bigquerydatatransferService->dataSources;
 *  </code>
 */{/**
   * Returns true if valid credentials exist for the given data source and
   * requesting user. Some data sources doesn't support service account, so we
   * need to talk to them on behalf of the end user. This API just checks whether
   * we have OAuth token for the particular user, which is a pre-requisite before
   * user can create a transfer config. (dataSources.checkValidCreds)
   *
   * @param string $name Required. The data source in the form:
   * `projects/{project_id}/dataSources/{data_source_id}` or
   * `projects/{project_id}/locations/{location_id}/dataSources/{data_source_id}`.
   * @param Google_Service_BigQueryDataTransfer_CheckValidCredsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigQueryDataTransfer_CheckValidCredsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves a supported data source and returns its settings, which can be used
   * for UI rendering. (dataSources.get)
   *
   * @param string $name Required. The field will contain name of the resource
   * requested, for example: `projects/{project_id}/dataSources/{data_source_id}`
   * or
   * `projects/{project_id}/locations/{location_id}/dataSources/{data_source_id}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigQueryDataTransfer_DataSource
   */(,=()){=();=(,);(,(),);}/**
   * Lists supported data sources and returns their settings, which can be used
   * for UI rendering. (dataSources.listProjectsDataSources)
   *
   * @param string $parent Required. The BigQuery project id for which data
   * sources should be returned. Must be in the form: `projects/{project_id}` or
   * `projects/{project_id}/locations/{location_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Page size. The default page size is the maximum value
   * of 1000 results.
   * @opt_param string pageToken Pagination token, which can be used to request a
   * specific page of `ListDataSourcesRequest` list results. For multiple-page
   * results, `ListDataSourcesResponse` outputs a `next_page` token, which can be
   * used as the `page_token` value to request the next page of list results.
   * @return Google_Service_BigQueryDataTransfer_ListDataSourcesResponse
   */(,=()){=();=(,);(,(),);}}