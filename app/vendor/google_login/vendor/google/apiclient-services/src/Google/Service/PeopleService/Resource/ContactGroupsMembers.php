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
 * The "members" collection of methods.
 * Typical usage is:
 *  <code>
 *   $peopleService = new Google_Service_PeopleService(...);
 *   $members = $peopleService->members;
 *  </code>
 */{/**
   * Modify the members of a contact group owned by the authenticated user. The
   * only system contact groups that can have members added are
   * `contactGroups/myContacts` and `contactGroups/starred`. Other system contact
   * groups are deprecated and can only have contacts removed. (members.modify)
   *
   * @param string $resourceName Required. The resource name of the contact group
   * to modify.
   * @param Google_Service_PeopleService_ModifyContactGroupMembersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PeopleService_ModifyContactGroupMembersResponse
   */(,,=()){=(,);=(,);(,(),);}}