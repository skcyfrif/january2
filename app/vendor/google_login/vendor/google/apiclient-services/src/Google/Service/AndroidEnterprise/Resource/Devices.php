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
 * The "devices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $devices = $androidenterpriseService->devices;
 *  </code>
 */{/**
   * Uploads a report containing any changes in app states on the device since the
   * last report was generated. You can call this method up to 3 times every 24
   * hours for a given device. If you exceed the quota, then the Google Play EMM
   * API returns HTTP 429 Too Many Requests. (devices.forceReportUpload)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The ID of the device.
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Retrieves the details of a device. (devices.get)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The ID of the device.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_Device
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Retrieves whether a device's access to Google services is enabled or
   * disabled. The device state takes effect only if enforcing EMM policies on
   * Android devices is enabled in the Google Admin Console. Otherwise, the device
   * state is ignored and all devices are allowed access to Google services. This
   * is only supported for Google-managed users. (devices.getState)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The ID of the device.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_DeviceState
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Retrieves the IDs of all of a user's devices. (devices.listDevices)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_DevicesListResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Sets whether a device's access to Google services is enabled or disabled. The
   * device state takes effect only if enforcing EMM policies on Android devices
   * is enabled in the Google Admin Console. Otherwise, the device state is
   * ignored and all devices are allowed access to Google services. This is only
   * supported for Google-managed users. (devices.setState)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The ID of the device.
   * @param Google_Service_AndroidEnterprise_DeviceState $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_DeviceState
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Updates the device policy. To ensure the policy is properly enforced, you
   * need to prevent unmanaged accounts from accessing Google Play by setting the
   * allowed_accounts in the managed configuration for the Google Play package.
   * See restrict accounts in Google Play. (devices.update)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param string $deviceId The ID of the device.
   * @param Google_Service_AndroidEnterprise_Device $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Mask that identifies which fields to update. If
   * not set, all modifiable fields will be modified. When set in a query
   * parameter, this field should be specified as updateMask=,,...
   * @return Google_Service_AndroidEnterprise_Device
   */(,,,,=()){=(,,,);=(,);(,(),);}}