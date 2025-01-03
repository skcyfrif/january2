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
 * The "registries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudiotService = new Google_Service_CloudIot(...);
 *   $registries = $cloudiotService->registries;
 *  </code>
 */{/**
   * Associates the device with the gateway. (registries.bindDeviceToGateway)
   *
   * @param string $parent Required. The name of the registry. For example,
   * `projects/example-project/locations/us-central1/registries/my-registry`.
   * @param Google_Service_CloudIot_BindDeviceToGatewayRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_BindDeviceToGatewayResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a device registry that contains devices. (registries.create)
   *
   * @param string $parent Required. The project and cloud region where this
   * device registry must be created. For example, `projects/example-
   * project/locations/us-central1`.
   * @param Google_Service_CloudIot_DeviceRegistry $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_DeviceRegistry
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a device registry configuration. (registries.delete)
   *
   * @param string $name Required. The name of the device registry. For example,
   * `projects/example-project/locations/us-central1/registries/my-registry`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_CloudiotEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a device registry configuration. (registries.get)
   *
   * @param string $name Required. The name of the device registry. For example,
   * `projects/example-project/locations/us-central1/registries/my-registry`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_DeviceRegistry
   */(,=()){=();=(,);(,(),);}/**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (registries.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_CloudIot_GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists device registries. (registries.listProjectsLocationsRegistries)
   *
   * @param string $parent Required. The project and cloud region path. For
   * example, `projects/example-project/locations/us-central1`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of registries to return in the
   * response. If this value is zero, the service will select a default size. A
   * call may return fewer objects than requested. A non-empty `next_page_token`
   * in the response indicates that more data is available.
   * @opt_param string pageToken The value returned by the last
   * `ListDeviceRegistriesResponse`; indicates that this is a continuation of a
   * prior `ListDeviceRegistries` call and the system should return the next page
   * of data.
   * @return Google_Service_CloudIot_ListDeviceRegistriesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a device registry configuration. (registries.patch)
   *
   * @param string $name The resource path name. For example, `projects/example-
   * project/locations/us-central1/registries/my-registry`.
   * @param Google_Service_CloudIot_DeviceRegistry $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. Only updates the `device_registry`
   * fields indicated by this mask. The field mask must not be empty, and it must
   * not contain fields that are immutable or only set by the server. Mutable top-
   * level fields: `event_notification_config`, `http_config`, `mqtt_config`, and
   * `state_notification_config`.
   * @return Google_Service_CloudIot_DeviceRegistry
   */(,,=()){=(,);=(,);(,(),);}/**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. (registries.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_CloudIot_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * NOT_FOUND error. (registries.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See the operation documentation for the appropriate value
   * for this field.
   * @param Google_Service_CloudIot_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_TestIamPermissionsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes the association between the device and the gateway.
   * (registries.unbindDeviceFromGateway)
   *
   * @param string $parent Required. The name of the registry. For example,
   * `projects/example-project/locations/us-central1/registries/my-registry`.
   * @param Google_Service_CloudIot_UnbindDeviceFromGatewayRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudIot_UnbindDeviceFromGatewayResponse
   */(,,=()){=(,);=(,);(,(),);}}