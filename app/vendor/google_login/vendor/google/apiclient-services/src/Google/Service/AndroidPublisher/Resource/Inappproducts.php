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
 * The "inappproducts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $inappproducts = $androidpublisherService->inappproducts;
 *  </code>
 */{/**
   * Deletes an in-app product (i.e. a managed product or a subscriptions).
   * (inappproducts.delete)
   *
   * @param string $packageName Package name of the app.
   * @param string $sku Unique identifier for the in-app product.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Gets an in-app product, which can be a managed product or a subscription.
   * (inappproducts.get)
   *
   * @param string $packageName Package name of the app.
   * @param string $sku Unique identifier for the in-app product.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_InAppProduct
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates an in-app product (i.e. a managed product or a subscriptions).
   * (inappproducts.insert)
   *
   * @param string $packageName Package name of the app.
   * @param Google_Service_AndroidPublisher_InAppProduct $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool autoConvertMissingPrices If true the prices for all regions
   * targeted by the parent app that don't have a price specified for this in-app
   * product will be auto converted to the target currency based on the default
   * price. Defaults to false.
   * @return Google_Service_AndroidPublisher_InAppProduct
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists all in-app products - both managed products and subscriptions.
   * (inappproducts.listInappproducts)
   *
   * @param string $packageName Package name of the app.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults How many results the list operation should
   * return.
   * @opt_param string startIndex The index of the first element to return.
   * @opt_param string token Pagination token. If empty, list starts at the first
   * product.
   * @return Google_Service_AndroidPublisher_InappproductsListResponse
   */(,=()){=();=(,);(,(),);}/**
   * Patches an in-app product (i.e. a managed product or a subscriptions).
   * (inappproducts.patch)
   *
   * @param string $packageName Package name of the app.
   * @param string $sku Unique identifier for the in-app product.
   * @param Google_Service_AndroidPublisher_InAppProduct $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool autoConvertMissingPrices If true the prices for all regions
   * targeted by the parent app that don't have a price specified for this in-app
   * product will be auto converted to the target currency based on the default
   * price. Defaults to false.
   * @return Google_Service_AndroidPublisher_InAppProduct
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Updates an in-app product (i.e. a managed product or a subscriptions).
   * (inappproducts.update)
   *
   * @param string $packageName Package name of the app.
   * @param string $sku Unique identifier for the in-app product.
   * @param Google_Service_AndroidPublisher_InAppProduct $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool autoConvertMissingPrices If true the prices for all regions
   * targeted by the parent app that don't have a price specified for this in-app
   * product will be auto converted to the target currency based on the default
   * price. Defaults to false.
   * @return Google_Service_AndroidPublisher_InAppProduct
   */(,,,=()){=(,,);=(,);(,(),);}}