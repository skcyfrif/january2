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
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $products = $contentService->products;
 *  </code>
 */{/**
   * Retrieves, inserts, and deletes multiple products in a single request.
   * (products.custombatch)
   *
   * @param Google_Service_ShoppingContent_ProductsCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_ProductsCustomBatchResponse
   */(,=()){=();=(,);(,(),);}/**
   * Deletes a product from your Merchant Center account. (products.delete)
   *
   * @param string $merchantId The ID of the account that contains the product.
   * This account cannot be a multi-client account.
   * @param string $productId The REST ID of the product.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string feedId The Content API Supplemental Feed ID.
   */(,,=()){=(,);=(,);(,());}/**
   * Retrieves a product from your Merchant Center account. (products.get)
   *
   * @param string $merchantId The ID of the account that contains the product.
   * This account cannot be a multi-client account.
   * @param string $productId The REST ID of the product.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_Product
   */(,,=()){=(,);=(,);(,(),);}/**
   * Uploads a product to your Merchant Center account. If an item with the same
   * channel, contentLanguage, offerId, and targetCountry already exists, this
   * method updates that entry. (products.insert)
   *
   * @param string $merchantId The ID of the account that contains the product.
   * This account cannot be a multi-client account.
   * @param Google_Service_ShoppingContent_Product $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string feedId The Content API Supplemental Feed ID.
   * @return Google_Service_ShoppingContent_Product
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists the products in your Merchant Center account. The response might
   * contain fewer items than specified by maxResults. Rely on nextPageToken to
   * determine if there are more items to be requested. (products.listProducts)
   *
   * @param string $merchantId The ID of the account that contains the products.
   * This account cannot be a multi-client account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults The maximum number of products to return in the
   * response, used for paging.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_ShoppingContent_ProductsListResponse
   */(,=()){=();=(,);(,(),);}}