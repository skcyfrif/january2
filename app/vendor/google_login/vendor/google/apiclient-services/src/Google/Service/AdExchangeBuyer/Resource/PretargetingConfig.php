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
 * The "pretargetingConfig" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyerService = new Google_Service_AdExchangeBuyer(...);
 *   $pretargetingConfig = $adexchangebuyerService->pretargetingConfig;
 *  </code>
 */{/**
   * Deletes an existing pretargeting config. (pretargetingConfig.delete)
   *
   * @param string $accountId The account id to delete the pretargeting config
   * for.
   * @param string $configId The specific id of the configuration to delete.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Gets a specific pretargeting configuration (pretargetingConfig.get)
   *
   * @param string $accountId The account id to get the pretargeting config for.
   * @param string $configId The specific id of the configuration to retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Inserts a new pretargeting configuration. (pretargetingConfig.insert)
   *
   * @param string $accountId The account id to insert the pretargeting config
   * for.
   * @param Google_Service_AdExchangeBuyer_PretargetingConfig $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_PretargetingConfig
   */(,,=()){=(,);=(,);(,(),);}/**
   * Retrieves a list of the authenticated user's pretargeting configurations.
   * (pretargetingConfig.listPretargetingConfig)
   *
   * @param string $accountId The account id to get the pretargeting configs for.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_PretargetingConfigList
   */(,=()){=();=(,);(,(),);}/**
   * Updates an existing pretargeting config. This method supports patch
   * semantics. (pretargetingConfig.patch)
   *
   * @param string $accountId The account id to update the pretargeting config
   * for.
   * @param string $configId The specific id of the configuration to update.
   * @param Google_Service_AdExchangeBuyer_PretargetingConfig $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_PretargetingConfig
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Updates an existing pretargeting config. (pretargetingConfig.update)
   *
   * @param string $accountId The account id to update the pretargeting config
   * for.
   * @param string $configId The specific id of the configuration to update.
   * @param Google_Service_AdExchangeBuyer_PretargetingConfig $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyer_PretargetingConfig
   */(,,,=()){=(,,);=(,);(,(),);}}