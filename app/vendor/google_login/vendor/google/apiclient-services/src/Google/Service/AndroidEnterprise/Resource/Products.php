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
 * The "products" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidenterpriseService = new Google_Service_AndroidEnterprise(...);
 *   $products = $androidenterpriseService->products;
 *  </code>
 */{/**
   * Approves the specified product and the relevant app permissions, if any. The
   * maximum number of products that you can approve per enterprise customer is
   * 1,000. To learn how to use managed Google Play to design and create a store
   * layout to display approved products to your users, see Store Layout Design.
   * (products.approve)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $productId The ID of the product.
   * @param Google_Service_AndroidEnterprise_ProductsApproveRequest $postBody
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Generates a URL that can be rendered in an iframe to display the permissions
   * (if any) of a product. An enterprise admin must view these permissions and
   * accept them on behalf of their organization in order to approve that product.
   * Admins should accept the displayed permissions by interacting with a separate
   * UI element in the EMM console, which in turn should trigger the use of this
   * URL as the approvalUrlInfo.approvalUrl property in a Products.approve call to
   * approve the product. This URL can only be used to display permissions for up
   * to 1 day. (products.generateApprovalUrl)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $productId The ID of the product.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string languageCode The BCP 47 language code used for permission
   * names and descriptions in the returned iframe, for instance "en-US".
   * @return Google_Service_AndroidEnterprise_ProductsGenerateApprovalUrlResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves details of a product for display to an enterprise admin.
   * (products.get)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $productId The ID of the product, e.g.
   * "app:com.google.android.gm".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The BCP47 tag for the user's preferred language
   * (e.g. "en-US", "de").
   * @return Google_Service_AndroidEnterprise_Product
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves the schema that defines the configurable properties for this
   * product. All products have a schema, but this schema may be empty if no
   * managed configurations have been defined. This schema can be used to populate
   * a UI that allows an admin to configure the product. To apply a managed
   * configuration based on the schema obtained using this API, see Managed
   * Configurations through Play. (products.getAppRestrictionsSchema)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $productId The ID of the product.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language The BCP47 tag for the user's preferred language
   * (e.g. "en-US", "de").
   * @return Google_Service_AndroidEnterprise_AppRestrictionsSchema
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves the Android app permissions required by this app.
   * (products.getPermissions)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $productId The ID of the product.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidEnterprise_ProductPermissions
   */(,,=()){=(,);=(,);(,(),);}/**
   * Finds approved products that match a query, or all approved products if there
   * is no query. (products.listProducts)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool approved Specifies whether to search among all products
   * (false) or among only products that have been approved (true). Only "true" is
   * supported, and should be specified.
   * @opt_param string language The BCP47 tag for the user's preferred language
   * (e.g. "en-US", "de"). Results are returned in the language best matching the
   * preferred language.
   * @opt_param string maxResults Defines how many results the list operation
   * should return. The default number depends on the resource collection.
   * @opt_param string query The search query as typed in the Google Play store
   * search box. If omitted, all approved apps will be returned (using the
   * pagination parameters), including apps that are not available in the store
   * (e.g. unpublished apps).
   * @opt_param string token Defines the token of the page to return, usually
   * taken from TokenPagination. This can only be used if token paging is enabled.
   * @return Google_Service_AndroidEnterprise_ProductsListResponse
   */(,=()){=();=(,);(,(),);}/**
   * Unapproves the specified product (and the relevant app permissions, if any)
   * (products.unapprove)
   *
   * @param string $enterpriseId The ID of the enterprise.
   * @param string $productId The ID of the product.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}}