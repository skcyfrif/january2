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
 * The "keystores" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google_Service_Apigee(...);
 *   $keystores = $apigeeService->keystores;
 *  </code>
 */{/**
   * Creates a keystore or truststore. - Keystore: Contains certificates and their
   * associated keys. - Truststore: Contains trusted certificates used to validate
   * a server's certificate. These certificates are typically self-signed
   * certificates or certificates that are not signed by a trusted CA.
   * (keystores.create)
   *
   * @param string $parent Required. Name of the environment in which to create
   * the keystore. Use the following format in your request:
   * `organizations/{org}/environments/{env}`
   * @param Google_Service_Apigee_GoogleCloudApigeeV1Keystore $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string name Optional. Name of the keystore. Overrides the value in
   * Keystore.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1Keystore
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a keystore or truststore. (keystores.delete)
   *
   * @param string $name Required. Name of the keystore. Use the following format
   * in your request:
   * `organizations/{org}/environments/{env}/keystores/{keystore}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1Keystore
   */(,=()){=();=(,);(,(),);}/**
   * Gets a keystore or truststore. (keystores.get)
   *
   * @param string $name Required. Name of the keystore. Use the following format
   * in your request:
   * `organizations/{org}/environments/{env}/keystores/{keystore}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1Keystore
   */(,=()){=();=(,);(,(),);}}