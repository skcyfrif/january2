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
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $notebooksService = new Google_Service_AIPlatformNotebooks(...);
 *   $instances = $notebooksService->instances;
 *  </code>
 */{/**
   * Creates a new Instance in a given project and location. (instances.create)
   *
   * @param string $parent Required. Format:
   * `parent=projects/{project_id}/locations/{location}`
   * @param Google_Service_AIPlatformNotebooks_Instance $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string instanceId Required. User-defined unique ID of this
   * instance.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a single Instance. (instances.delete)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,=()){=();=(,);(,(),);}/**
   * Gets details of a single Instance. (instances.get)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Instance
   */(,=()){=();=(,);(,(),);}/**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (instances.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int options.requestedPolicyVersion Optional. The policy format
   * version to be returned. Valid values are 0, 1, and 3. Requests specifying an
   * invalid value will be rejected. Requests for policies with any conditional
   * bindings must specify version 3. Policies without any conditional bindings
   * may specify any valid value or leave the field unset. To learn which
   * resources support conditions in their IAM policies, see the [IAM
   * documentation](https://cloud.google.com/iam/help/conditions/resource-
   * policies).
   * @return Google_Service_AIPlatformNotebooks_Policy
   */(,=()){=();=(,);(,(),);}/**
   * Check if a notebook instance is healthy. (instances.getInstanceHealth)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_GetInstanceHealthResponse
   */(,=()){=();=(,);(,(),);}/**
   * Check if a notebook instance is upgradable. (instances.isUpgradeable)
   *
   * @param string $notebookInstance Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_IsInstanceUpgradeableResponse
   */(,=()){=();=(,);(,(),);}/**
   * Lists instances in a given project and location.
   * (instances.listProjectsLocationsInstances)
   *
   * @param string $parent Required. Format:
   * `parent=projects/{project_id}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum return size of the list call.
   * @opt_param string pageToken A previous returned page token that can be used
   * to continue listing from the last result.
   * @return Google_Service_AIPlatformNotebooks_ListInstancesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Registers an existing legacy notebook instance to the Notebooks API server.
   * Legacy instances are instances created with the legacy Compute Engine calls.
   * They are not manageable by the Notebooks API out of the box. This call makes
   * these instances manageable by the Notebooks API. (instances.register)
   *
   * @param string $parent Required. Format:
   * `parent=projects/{project_id}/locations/{location}`
   * @param Google_Service_AIPlatformNotebooks_RegisterInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Allows notebook instances to report their latest instance information to the
   * Notebooks API server. The server will merge the reported information to the
   * instance metadata store. Do not use this method directly. (instances.report)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param Google_Service_AIPlatformNotebooks_ReportInstanceInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Resets a notebook instance. (instances.reset)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param Google_Service_AIPlatformNotebooks_ResetInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates the guest accelerators of a single Instance.
   * (instances.setAccelerator)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param Google_Service_AIPlatformNotebooks_SetInstanceAcceleratorRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and
   * `PERMISSION_DENIED` errors. (instances.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_AIPlatformNotebooks_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Replaces all the labels of an Instance. (instances.setLabels)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param Google_Service_AIPlatformNotebooks_SetInstanceLabelsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates the machine type of a single Instance. (instances.setMachineType)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param Google_Service_AIPlatformNotebooks_SetInstanceMachineTypeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Starts a notebook instance. (instances.start)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param Google_Service_AIPlatformNotebooks_StartInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Stops a notebook instance. (instances.stop)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param Google_Service_AIPlatformNotebooks_StopInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * `NOT_FOUND` error. Note: This operation is designed to be used for building
   * permission-aware UIs and command-line tools, not for authorization checking.
   * This operation may "fail open" without warning.
   * (instances.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See the operation documentation for the appropriate value
   * for this field.
   * @param Google_Service_AIPlatformNotebooks_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_TestIamPermissionsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Upgrades a notebook instance to the latest version. (instances.upgrade)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param Google_Service_AIPlatformNotebooks_UpgradeInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Allows notebook instances to call this endpoint to upgrade themselves. Do not
   * use this method directly. (instances.upgradeInternal)
   *
   * @param string $name Required. Format:
   * `projects/{project_id}/locations/{location}/instances/{instance_id}`
   * @param Google_Service_AIPlatformNotebooks_UpgradeInstanceInternalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AIPlatformNotebooks_Operation
   */(,,=()){=(,);=(,);(,(),);}}