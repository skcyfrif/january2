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
 * The "files" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dfareportingService = new Google_Service_Dfareporting(...);
 *   $files = $dfareportingService->files;
 *  </code>
 */{/**
   * Retrieves a report file by its report ID and file ID. This method supports
   * media download. (files.get)
   *
   * @param string $profileId The Campaign Manager 360 user profile ID.
   * @param string $reportId The ID of the report.
   * @param string $fileId The ID of the report file.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dfareporting_DfareportingFile
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists files for a report. (files.listReportsFiles)
   *
   * @param string $profileId The Campaign Manager 360 user profile ID.
   * @param string $reportId The ID of the parent report.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Maximum number of results to return.
   * @opt_param string pageToken The value of the nextToken from the previous
   * result page.
   * @opt_param string sortField The field by which to sort the list.
   * @opt_param string sortOrder Order of sorted results.
   * @return Google_Service_Dfareporting_FileList
   */(,,=()){=(,);=(,);(,(),);}}