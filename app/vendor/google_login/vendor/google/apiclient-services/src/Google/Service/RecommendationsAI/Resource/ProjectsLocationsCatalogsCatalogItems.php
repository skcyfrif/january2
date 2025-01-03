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
 * The "catalogItems" collection of methods.
 * Typical usage is:
 *  <code>
 *   $recommendationengineService = new Google_Service_RecommendationsAI(...);
 *   $catalogItems = $recommendationengineService->catalogItems;
 *  </code>
 */{/**
   * Creates a catalog item. (catalogItems.create)
   *
   * @param string $parent Required. The parent catalog resource name, such as
   * "projects/locations/global/catalogs/default_catalog".
   * @param Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1CatalogItem $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1CatalogItem
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a catalog item. (catalogItems.delete)
   *
   * @param string $name Required. Full resource name of catalog item, such as "pr
   * ojects/locations/global/catalogs/default_catalog/catalogItems/some_catalog_it
   * em_id".
   * @param array $optParams Optional parameters.
   * @return Google_Service_RecommendationsAI_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a specific catalog item. (catalogItems.get)
   *
   * @param string $name Required. Full resource name of catalog item, such as "pr
   * ojects/locations/global/catalogs/default_catalog/catalogitems/some_catalog_it
   * em_id".
   * @param array $optParams Optional parameters.
   * @return Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1CatalogItem
   */(,=()){=();=(,);(,(),);}/**
   * Bulk import of multiple catalog items. Request processing may be synchronous.
   * No partial updating supported. Non-existing items will be created.
   * Operation.response is of type ImportResponse. Note that it is possible for a
   * subset of the items to be successfully updated. (catalogItems.import)
   *
   * @param string $parent Required.
   * "projects/1234/locations/global/catalogs/default_catalog" If no updateMask is
   * specified, requires catalogItems.create permission. If updateMask is
   * specified, requires catalogItems.update permission.
   * @param Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ImportCatalogItemsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_RecommendationsAI_GoogleLongrunningOperation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets a list of catalog items.
   * (catalogItems.listProjectsLocationsCatalogsCatalogItems)
   *
   * @param string $parent Required. The parent catalog resource name, such as
   * "projects/locations/global/catalogs/default_catalog".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter to apply on the list results.
   * @opt_param int pageSize Optional. Maximum number of results to return per
   * page. If zero, the service will choose a reasonable default.
   * @opt_param string pageToken Optional. The previous
   * ListCatalogItemsResponse.next_page_token.
   * @return Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1ListCatalogItemsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a catalog item. Partial updating is supported. Non-existing items
   * will be created. (catalogItems.patch)
   *
   * @param string $name Required. Full resource name of catalog item, such as "pr
   * ojects/locations/global/catalogs/default_catalog/catalogItems/some_catalog_it
   * em_id".
   * @param Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1CatalogItem $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Indicates which fields in the provided
   * 'item' to update. If not set, will by default update all fields.
   * @return Google_Service_RecommendationsAI_GoogleCloudRecommendationengineV1beta1CatalogItem
   */(,,=()){=(,);=(,);(,(),);}}