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
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $osloginService = new Google_Service_CloudOSLogin(...);
 *   $users = $osloginService->users;
 *  </code>
 */{/**
   * Retrieves the profile information used for logging in to a virtual machine on
   * Google Compute Engine. (users.getLoginProfile)
   *
   * @param string $name Required. The unique ID for the user in format
   * `users/{user}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId The project ID of the Google Cloud Platform
   * project.
   * @opt_param string systemId A system ID for filtering the results of the
   * request.
   * @return Google_Service_CloudOSLogin_LoginProfile
   */(,=()){=();=(,);(,(),);}/**
   * Adds an SSH public key and returns the profile information. Default POSIX
   * account information is set when no username and UID exist as part of the
   * login profile. (users.importSshPublicKey)
   *
   * @param string $parent Required. The unique ID for the user in format
   * `users/{user}`.
   * @param Google_Service_CloudOSLogin_SshPublicKey $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projectId The project ID of the Google Cloud Platform
   * project.
   * @return Google_Service_CloudOSLogin_ImportSshPublicKeyResponse
   */(,,=()){=(,);=(,);(,(),);}}