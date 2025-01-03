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
 * The "repricingrules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contentService = new Google_Service_ShoppingContent(...);
 *   $repricingrules = $contentService->repricingrules;
 *  </code>
 */{/**
   * Creates a repricing rule for your Merchant Center account.
   * (repricingrules.create)
   *
   * @param string $merchantId Required. The id of the merchant who owns the
   * repricing rule.
   * @param Google_Service_ShoppingContent_RepricingRule $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ruleId Required. The id of the rule to create.
   * @return Google_Service_ShoppingContent_RepricingRule
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a repricing rule in your Merchant Center account.
   * (repricingrules.delete)
   *
   * @param string $merchantId Required. The id of the merchant who owns the
   * repricing rule.
   * @param string $ruleId Required. The id of the rule to Delete.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Retrieves a repricing rule from your Merchant Center account.
   * (repricingrules.get)
   *
   * @param string $merchantId Required. The id of the merchant who owns the
   * repricing rule.
   * @param string $ruleId Required. The id of the rule to retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_RepricingRule
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists the repricing rules in your Merchant Center account.
   * (repricingrules.listRepricingrules)
   *
   * @param string $merchantId Required. The id of the merchant who owns the
   * repricing rule.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string countryCode CLDR country code (e.g. "US"), used as a filter
   * on repricing rules.
   * @opt_param string languageCode The two-letter ISO 639-1 language code
   * associated with the repricing rule, used as a filter.
   * @opt_param int pageSize The maximum number of repricing rules to return. The
   * service may return fewer than this value. If unspecified, at most 50 rules
   * will be returned. The maximum value is 1000; values above 1000 will be
   * coerced to 1000.
   * @opt_param string pageToken A page token, received from a previous
   * `ListRepricingRules` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListRepricingRules` must match
   * the call that provided the page token.
   * @return Google_Service_ShoppingContent_ListRepricingRulesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a repricing rule in your Merchant Center account. All mutable fields
   * will be overwritten in each update request. In each update, you must provide
   * all required mutable fields, or an error will be thrown. If you do not
   * provide an optional field in the update request, if that field currently
   * exists, it will be deleted from the rule. (repricingrules.patch)
   *
   * @param string $merchantId Required. The id of the merchant who owns the
   * repricing rule.
   * @param string $ruleId Required. The id of the rule to update.
   * @param Google_Service_ShoppingContent_RepricingRule $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ShoppingContent_RepricingRule
   */(,,,=()){=(,,);=(,);(,(),);}}