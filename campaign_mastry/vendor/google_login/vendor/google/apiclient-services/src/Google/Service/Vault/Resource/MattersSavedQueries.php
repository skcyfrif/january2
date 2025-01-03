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
 * The "savedQueries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $vaultService = new Google_Service_Vault(...);
 *   $savedQueries = $vaultService->savedQueries;
 *  </code>
 */{/**
   * Creates a saved query. (savedQueries.create)
   *
   * @param string $matterId The matter ID of the parent matter for which the
   * saved query is to be created.
   * @param Google_Service_Vault_SavedQuery $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_SavedQuery
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a saved query by Id. (savedQueries.delete)
   *
   * @param string $matterId The matter ID of the parent matter for which the
   * saved query is to be deleted.
   * @param string $savedQueryId ID of the saved query to be deleted.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_VaultEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves a saved query by Id. (savedQueries.get)
   *
   * @param string $matterId The matter ID of the parent matter for which the
   * saved query is to be retrieved.
   * @param string $savedQueryId ID of the saved query to be retrieved.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_SavedQuery
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists saved queries within a matter. An empty page token in
   * ListSavedQueriesResponse denotes no more saved queries to list.
   * (savedQueries.listMattersSavedQueries)
   *
   * @param string $matterId The matter ID of the parent matter for which the
   * saved queries are to be retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of saved queries to return.
   * @opt_param string pageToken The pagination token as returned in the previous
   * response. An empty token means start from the beginning.
   * @return Google_Service_Vault_ListSavedQueriesResponse
   */(,=()){=();=(,);(,(),);}}