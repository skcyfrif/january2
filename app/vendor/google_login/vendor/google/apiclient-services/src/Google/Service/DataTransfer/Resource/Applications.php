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
 * The "applications" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_DataTransfer(...);
 *   $applications = $adminService->applications;
 *  </code>
 */{/**
   * Retrieves information about an application for the given application ID.
   * (applications.get)
   *
   * @param string $applicationId ID of the application resource to be retrieved.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DataTransfer_Application
   */(,=()){=();=(,);(,(),);}/**
   * Lists the applications available for data transfer for a customer.
   * (applications.listApplications)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customerId Immutable ID of the Google Workspace account.
   * @opt_param int maxResults Maximum number of results to return. Default is
   * 100.
   * @opt_param string pageToken Token to specify next page in the list.
   * @return Google_Service_DataTransfer_ApplicationsListResponse
   */(=()){=();=(,);(,(),);}}