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
 * The "pos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $pos = $contentService->pos;
 *  </code>
 */{/**
   * Batches multiple POS-related calls in a single request. (pos.custombatch)
   *
   * @param Google_Service_ShoppingContent_PosCustomBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_PosCustomBatchResponse
   */(,=()){=();=(,);(,(),);}/**
   * Deletes a store for the given merchant. (pos.delete)
   *
   * @param string $merchantId The ID of the POS or inventory data provider.
   * @param string $targetMerchantId The ID of the target merchant.
   * @param string $storeCode A store code that is unique per merchant.
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Retrieves information about the given store. (pos.get)
   *
   * @param string $merchantId The ID of the POS or inventory data provider.
   * @param string $targetMerchantId The ID of the target merchant.
   * @param string $storeCode A store code that is unique per merchant.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_PosStore
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Creates a store for the given merchant. (pos.insert)
   *
   * @param string $merchantId The ID of the POS or inventory data provider.
   * @param string $targetMerchantId The ID of the target merchant.
   * @param Google_Service_ShoppingContent_PosStore $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_PosStore
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Submit inventory for the given merchant. (pos.inventory)
   *
   * @param string $merchantId The ID of the POS or inventory data provider.
   * @param string $targetMerchantId The ID of the target merchant.
   * @param Google_Service_ShoppingContent_PosInventoryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_PosInventoryResponse
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists the stores of the target merchant. (pos.listPos)
   *
   * @param string $merchantId The ID of the POS or inventory data provider.
   * @param string $targetMerchantId The ID of the target merchant.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_PosListResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Submit a sale event for the given merchant. (pos.sale)
   *
   * @param string $merchantId The ID of the POS or inventory data provider.
   * @param string $targetMerchantId The ID of the target merchant.
   * @param Google_Service_ShoppingContent_PosSaleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_PosSaleResponse
   */(,,,=()){=(,,);=(,);(,(),);}}