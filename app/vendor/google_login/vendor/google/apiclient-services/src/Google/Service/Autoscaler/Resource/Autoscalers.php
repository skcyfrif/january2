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
 * The "autoscalers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $autoscalerService = new Google_Service_Autoscaler(...);
 *   $autoscalers = $autoscalerService->autoscalers;
 *  </code>
 */{/**
   * Deletes the specified Autoscaler resource. (autoscalers.delete)
   *
   * @param string $project Project ID of Autoscaler resource.
   * @param string $zone Zone name of Autoscaler resource.
   * @param string $autoscaler Name of the Autoscaler resource.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Autoscaler_Operation
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Gets the specified Autoscaler resource. (autoscalers.get)
   *
   * @param string $project Project ID of Autoscaler resource.
   * @param string $zone Zone name of Autoscaler resource.
   * @param string $autoscaler Name of the Autoscaler resource.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Autoscaler_Autoscaler
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Adds new Autoscaler resource. (autoscalers.insert)
   *
   * @param string $project Project ID of Autoscaler resource.
   * @param string $zone Zone name of Autoscaler resource.
   * @param Google_Service_Autoscaler_Autoscaler $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Autoscaler_Operation
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists all Autoscaler resources in this zone. (autoscalers.listAutoscalers)
   *
   * @param string $project Project ID of Autoscaler resource.
   * @param string $zone Zone name of Autoscaler resource.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * @opt_param string maxResults
   * @opt_param string pageToken
   * @return Google_Service_Autoscaler_AutoscalerListResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Update the entire content of the Autoscaler resource. This method supports
   * patch semantics. (autoscalers.patch)
   *
   * @param string $project Project ID of Autoscaler resource.
   * @param string $zone Zone name of Autoscaler resource.
   * @param string $autoscaler Name of the Autoscaler resource.
   * @param Google_Service_Autoscaler_Autoscaler $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Autoscaler_Operation
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Update the entire content of the Autoscaler resource. (autoscalers.update)
   *
   * @param string $project Project ID of Autoscaler resource.
   * @param string $zone Zone name of Autoscaler resource.
   * @param string $autoscaler Name of the Autoscaler resource.
   * @param Google_Service_Autoscaler_Autoscaler $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Autoscaler_Operation
   */(,,,,=()){=(,,,);=(,);(,(),);}}