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
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $reports = $dfareportingService->reports;
 *  </code>
 */{/**
   * Deletes a report by its ID. (reports.delete)
   *
   * @param string $profileId The Campaign Manager 360 user profile ID.
   * @param string $reportId The ID of the report.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Retrieves a report by its ID. (reports.get)
   *
   * @param string $profileId The Campaign Manager 360 user profile ID.
   * @param string $reportId The ID of the report.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Report
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a report. (reports.insert)
   *
   * @param string $profileId The Campaign Manager 360 user profile ID.
   * @param Google_Service_Dfareporting_Report $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Report
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves list of reports. (reports.listReports)
   *
   * @param string $profileId The Campaign Manager 360 user profile ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Maximum number of results to return.
   * @opt_param string pageToken The value of the nextToken from the previous
   * result page.
   * @opt_param string scope The scope that defines which results are returned.
   * @opt_param string sortField The field by which to sort the list.
   * @opt_param string sortOrder Order of sorted results.
   * @return Google_Service_Dfareporting_ReportList
   */(,=()){=();=(,);(,(),);}/**
   * Updates an existing report. This method supports patch semantics.
   * (reports.patch)
   *
   * @param string $profileId The DFA user profile ID.
   * @param string $reportId The ID of the report.
   * @param Google_Service_Dfareporting_Report $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Report
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Runs a report. (reports.run)
   *
   * @param string $profileId The Campaign Manager 360 user profile ID.
   * @param string $reportId The ID of the report.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool synchronous If set and true, tries to run the report
   * synchronously.
   * @return Google_Service_Dfareporting_DfareportingFile
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates a report. (reports.update)
   *
   * @param string $profileId The Campaign Manager 360 user profile ID.
   * @param string $reportId The ID of the report.
   * @param Google_Service_Dfareporting_Report $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_Report
   */(,,,=()){=(,,);=(,);(,(),);}}