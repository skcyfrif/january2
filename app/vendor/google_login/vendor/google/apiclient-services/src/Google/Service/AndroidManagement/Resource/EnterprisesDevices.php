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
 *   $androidmanagementService = new Google_Service_AndroidManagement(...);
 *   $devices = $androidmanagementService->devices;
 *  </code>
 */{/**
   * Deletes a device. This operation wipes the device. (devices.delete)
   *
   * @param string $name The name of the device in the form
   * enterprises/{enterpriseId}/devices/{deviceId}.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string wipeDataFlags Optional flags that control the device wiping
   * behavior.
   * @opt_param string wipeReasonMessage Optional. A short message displayed to
   * the user before wiping the work profile on personal devices. This has no
   * effect on company owned devices. The maximum message length is 200
   * characters.
   * @return Google_Service_AndroidManagement_AndroidmanagementEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a device. (devices.get)
   *
   * @param string $name The name of the device in the form
   * enterprises/{enterpriseId}/devices/{deviceId}.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidManagement_Device
   */(,=()){=();=(,);(,(),);}/**
   * Issues a command to a device. The Operation resource returned contains a
   * Command in its metadata field. Use the get operation method to get the status
   * of the command. (devices.issueCommand)
   *
   * @param string $name The name of the device in the form
   * enterprises/{enterpriseId}/devices/{deviceId}.
   * @param Google_Service_AndroidManagement_Command $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidManagement_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists devices for a given enterprise. (devices.listEnterprisesDevices)
   *
   * @param string $parent The name of the enterprise in the form
   * enterprises/{enterpriseId}.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The requested page size. The actual page size may be
   * fixed to a min or max value.
   * @opt_param string pageToken A token identifying a page of results returned by
   * the server.
   * @return Google_Service_AndroidManagement_ListDevicesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a device. (devices.patch)
   *
   * @param string $name The name of the device in the form
   * enterprises/{enterpriseId}/devices/{deviceId}.
   * @param Google_Service_AndroidManagement_Device $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The field mask indicating the fields to update.
   * If not set, all modifiable fields will be modified.
   * @return Google_Service_AndroidManagement_Device
   */(,,=()){=(,);=(,);(,(),);}}