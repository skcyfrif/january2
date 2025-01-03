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
 * The "apiproducts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apigeeService = new Google_Service_Apigee(...);
 *   $apiproducts = $apigeeService->apiproducts;
 *  </code>
 */{/**
   * Updates or creates API product attributes. This API **replaces** the current
   * list of attributes with the attributes specified in the request body. In this
   * way, you can update existing attributes, add new attributes, or delete
   * existing attributes by omitting them from the request body. **Note**: OAuth
   * access tokens and Key Management Service (KMS) entities (apps, developers,
   * and API products) are cached for 180 seconds (current default). Any custom
   * attributes associated with entities also get cached for at least 180 seconds
   * after entity is accessed during runtime. In this case, the `ExpiresIn`
   * element on the OAuthV2 policy won't be able to expire an access token in less
   * than 180 seconds. (apiproducts.attributes)
   *
   * @param string $name Required. Name of the API product. Use the following
   * structure in your request: `organizations/{org}/apiproducts/{apiproduct}`
   * @param Google_Service_Apigee_GoogleCloudApigeeV1Attributes $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1Attributes
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates an API product in an organization. You create API products after you
   * have proxied backend services using API proxies. An API product is a
   * collection of API resources combined with quota settings and metadata that
   * you can use to deliver customized and productized API bundles to your
   * developer community. This metadata can include: - Scope - Environments - API
   * proxies - Extensible profile API products enable you repackage APIs on-the-
   * fly, without having to do any additional coding or configuration. Apigee
   * recommends that you start with a simple API product including only required
   * elements. You then provision credentials to apps to enable them to start
   * testing your APIs. After you have authentication and authorization working
   * against a simple API product, you can iterate to create finer grained API
   * products, defining different sets of API resources for each API product.
   * **WARNING:** - If you don't specify an API proxy in the request body, *any*
   * app associated with the product can make calls to *any* API in your entire
   * organization. - If you don't specify an environment in the request body, the
   * product allows access to all environments. For more information, see What is
   * an API product? (apiproducts.create)
   *
   * @param string $parent Required. Name of the organization in which the API
   * product will be created. Use the following structure in your request:
   * `organizations/{org}`
   * @param Google_Service_Apigee_GoogleCloudApigeeV1ApiProduct $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1ApiProduct
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes an API product from an organization. Deleting an API product causes
   * app requests to the resource URIs defined in the API product to fail. Ensure
   * that you create a new API product to serve existing apps, unless your
   * intention is to disable access to the resources defined in the API product.
   * The API product name required in the request URL is the internal name of the
   * product, not the display name. While they may be the same, it depends on
   * whether the API product was created via the UI or the API. View the list of
   * API products to verify the internal name. (apiproducts.delete)
   *
   * @param string $name Required. Name of the API product. Use the following
   * structure in your request: `organizations/{org}/apiproducts/{apiproduct}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1ApiProduct
   */(,=()){=();=(,);(,(),);}/**
   * Gets configuration details for an API product. The API product name required
   * in the request URL is the internal name of the product, not the display name.
   * While they may be the same, it depends on whether the API product was created
   * via the UI or the API. View the list of API products to verify the internal
   * name. (apiproducts.get)
   *
   * @param string $name Required. Name of the API product. Use the following
   * structure in your request: `organizations/{org}/apiproducts/{apiproduct}`
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1ApiProduct
   */(,=()){=();=(,);(,(),);}/**
   * Lists all API product names for an organization. Filter the list by passing
   * an `attributename` and `attibutevalue`. The limit on the number of API
   * products returned by the API is 1000. You can paginate the list of API
   * products returned using the `startKey` and `count` query parameters.
   * (apiproducts.listOrganizationsApiproducts)
   *
   * @param string $parent Required. Name of the organization. Use the following
   * structure in your request: `organizations/{org}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string attributename Name of the attribute used to filter the
   * search.
   * @opt_param string attributevalue Value of the attribute used to filter the
   * search.
   * @opt_param string count Enter the number of API products you want returned in
   * the API call. The limit is 1000.
   * @opt_param bool expand Flag that specifies whether to expand the results. Set
   * to `true` to get expanded details about each API.
   * @opt_param string startKey Gets a list of API products starting with a
   * specific API product in the list. For example, if you're returning 50 API
   * products at a time (using the `count` query parameter), you can view products
   * 50-99 by entering the name of the 50th API product in the first API (without
   * using `startKey`). Product name is case sensitive.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1ListApiProductsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates an existing API product. You must include all required values,
   * whether or not you are updating them, as well as any optional values that you
   * are updating. The API product name required in the request URL is the
   * internal name of the product, not the Display Name. While they may be the
   * same, it depends on whether the API product was created via UI or API. View
   * the list of API products to identify their internal names.
   * (apiproducts.update)
   *
   * @param string $name Required. Name of the API product. Use the following
   * structure in your request: `organizations/{org}/apiproducts/{apiproduct}`
   * @param Google_Service_Apigee_GoogleCloudApigeeV1ApiProduct $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Apigee_GoogleCloudApigeeV1ApiProduct
   */(,,=()){=(,);=(,);(,(),);}}