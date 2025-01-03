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
 * The "orderreturns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $orderreturns = $contentService->orderreturns;
 *  </code>
 */{/**
   * Acks an order return in your Merchant Center account.
   * (orderreturns.acknowledge)
   *
   * @param string $merchantId The ID of the account that manages the order. This
   * cannot be a multi-client account.
   * @param string $returnId The ID of the return.
   * @param Google_Service_ShoppingContent_OrderreturnsAcknowledgeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrderreturnsAcknowledgeResponse
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Create return in your Merchant Center account.
   * (orderreturns.createorderreturn)
   *
   * @param string $merchantId The ID of the account that manages the order. This
   * cannot be a multi-client account.
   * @param Google_Service_ShoppingContent_OrderreturnsCreateOrderReturnRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrderreturnsCreateOrderReturnResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves an order return from your Merchant Center account.
   * (orderreturns.get)
   *
   * @param string $merchantId The ID of the account that manages the order. This
   * cannot be a multi-client account.
   * @param string $returnId Merchant order return ID generated by Google.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_MerchantOrderReturn
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists order returns in your Merchant Center account.
   * (orderreturns.listOrderreturns)
   *
   * @param string $merchantId The ID of the account that manages the order. This
   * cannot be a multi-client account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool acknowledged Obtains order returns that match the
   * acknowledgement status. When set to true, obtains order returns that have
   * been acknowledged. When false, obtains order returns that have not been
   * acknowledged. When not provided, obtains order returns regardless of their
   * acknowledgement status. We recommend using this filter set to `false`, in
   * conjunction with the `acknowledge` call, such that only un-acknowledged order
   * returns are returned.
   * @opt_param string createdEndDate Obtains order returns created before this
   * date (inclusively), in ISO 8601 format.
   * @opt_param string createdStartDate Obtains order returns created after this
   * date (inclusively), in ISO 8601 format.
   * @opt_param string googleOrderIds Obtains order returns with the specified
   * order ids. If this parameter is provided, createdStartDate, createdEndDate,
   * shipmentType, shipmentStatus, shipmentState and acknowledged parameters must
   * be not set. Note: if googleOrderId and shipmentTrackingNumber parameters are
   * provided, the obtained results will include all order returns that either
   * match the specified order id or the specified tracking number.
   * @opt_param string maxResults The maximum number of order returns to return in
   * the response, used for paging. The default value is 25 returns per page, and
   * the maximum allowed value is 250 returns per page.
   * @opt_param string orderBy Return the results in the specified order.
   * @opt_param string pageToken The token returned by the previous request.
   * @opt_param string shipmentStates Obtains order returns that match any
   * shipment state provided in this parameter. When this parameter is not
   * provided, order returns are obtained regardless of their shipment states.
   * @opt_param string shipmentStatus Obtains order returns that match any
   * shipment status provided in this parameter. When this parameter is not
   * provided, order returns are obtained regardless of their shipment statuses.
   * @opt_param string shipmentTrackingNumbers Obtains order returns with the
   * specified tracking numbers. If this parameter is provided, createdStartDate,
   * createdEndDate, shipmentType, shipmentStatus, shipmentState and acknowledged
   * parameters must be not set. Note: if googleOrderId and shipmentTrackingNumber
   * parameters are provided, the obtained results will include all order returns
   * that either match the specified order id or the specified tracking number.
   * @opt_param string shipmentTypes Obtains order returns that match any shipment
   * type provided in this parameter. When this parameter is not provided, order
   * returns are obtained regardless of their shipment types.
   * @return Google_Service_ShoppingContent_OrderreturnsListResponse
   */(,=()){=();=(,);(,(),);}/**
   * Processes return in your Merchant Center account. (orderreturns.process)
   *
   * @param string $merchantId The ID of the account that manages the order. This
   * cannot be a multi-client account.
   * @param string $returnId The ID of the return.
   * @param Google_Service_ShoppingContent_OrderreturnsProcessRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_OrderreturnsProcessResponse
   */(,,,=()){=(,,);=(,);(,(),);}}