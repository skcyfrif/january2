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
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google_Service_Apigee(...);
 *   $revisions = $apigeeService->revisions;
 *  </code>
 */{/**
   * Deletes a shared flow and all associated policies, resources, and revisions.
   * You must undeploy the shared flow before deleting it. (revisions.delete)
   *
   * @param string $name Required. The name of the shared flow revision to delete.
   * Must be of the form: `organizations/{organization_id}/sharedflows/{shared_flo
   * w_id}/revisions/{revision_id}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1SharedFlowRevision
   */(,=()){=();=(,);(,(),);}/**
   * Gets a revision of a shared flow. If `format=bundle` is passed, it instead
   * outputs a shared flow revision as a ZIP-formatted bundle of code and config
   * files. (revisions.get)
   *
   * @param string $name Required. The name of the shared flow revision to get.
   * Must be of the form: `organizations/{organization_id}/sharedflows/{shared_flo
   * w_id}/revisions/{revision_id}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string format Specify `bundle` to export the contents of the
   * shared flow bundle. Otherwise, the bundle metadata is returned.
   * @return Google_Service_Apigee_GoogleApiHttpBody
   */(,=()){=();=(,);(,(),);}/**
   * Updates a shared flow revision. This operation is only allowed on revisions
   * which have never been deployed. After deployment a revision becomes
   * immutable, even if it becomes undeployed. The payload is a ZIP-formatted
   * shared flow. Content type must be either multipart/form-data or application
   * /octet-stream. (revisions.updateSharedFlowRevision)
   *
   * @param string $name Required. The name of the shared flow revision to update.
   * Must be of the form: `organizations/{organization_id}/sharedflows/{shared_flo
   * w_id}/revisions/{revision_id}`
   * @param Google_Service_Apigee_GoogleApiHttpBody $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool validate Ignored. All uploads are validated regardless of the
   * value of this field. It is kept for compatibility with existing APIs. Must be
   * `true` or `false` if provided.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1SharedFlowRevision
   */(,,=()){=(,);=(,);(,(),);}}