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
 * The "companies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $jobsService = new Google_Service_JobService(...);
 *   $companies = $jobsService->companies;
 *  </code>
 */{/**
   * Creates a new company entity. (companies.create)
   *
   * @param Google_Service_JobService_Company $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_JobService_Company
   */(,=()){=();=(,);(,(),);}/**
   * Deletes the specified company. (companies.delete)
   *
   * @param string $name Required.
   *
   * The resource name of the company to be deleted, such as,
   * "companies/0000aaaa-1111-bbbb-2222-cccc3333dddd".
   * @param array $optParams Optional parameters.
   * @return Google_Service_JobService_JobsEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves the specified company. (companies.get)
   *
   * @param string $name Required.
   *
   * Resource name of the company to retrieve, such as
   * "companies/0000aaaa-1111-bbbb-2222-cccc3333dddd".
   * @param array $optParams Optional parameters.
   * @return Google_Service_JobService_Company
   */(,=()){=();=(,);(,(),);}/**
   * Lists all companies associated with a Cloud Talent Solution account.
   * (companies.listCompanies)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool mustHaveOpenJobs Optional.
   *
   * Set to true if the companies request must have open jobs.
   *
   * Defaults to false.
   *
   * If true, at most page_size of companies are fetched, among which only those
   * with open jobs are returned.
   * @opt_param string pageToken Optional.
   *
   * The starting indicator from which to return results.
   * @opt_param int pageSize Optional.
   *
   * The maximum number of companies to be returned, at most 100. Default is 100
   * if a non-positive number is provided.
   * @return Google_Service_JobService_ListCompaniesResponse
   */(=()){=();=(,);(,(),);}/**
   * Updates the specified company. Company names can't be updated. To update a
   * company name, delete the company and all jobs associated with it, and only
   * then re-create them. (companies.patch)
   *
   * @param string $name Required during company update.
   *
   * The resource name for a company. This is generated by the service when a
   * company is created, for example,
   * "companies/0000aaaa-1111-bbbb-2222-cccc3333dddd".
   * @param Google_Service_JobService_Company $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateCompanyFields Optional but strongly recommended to be
   * provided for the best service experience.
   *
   * If update_company_fields is provided, only the specified fields in company
   * are updated. Otherwise all the fields are updated.
   *
   * A field mask to specify the company fields to update. Valid values are:
   *
   * * displayName * website * imageUrl * companySize *
   * distributorBillingCompanyId * companyInfoSources * careerPageLink *
   * hiringAgency * hqLocation * eeoText * keywordSearchableCustomAttributes *
   * title (deprecated) * keywordSearchableCustomFields (deprecated)
   * @return Google_Service_JobService_Company
   */(,,=()){=(,);=(,);(,(),);}}