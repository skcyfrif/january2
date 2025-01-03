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
 * The "contactGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $peopleService = new Google_Service_PeopleService(...);
 *   $contactGroups = $peopleService->contactGroups;
 *  </code>
 */{/**
   * Get a list of contact groups owned by the authenticated user by specifying a
   * list of contact group resource names. (contactGroups.batchGet)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string groupFields Optional. A field mask to restrict which fields
   * on the group are returned. Defaults to `metadata`, `groupType`,
   * `memberCount`, and `name` if not set or set to empty. Valid fields are: *
   * clientData * groupType * memberCount * metadata * name
   * @opt_param int maxMembers Optional. Specifies the maximum number of members
   * to return for each group. Defaults to 0 if not set, which will return zero
   * members.
   * @opt_param string resourceNames Required. The resource names of the contact
   * groups to get.
   * @return Google_Service_PeopleService_BatchGetContactGroupsResponse
   */(=()){=();=(,);(,(),);}/**
   * Create a new contact group owned by the authenticated user.
   * (contactGroups.create)
   *
   * @param Google_Service_PeopleService_CreateContactGroupRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PeopleService_ContactGroup
   */(,=()){=();=(,);(,(),);}/**
   * Delete an existing contact group owned by the authenticated user by
   * specifying a contact group resource name. (contactGroups.delete)
   *
   * @param string $resourceName Required. The resource name of the contact group
   * to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool deleteContacts Optional. Set to true to also delete the
   * contacts in the specified group.
   * @return Google_Service_PeopleService_PeopleEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Get a specific contact group owned by the authenticated user by specifying a
   * contact group resource name. (contactGroups.get)
   *
   * @param string $resourceName Required. The resource name of the contact group
   * to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string groupFields Optional. A field mask to restrict which fields
   * on the group are returned. Defaults to `metadata`, `groupType`,
   * `memberCount`, and `name` if not set or set to empty. Valid fields are: *
   * clientData * groupType * memberCount * metadata * name
   * @opt_param int maxMembers Optional. Specifies the maximum number of members
   * to return. Defaults to 0 if not set, which will return zero members.
   * @return Google_Service_PeopleService_ContactGroup
   */(,=()){=();=(,);(,(),);}/**
   * List all contact groups owned by the authenticated user. Members of the
   * contact groups are not populated. (contactGroups.listContactGroups)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string groupFields Optional. A field mask to restrict which fields
   * on the group are returned. Defaults to `metadata`, `groupType`,
   * `memberCount`, and `name` if not set or set to empty. Valid fields are: *
   * clientData * groupType * memberCount * metadata * name
   * @opt_param int pageSize Optional. The maximum number of resources to return.
   * Valid values are between 1 and 1000, inclusive. Defaults to 30 if not set or
   * set to 0.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous call to
   * [ListContactGroups](/people/api/rest/v1/contactgroups/list). Requests the
   * next page of resources.
   * @opt_param string syncToken Optional. A sync token, returned by a previous
   * call to `contactgroups.list`. Only resources changed since the sync token was
   * created will be returned.
   * @return Google_Service_PeopleService_ListContactGroupsResponse
   */(=()){=();=(,);(,(),);}/**
   * Update the name of an existing contact group owned by the authenticated user.
   * (contactGroups.update)
   *
   * @param string $resourceName The resource name for the contact group, assigned
   * by the server. An ASCII string, in the form of
   * `contactGroups/{contact_group_id}`.
   * @param Google_Service_PeopleService_UpdateContactGroupRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PeopleService_ContactGroup
   */(,,=()){=(,);=(,);(,(),);}}