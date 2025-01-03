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
 * The "mutes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $reportcardService = new Google_Service_Reportcard(...);
 *   $mutes = $reportcardService->mutes;
 *  </code>
 */{/**
   * Deletes a Mute. (mutes.delete)
   *
   * @param string $mutesId The Mute id.
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Gets a Mute by id. (mutes.get)
   *
   * @param string $mutesId The Mute id.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reportcard_Mute
   */(,=()){=();=(,);(,(),);}/**
   * Inserts a new Mute. (mutes.insert)
   *
   * @param Google_Service_Reportcard_Mute $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reportcard_Mute
   */(,=()){=();=(,);(,(),);}/**
   * Returns a list of Mutes, maybe filtering by 'consumer' or 'groupKey',
   * 'sourceKey' and 'supplier'. (mutes.listMutes)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string consumer Only return Mutes for this consumer
   * @opt_param string groupKey Only return Mutes created with this group_key.
   * Supplier and source_key must also be set.
   * @opt_param string sourceKey Only return Mutes created with this source_key.
   * Supplier must also be set.
   * @opt_param string supplier Only return Mutes created by this supplier.
   * @return Google_Service_Reportcard_MutesListResponse
   */(=()){=();=(,);(,(),);}/**
   * Updates an existing Mute. This method supports patch semantics. (mutes.patch)
   *
   * @param string $mutesId The Mute id.
   * @param Google_Service_Reportcard_Mute $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reportcard_Mute
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates an existing Mute. (mutes.update)
   *
   * @param string $mutesId The Mute id.
   * @param Google_Service_Reportcard_Mute $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Reportcard_Mute
   */(,,=()){=(,);=(,);(,(),);}}