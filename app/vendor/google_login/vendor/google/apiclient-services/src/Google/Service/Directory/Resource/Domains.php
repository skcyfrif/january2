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
 * The "domains" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new Google_Service_Directory(...);
 *   $domains = $adminService->domains;
 *  </code>
 */{/**
   * Deletes a domain of the customer. (domains.delete)
   *
   * @param string $customer Immutable ID of the Google Workspace account.
   * @param string $domainName Name of domain to be deleted
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Retrieves a domain of the customer. (domains.get)
   *
   * @param string $customer Immutable ID of the Google Workspace account.
   * @param string $domainName Name of domain to be retrieved
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Domains
   */(,,=()){=(,);=(,);(,(),);}/**
   * Inserts a domain of the customer. (domains.insert)
   *
   * @param string $customer Immutable ID of the Google Workspace account.
   * @param Google_Service_Directory_Domains $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Domains
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists the domains of the customer. (domains.listDomains)
   *
   * @param string $customer Immutable ID of the Google Workspace account.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Directory_Domains2
   */(,=()){=();=(,);(,(),);}}