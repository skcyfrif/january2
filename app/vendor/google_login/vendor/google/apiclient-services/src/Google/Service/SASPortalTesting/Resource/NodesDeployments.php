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
 * The "deployments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $prod_tt_sasportalService = new Google_Service_SASPortalTesting(...);
 *   $deployments = $prod_tt_sasportalService->deployments;
 *  </code>
 */{/**
   * Deletes a deployment. (deployments.delete)
   *
   * @param string $name Required. The name of the deployment.
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Returns a requested deployment. (deployments.get)
   *
   * @param string $name Required. The name of the deployment.
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalDeployment
   */(,=()){=();=(,);(,(),);}/**
   * Lists deployments. (deployments.listNodesDeployments)
   *
   * @param string $parent Required. The parent resource name, for example,
   * "nodes/1", customer/1/nodes/2.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter The filter expression. The filter should have the
   * following format: "DIRECT_CHILDREN" or format: "direct_children". The filter
   * is case insensitive. If empty, then no deployments are filtered.
   * @opt_param int pageSize The maximum number of deployments to return in the
   * response.
   * @opt_param string pageToken A pagination token returned from a previous call
   * to ListDeployments that indicates where this listing should continue from.
   * @return Google_Service_SASPortalTesting_SasPortalListDeploymentsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Moves a deployment under another node or customer. (deployments.move)
   *
   * @param string $name Required. The name of the deployment to move.
   * @param Google_Service_SASPortalTesting_SasPortalMoveDeploymentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SASPortalTesting_SasPortalOperation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates an existing deployment. (deployments.patch)
   *
   * @param string $name Output only. Resource name.
   * @param Google_Service_SASPortalTesting_SasPortalDeployment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Fields to be updated.
   * @return Google_Service_SASPortalTesting_SasPortalDeployment
   */(,,=()){=(,);=(,);(,(),);}}