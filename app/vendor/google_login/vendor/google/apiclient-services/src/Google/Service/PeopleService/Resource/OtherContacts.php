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
 * The "otherContacts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $peopleService = new Google_Service_PeopleService(...);
 *   $otherContacts = $peopleService->otherContacts;
 *  </code>
 */{/**
   * Copies an "Other contact" to a new contact in the user's "myContacts" group
   * (otherContacts.copyOtherContactToMyContactsGroup)
   *
   * @param string $resourceName Required. The resource name of the "Other
   * contact" to copy.
   * @param Google_Service_PeopleService_CopyOtherContactToMyContactsGroupRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PeopleService_Person
   */(,,=()){=(,);=(,);(,(),);}/**
   * List all "Other contacts", that is contacts that are not in a contact group.
   * "Other contacts" are typically auto created contacts from interactions.
   * (otherContacts.listOtherContacts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The number of "Other contacts" to include
   * in the response. Valid values are between 1 and 1000, inclusive. Defaults to
   * 100 if not set or set to 0.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListOtherContacts` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListOtherContacts` must match
   * the call that provided the page token.
   * @opt_param string readMask Required. A field mask to restrict which fields on
   * each person are returned. Multiple fields can be specified by separating them
   * with commas. Valid values are: * emailAddresses * names * phoneNumbers
   * @opt_param bool requestSyncToken Optional. Whether the response should
   * include `next_sync_token`, which can be used to get all changes since the
   * last request. For subsequent sync requests use the `sync_token` param
   * instead. Initial sync requests that specify `request_sync_token` have an
   * additional rate limit.
   * @opt_param string syncToken Optional. A sync token, received from a previous
   * `ListOtherContacts` call. Provide this to retrieve only the resources changed
   * since the last request. Sync requests that specify `sync_token` have an
   * additional rate limit. When syncing, all other parameters provided to
   * `ListOtherContacts` must match the call that provided the sync token.
   * @return Google_Service_PeopleService_ListOtherContactsResponse
   */(=()){=();=(,);(,(),);}}