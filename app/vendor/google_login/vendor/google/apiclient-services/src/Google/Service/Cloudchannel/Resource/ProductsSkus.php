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
 * The "skus" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudchannelService = new Google_Service_Cloudchannel(...);
 *   $skus = $cloudchannelService->skus;
 *  </code>
 */{/**
   * Lists the SKUs for a product the reseller is authorized to sell. Possible
   * Error Codes: * INVALID_ARGUMENT: Missing or invalid required parameters in
   * the request. (skus.listProductsSkus)
   *
   * @param string $parent Required. The resource name of the Product for which to
   * list SKUs. The parent takes the format: products/{product_id}. Supports
   * products/- to retrieve SKUs for all products.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string account Required. Resource name of the reseller. Format:
   * accounts/{account_id}.
   * @opt_param string languageCode Optional. The BCP-47 language code, such as
   * "en-US". If specified, the response will be localized to the corresponding
   * language code. Default is "en-US".
   * @opt_param int pageSize Optional. Requested page size. Server might return
   * fewer results than requested. If unspecified, at most 100 SKUs will be
   * returned. The maximum value is 1000; values above 1000 will be coerced to
   * 1000.
   * @opt_param string pageToken Optional. A token identifying a page of results,
   * if other than the first one. Optional.
   * @return Google_Service_Cloudchannel_GoogleCloudChannelV1ListSkusResponse
   */(,=()){=();=(,);(,(),);}}