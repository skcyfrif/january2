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
 * The "webApps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidmanagementService = new Google_Service_AndroidManagement(...);
 *   $webApps = $androidmanagementService->webApps;
 *  </code>
 */{/**
   * Creates a web app. (webApps.create)
   *
   * @param string $parent The name of the enterprise in the form
   * enterprises/{enterpriseId}.
   * @param Google_Service_AndroidManagement_WebApp $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidManagement_WebApp
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a web app. (webApps.delete)
   *
   * @param string $name The name of the web app in the form
   * enterprises/{enterpriseId}/webApps/{packageName}.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidManagement_AndroidmanagementEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a web app. (webApps.get)
   *
   * @param string $name The name of the web app in the form
   * enterprises/{enterpriseId}/webApp/{packageName}.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidManagement_WebApp
   */(,=()){=();=(,);(,(),);}/**
   * Lists web apps for a given enterprise. (webApps.listEnterprisesWebApps)
   *
   * @param string $parent The name of the enterprise in the form
   * enterprises/{enterpriseId}.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The requested page size. The actual page size may be
   * fixed to a min or max value.
   * @opt_param string pageToken A token identifying a page of results returned by
   * the server.
   * @return Google_Service_AndroidManagement_ListWebAppsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a web app. (webApps.patch)
   *
   * @param string $name The name of the web app in the form
   * enterprises/{enterpriseId}/webApps/{packageName}.
   * @param Google_Service_AndroidManagement_WebApp $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The field mask indicating the fields to update.
   * If not set, all modifiable fields will be modified.
   * @return Google_Service_AndroidManagement_WebApp
   */(,,=()){=(,);=(,);(,(),);}}