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
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $users = $androidenterpriseService->users;
 *  </code>
 */{/**
   * Deleted an EMM-managed user. (users.delete)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Generates an authentication token which the device policy client can use to
   * provision the given EMM-managed user account on a device. The generated token
   * is single-use and expires after a few minutes. You can provision a maximum of
   * 10 devices per user. This call only works with EMM-managed accounts.
   * (users.generateAuthenticationToken)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_AuthenticationToken
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves a user's details. (users.get)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_User
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves the set of products a user is entitled to access.
   * (users.getAvailableProductSet)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ProductSet
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a new EMM-managed user. The Users resource passed in the body of the
   * request should include an accountIdentifier and an accountType. If a
   * corresponding user already exists with the same account identifier, the user
   * will be updated with the resource. In this case only the displayName field
   * can be changed. (users.insert)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param Google_Service_AndroidEnterprise_User $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_User
   */(,,=()){=(,);=(,);(,(),);}/**
   * Looks up a user by primary email address. This is only supported for Google-
   * managed users. Lookup of the id is not needed for EMM-managed users because
   * the id is already returned in the result of the Users.insert call.
   * (users.listUsers)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $email Required. The exact primary email address of the user to
   * look up.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_UsersListResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Revokes access to all devices currently provisioned to the user. The user
   * will no longer be able to use the managed Play store on any of their managed
   * devices. This call only works with EMM-managed accounts.
   * (users.revokeDeviceAccess)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Modifies the set of products that a user is entitled to access (referred to
   * as *whitelisted* products). Only products that are approved or products that
   * were previously approved (products with revoked approval) can be whitelisted.
   * (users.setAvailableProductSet)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param Google_Service_AndroidEnterprise_ProductSet $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ProductSet
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Updates the details of an EMM-managed user. Can be used with EMM-managed
   * users only (not Google managed users). Pass the new details in the Users
   * resource in the request body. Only the displayName field can be changed.
   * Other fields must either be unset or have the currently active value.
   * (users.update)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $userId The ID of the user.
   * @param Google_Service_AndroidEnterprise_User $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_User
   */(,,,=()){=(,,);=(,);(,(),);}}