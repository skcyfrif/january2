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
 * The "matters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $vaultService = new Google_Service_Vault(...);
 *   $matters = $vaultService->matters;
 *  </code>
 */{/**
   * Adds an account as a matter collaborator. (matters.addPermissions)
   *
   * @param string $matterId The matter ID.
   * @param Google_Service_Vault_AddMatterPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_MatterPermission
   */(,,=()){=(,);=(,);(,(),);}/**
   * Closes the specified matter. Returns matter with updated state.
   * (matters.close)
   *
   * @param string $matterId The matter ID.
   * @param Google_Service_Vault_CloseMatterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_CloseMatterResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Counts the artifacts within the context of a matter and returns a detailed
   * breakdown of metrics. (matters.count)
   *
   * @param string $matterId The matter ID.
   * @param Google_Service_Vault_CountArtifactsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a new matter with the given name and description. The initial state
   * is open, and the owner is the method caller. Returns the created matter with
   * default view. (matters.create)
   *
   * @param Google_Service_Vault_Matter $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_Matter
   */(,=()){=();=(,);(,(),);}/**
   * Deletes the specified matter. Returns matter with updated state.
   * (matters.delete)
   *
   * @param string $matterId The matter ID
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_Matter
   */(,=()){=();=(,);(,(),);}/**
   * Gets the specified matter. (matters.get)
   *
   * @param string $matterId The matter ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Specifies which parts of the Matter to return in the
   * response.
   * @return Google_Service_Vault_Matter
   */(,=()){=();=(,);(,(),);}/**
   * Lists matters the user has access to. (matters.listMatters)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The number of matters to return in the response.
   * Default and maximum are 100.
   * @opt_param string pageToken The pagination token as returned in the response.
   * @opt_param string state If set, list only matters with that specific state.
   * The default is listing matters of all states.
   * @opt_param string view Specifies which parts of the matter to return in
   * response.
   * @return Google_Service_Vault_ListMattersResponse
   */(=()){=();=(,);(,(),);}/**
   * Removes an account as a matter collaborator. (matters.removePermissions)
   *
   * @param string $matterId The matter ID.
   * @param Google_Service_Vault_RemoveMatterPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_VaultEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Reopens the specified matter. Returns matter with updated state.
   * (matters.reopen)
   *
   * @param string $matterId The matter ID.
   * @param Google_Service_Vault_ReopenMatterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_ReopenMatterResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Undeletes the specified matter. Returns matter with updated state.
   * (matters.undelete)
   *
   * @param string $matterId The matter ID.
   * @param Google_Service_Vault_UndeleteMatterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_Matter
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates the specified matter. This updates only the name and description of
   * the matter, identified by matter ID. Changes to any other fields are ignored.
   * Returns the default view of the matter. (matters.update)
   *
   * @param string $matterId The matter ID.
   * @param Google_Service_Vault_Matter $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Vault_Matter
   */(,,=()){=(,);=(,);(,(),);}}