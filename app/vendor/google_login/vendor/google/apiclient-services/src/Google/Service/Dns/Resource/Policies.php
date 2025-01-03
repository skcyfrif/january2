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
 * The "policies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dnsService = new Google_Service_Dns(...);
 *   $policies = $dnsService->policies;
 *  </code>
 */{/**
   * Create a new Policy (policies.create)
   *
   * @param string $project Identifies the project addressed by this request.
   * @param Google_Service_Dns_Policy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientOperationId For mutating operation requests only. An
   * optional identifier specified by the client. Must be unique for operation
   * resources in the Operations collection.
   * @return Google_Service_Dns_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Delete a previously created Policy. Will fail if the policy is still being
   * referenced by a network. (policies.delete)
   *
   * @param string $project Identifies the project addressed by this request.
   * @param string $policy User given friendly name of the policy addressed by
   * this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientOperationId For mutating operation requests only. An
   * optional identifier specified by the client. Must be unique for operation
   * resources in the Operations collection.
   */(,,=()){=(,);=(,);(,());}/**
   * Fetch the representation of an existing Policy. (policies.get)
   *
   * @param string $project Identifies the project addressed by this request.
   * @param string $policy User given friendly name of the policy addressed by
   * this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientOperationId For mutating operation requests only. An
   * optional identifier specified by the client. Must be unique for operation
   * resources in the Operations collection.
   * @return Google_Service_Dns_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Enumerate all Policies associated with a project. (policies.listPolicies)
   *
   * @param string $project Identifies the project addressed by this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults Optional. Maximum number of results to be returned.
   * If unspecified, the server will decide how many results to return.
   * @opt_param string pageToken Optional. A tag returned by a previous list
   * request that was truncated. Use this parameter to continue a previous list
   * request.
   * @return Google_Service_Dns_PoliciesListResponse
   */(,=()){=();=(,);(,(),);}/**
   * Apply a partial update to an existing Policy. (policies.patch)
   *
   * @param string $project Identifies the project addressed by this request.
   * @param string $policy User given friendly name of the policy addressed by
   * this request.
   * @param Google_Service_Dns_Policy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientOperationId For mutating operation requests only. An
   * optional identifier specified by the client. Must be unique for operation
   * resources in the Operations collection.
   * @return Google_Service_Dns_PoliciesPatchResponse
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Update an existing Policy. (policies.update)
   *
   * @param string $project Identifies the project addressed by this request.
   * @param string $policy User given friendly name of the policy addressed by
   * this request.
   * @param Google_Service_Dns_Policy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clientOperationId For mutating operation requests only. An
   * optional identifier specified by the client. Must be unique for operation
   * resources in the Operations collection.
   * @return Google_Service_Dns_PoliciesUpdateResponse
   */(,,,=()){=(,,);=(,);(,(),);}}