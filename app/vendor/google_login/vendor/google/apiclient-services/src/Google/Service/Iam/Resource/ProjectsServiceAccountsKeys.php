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
 * The "keys" collection of methods.
 * Typical usage is:
 *  <code>
 *   $iamService = new Google_Service_Iam(...);
 *   $keys = $iamService->keys;
 *  </code>
 */{/**
   * Creates a ServiceAccountKey. (keys.create)
   *
   * @param string $name Required. The resource name of the service account in the
   * following format: `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`. Using
   * `-` as a wildcard for the `PROJECT_ID` will infer the project from the
   * account. The `ACCOUNT` value can be the `email` address or the `unique_id` of
   * the service account.
   * @param Google_Service_Iam_CreateServiceAccountKeyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Iam_ServiceAccountKey
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a ServiceAccountKey. Deleting a service account key does not revoke
   * short-lived credentials that have been issued based on the service account
   * key. (keys.delete)
   *
   * @param string $name Required. The resource name of the service account key in
   * the following format:
   * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}/keys/{key}`. Using `-` as a
   * wildcard for the `PROJECT_ID` will infer the project from the account. The
   * `ACCOUNT` value can be the `email` address or the `unique_id` of the service
   * account.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Iam_IamEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a ServiceAccountKey. (keys.get)
   *
   * @param string $name Required. The resource name of the service account key in
   * the following format:
   * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}/keys/{key}`. Using `-` as a
   * wildcard for the `PROJECT_ID` will infer the project from the account. The
   * `ACCOUNT` value can be the `email` address or the `unique_id` of the service
   * account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string publicKeyType The output format of the public key
   * requested. X509_PEM is the default output format.
   * @return Google_Service_Iam_ServiceAccountKey
   */(,=()){=();=(,);(,(),);}/**
   * Lists every ServiceAccountKey for a service account.
   * (keys.listProjectsServiceAccountsKeys)
   *
   * @param string $name Required. The resource name of the service account in the
   * following format: `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`. Using
   * `-` as a wildcard for the `PROJECT_ID`, will infer the project from the
   * account. The `ACCOUNT` value can be the `email` address or the `unique_id` of
   * the service account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string keyTypes Filters the types of keys the user wants to
   * include in the list response. Duplicate key types are not allowed. If no key
   * type is provided, all keys are returned.
   * @return Google_Service_Iam_ListServiceAccountKeysResponse
   */(,=()){=();=(,);(,(),);}/**
   * Creates a ServiceAccountKey, using a public key that you provide.
   * (keys.upload)
   *
   * @param string $name The resource name of the service account in the following
   * format: `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`. Using `-` as a
   * wildcard for the `PROJECT_ID` will infer the project from the account. The
   * `ACCOUNT` value can be the `email` address or the `unique_id` of the service
   * account.
   * @param Google_Service_Iam_UploadServiceAccountKeyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Iam_ServiceAccountKey
   */(,,=()){=(,);=(,);(,(),);}}