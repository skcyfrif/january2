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
 * The "iosAppDataStreams" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsadminService = new Google_Service_GoogleAnalyticsAdmin(...);
 *   $iosAppDataStreams = $analyticsadminService->iosAppDataStreams;
 *  </code>
 */{/**
   * Creates an iOS app stream with the specified location and attributes. Note
   * that an iOS app stream must be linked to a Firebase app to receive traffic.
   * To create a working app stream, make sure your property is linked to a
   * Firebase project. Then, use the Firebase API to create a Firebase app, which
   * will also create an appropriate data stream in Analytics (may take up to 24
   * hours). (iosAppDataStreams.create)
   *
   * @param string $parent Required. The parent resource where this ios app data
   * stream will be created. Format: properties/123
   * @param Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaIosAppDataStream $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaIosAppDataStream
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes an iOS app stream on a property. (iosAppDataStreams.delete)
   *
   * @param string $name Required. The name of the iOS app data stream to delete.
   * Format: properties/{property_id}/iosAppDataStreams/{stream_id} Example:
   * "properties/123/iosAppDataStreams/456"
   * @param array $optParams Optional parameters.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Lookup for a single IosAppDataStream (iosAppDataStreams.get)
   *
   * @param string $name Required. The name of the iOS app data stream to lookup.
   * Format: properties/{property_id}/iosAppDataStreams/{stream_id} Example:
   * "properties/123/iosAppDataStreams/456"
   * @param array $optParams Optional parameters.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaIosAppDataStream
   */(,=()){=();=(,);(,(),);}/**
   * Returns child iOS app data streams under the specified parent property. iOS
   * app data streams will be excluded if the caller does not have access. Returns
   * an empty list if no relevant iOS app data streams are found.
   * (iosAppDataStreams.listPropertiesIosAppDataStreams)
   *
   * @param string $parent Required. The name of the parent property. For example,
   * to list results of app streams under the property with Id 123:
   * "properties/123"
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of resources to return. If
   * unspecified, at most 50 resources will be returned. The maximum value is 200;
   * (higher values will be coerced to the maximum)
   * @opt_param string pageToken A page token, received from a previous
   * `ListIosAppDataStreams` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListIosAppDataStreams`
   * must match the call that provided the page token.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaListIosAppDataStreamsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates an iOS app stream on a property. (iosAppDataStreams.patch)
   *
   * @param string $name Output only. Resource name of this Data Stream. Format:
   * properties/{property_id}/iosAppDataStreams/{stream_id} Example:
   * "properties/1000/iosAppDataStreams/2000"
   * @param Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaIosAppDataStream $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The list of fields to be updated.
   * Omitted fields will not be updated. To replace the entire entity, use one
   * path with the string "*" to match all fields.
   * @return Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaIosAppDataStream
   */(,,=()){=(,);=(,);(,(),);}}