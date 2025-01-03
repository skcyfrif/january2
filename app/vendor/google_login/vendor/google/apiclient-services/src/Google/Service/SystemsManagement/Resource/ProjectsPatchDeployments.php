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
 * The "patchDeployments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $osconfigService = new Google_Service_SystemsManagement(...);
 *   $patchDeployments = $osconfigService->patchDeployments;
 *  </code>
 */{/**
   * Create an OS Config patch deployment. (patchDeployments.create)
   *
   * @param string $parent Required. The project to apply this patch deployment to
   * in the form `projects`.
   * @param Google_Service_SystemsManagement_PatchDeployment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string patchDeploymentId Required. A name for the patch deployment
   * in the project. When creating a name the following rules apply: * Must
   * contain only lowercase letters, numbers, and hyphens. * Must start with a
   * letter. * Must be between 1-63 characters. * Must end with a number or a
   * letter. * Must be unique within the project.
   * @return Google_Service_SystemsManagement_PatchDeployment
   */(,,=()){=(,);=(,);(,(),);}/**
   * Delete an OS Config patch deployment. (patchDeployments.delete)
   *
   * @param string $name Required. The resource name of the patch deployment in
   * the form `projects/patchDeployments`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_SystemsManagement_OsconfigEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Get an OS Config patch deployment. (patchDeployments.get)
   *
   * @param string $name Required. The resource name of the patch deployment in
   * the form `projects/patchDeployments`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_SystemsManagement_PatchDeployment
   */(,=()){=();=(,);(,(),);}/**
   * Get a page of OS Config patch deployments.
   * (patchDeployments.listProjectsPatchDeployments)
   *
   * @param string $parent Required. The resource name of the parent in the form
   * `projects`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of patch deployments to
   * return. Default is 100.
   * @opt_param string pageToken Optional. A pagination token returned from a
   * previous call to ListPatchDeployments that indicates where this listing
   * should continue from.
   * @return Google_Service_SystemsManagement_ListPatchDeploymentsResponse
   */(,=()){=();=(,);(,(),);}}