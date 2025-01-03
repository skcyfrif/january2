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
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mirrorService = new Google_Service_Mirror(...);
 *   $subscriptions = $mirrorService->subscriptions;
 *  </code>
 */{/**
   * Deletes a subscription. (subscriptions.delete)
   *
   * @param string $id The ID of the subscription.
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Creates a new subscription. (subscriptions.insert)
   *
   * @param Google_Service_Mirror_Subscription $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Mirror_Subscription
   */(,=()){=();=(,);(,(),);}/**
   * Retrieves a list of subscriptions for the authenticated user and service.
   * (subscriptions.listSubscriptions)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_Mirror_SubscriptionsListResponse
   */(=()){=();=(,);(,(),);}/**
   * Updates an existing subscription in place. (subscriptions.update)
   *
   * @param string $id The ID of the subscription.
   * @param Google_Service_Mirror_Subscription $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Mirror_Subscription
   */(,,=()){=(,);=(,);(,(),);}}