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
 * The "people" collection of methods.
 * Typical usage is:
 *  <code>
 *   $peopleService = new Google_Service_PeopleService(...);
 *   $people = $peopleService->people;
 *  </code>
 */{/**
   * Create a new contact and return the person resource for that contact. The
   * request returns a 400 error if more than one field is specified on a field
   * that is a singleton for contact sources: * biographies * birthdays * genders
   * * names (people.createContact)
   *
   * @param Google_Service_PeopleService_Person $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string personFields Required. A field mask to restrict which
   * fields on each person are returned. Multiple fields can be specified by
   * separating them with commas. Defaults to all fields if not set. Valid values
   * are: * addresses * ageRanges * biographies * birthdays * calendarUrls *
   * clientData * coverPhotos * emailAddresses * events * externalIds * genders *
   * imClients * interests * locales * locations * memberships * metadata *
   * miscKeywords * names * nicknames * occupations * organizations * phoneNumbers
   * * photos * relations * sipAddresses * skills * urls * userDefined
   * @opt_param string sources Optional. A mask of what source types to return.
   * Defaults to READ_SOURCE_TYPE_CONTACT and READ_SOURCE_TYPE_PROFILE if not set.
   * @return Google_Service_PeopleService_Person
   */(,=()){=();=(,);(,(),);}/**
   * Delete a contact person. Any non-contact data will not be deleted.
   * (people.deleteContact)
   *
   * @param string $resourceName Required. The resource name of the contact to
   * delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_PeopleService_PeopleEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Delete a contact's photo. (people.deleteContactPhoto)
   *
   * @param string $resourceName Required. The resource name of the contact whose
   * photo will be deleted.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string personFields Optional. A field mask to restrict which
   * fields on the person are returned. Multiple fields can be specified by
   * separating them with commas. Defaults to empty if not set, which will skip
   * the post mutate get. Valid values are: * addresses * ageRanges * biographies
   * * birthdays * calendarUrls * clientData * coverPhotos * emailAddresses *
   * events * externalIds * genders * imClients * interests * locales * locations
   * * memberships * metadata * miscKeywords * names * nicknames * occupations *
   * organizations * phoneNumbers * photos * relations * sipAddresses * skills *
   * urls * userDefined
   * @opt_param string sources Optional. A mask of what source types to return.
   * Defaults to READ_SOURCE_TYPE_CONTACT and READ_SOURCE_TYPE_PROFILE if not set.
   * @return Google_Service_PeopleService_DeleteContactPhotoResponse
   */(,=()){=();=(,);(,(),);}/**
   * Provides information about a person by specifying a resource name. Use
   * `people/me` to indicate the authenticated user. The request returns a 400
   * error if 'personFields' is not specified. (people.get)
   *
   * @param string $resourceName Required. The resource name of the person to
   * provide information about. - To get information about the authenticated user,
   * specify `people/me`. - To get information about a google account, specify
   * `people/{account_id}`. - To get information about a contact, specify the
   * resource name that identifies the contact as returned by
   * [`people.connections.list`](/people/api/rest/v1/people.connections/list).
   * @param array $optParams Optional parameters.
   *
   * @opt_param string personFields Required. A field mask to restrict which
   * fields on the person are returned. Multiple fields can be specified by
   * separating them with commas. Valid values are: * addresses * ageRanges *
   * biographies * birthdays * calendarUrls * clientData * coverPhotos *
   * emailAddresses * events * externalIds * genders * imClients * interests *
   * locales * locations * memberships * metadata * miscKeywords * names *
   * nicknames * occupations * organizations * phoneNumbers * photos * relations *
   * sipAddresses * skills * urls * userDefined
   * @opt_param string requestMask.includeField Required. Comma-separated list of
   * person fields to be included in the response. Each path should start with
   * `person.`: for example, `person.names` or `person.photos`.
   * @opt_param string sources Optional. A mask of what source types to return.
   * Defaults to READ_SOURCE_TYPE_PROFILE and READ_SOURCE_TYPE_CONTACT if not set.
   * @return Google_Service_PeopleService_Person
   */(,=()){=();=(,);(,(),);}/**
   * Provides information about a list of specific people by specifying a list of
   * requested resource names. Use `people/me` to indicate the authenticated user.
   * The request returns a 400 error if 'personFields' is not specified.
   * (people.getBatchGet)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string personFields Required. A field mask to restrict which
   * fields on each person are returned. Multiple fields can be specified by
   * separating them with commas. Valid values are: * addresses * ageRanges *
   * biographies * birthdays * calendarUrls * clientData * coverPhotos *
   * emailAddresses * events * externalIds * genders * imClients * interests *
   * locales * locations * memberships * metadata * miscKeywords * names *
   * nicknames * occupations * organizations * phoneNumbers * photos * relations *
   * sipAddresses * skills * urls * userDefined
   * @opt_param string requestMask.includeField Required. Comma-separated list of
   * person fields to be included in the response. Each path should start with
   * `person.`: for example, `person.names` or `person.photos`.
   * @opt_param string resourceNames Required. The resource names of the people to
   * provide information about. It's repeatable. The URL query parameter should be
   * resourceNames==&... - To get information about the authenticated user,
   * specify `people/me`. - To get information about a google account, specify
   * `people/{account_id}`. - To get information about a contact, specify the
   * resource name that identifies the contact as returned by
   * [`people.connections.list`](/people/api/rest/v1/people.connections/list). You
   * can include up to 50 resource names in one request.
   * @opt_param string sources Optional. A mask of what source types to return.
   * Defaults to READ_SOURCE_TYPE_CONTACT and READ_SOURCE_TYPE_PROFILE if not set.
   * @return Google_Service_PeopleService_GetPeopleResponse
   */(=()){=();=(,);(,(),);}/**
   * Provides a list of domain profiles and domain contacts in the authenticated
   * user's domain directory. (people.listDirectoryPeople)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string mergeSources Optional. Additional data to merge into the
   * directory sources if they are connected through verified join keys such as
   * email addresses or phone numbers.
   * @opt_param int pageSize Optional. The number of people to include in the
   * response. Valid values are between 1 and 1000, inclusive. Defaults to 100 if
   * not set or set to 0.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListDirectoryPeople` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListDirectoryPeople` must
   * match the call that provided the page token.
   * @opt_param string readMask Required. A field mask to restrict which fields on
   * each person are returned. Multiple fields can be specified by separating them
   * with commas. Valid values are: * addresses * ageRanges * biographies *
   * birthdays * calendarUrls * clientData * coverPhotos * emailAddresses * events
   * * externalIds * genders * imClients * interests * locales * locations *
   * memberships * metadata * miscKeywords * names * nicknames * occupations *
   * organizations * phoneNumbers * photos * relations * sipAddresses * skills *
   * urls * userDefined
   * @opt_param bool requestSyncToken Optional. Whether the response should
   * include `next_sync_token`, which can be used to get all changes since the
   * last request. For subsequent sync requests use the `sync_token` param
   * instead.
   * @opt_param string sources Required. Directory sources to return.
   * @opt_param string syncToken Optional. A sync token, received from a previous
   * `ListDirectoryPeople` call. Provide this to retrieve only the resources
   * changed since the last request. When syncing, all other parameters provided
   * to `ListDirectoryPeople` must match the call that provided the sync token.
   * @return Google_Service_PeopleService_ListDirectoryPeopleResponse
   */(=()){=();=(,);(,(),);}/**
   * Provides a list of domain profiles and domain contacts in the authenticated
   * user's domain directory that match the search query.
   * (people.searchDirectoryPeople)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string mergeSources Optional. Additional data to merge into the
   * directory sources if they are connected through verified join keys such as
   * email addresses or phone numbers.
   * @opt_param int pageSize Optional. The number of people to include in the
   * response. Valid values are between 1 and 500, inclusive. Defaults to 100 if
   * not set or set to 0.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `SearchDirectoryPeople` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `SearchDirectoryPeople`
   * must match the call that provided the page token.
   * @opt_param string query Required. Prefix query that matches fields in the
   * person. Does NOT use the read_mask for determining what fields to match.
   * @opt_param string readMask Required. A field mask to restrict which fields on
   * each person are returned. Multiple fields can be specified by separating them
   * with commas. Valid values are: * addresses * ageRanges * biographies *
   * birthdays * calendarUrls * clientData * coverPhotos * emailAddresses * events
   * * externalIds * genders * imClients * interests * locales * locations *
   * memberships * metadata * miscKeywords * names * nicknames * occupations *
   * organizations * phoneNumbers * photos * relations * sipAddresses * skills *
   * urls * userDefined
   * @opt_param string sources Required. Directory sources to return.
   * @return Google_Service_PeopleService_SearchDirectoryPeopleResponse
   */(=()){=();=(,);(,(),);}/**
   * Update contact data for an existing contact person. Any non-contact data will
   * not be modified. Any non-contact data in the person to update will be
   * ignored. All fields specified in the `update_mask` will be replaced. The
   * server returns a 400 error if `person.metadata.sources` is not specified for
   * the contact to be updated or if there is no contact source. The server
   * returns a 400 error with reason `"failedPrecondition"` if
   * `person.metadata.sources.etag` is different than the contact's etag, which
   * indicates the contact has changed since its data was read. Clients should get
   * the latest person and merge their updates into the latest person. The server
   * returns a 400 error if `memberships` are being updated and there are no
   * contact group memberships specified on the person. The server returns a 400
   * error if more than one field is specified on a field that is a singleton for
   * contact sources: * biographies * birthdays * genders * names
   * (people.updateContact)
   *
   * @param string $resourceName The resource name for the person, assigned by the
   * server. An ASCII string with a max length of 27 characters, in the form of
   * `people/{person_id}`.
   * @param Google_Service_PeopleService_Person $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string personFields Optional. A field mask to restrict which
   * fields on each person are returned. Multiple fields can be specified by
   * separating them with commas. Defaults to all fields if not set. Valid values
   * are: * addresses * ageRanges * biographies * birthdays * calendarUrls *
   * clientData * coverPhotos * emailAddresses * events * externalIds * genders *
   * imClients * interests * locales * locations * memberships * metadata *
   * miscKeywords * names * nicknames * occupations * organizations * phoneNumbers
   * * photos * relations * sipAddresses * skills * urls * userDefined
   * @opt_param string sources Optional. A mask of what source types to return.
   * Defaults to READ_SOURCE_TYPE_CONTACT and READ_SOURCE_TYPE_PROFILE if not set.
   * @opt_param string updatePersonFields Required. A field mask to restrict which
   * fields on the person are updated. Multiple fields can be specified by
   * separating them with commas. All updated fields will be replaced. Valid
   * values are: * addresses * biographies * birthdays * calendarUrls * clientData
   * * emailAddresses * events * externalIds * genders * imClients * interests *
   * locales * locations * memberships * miscKeywords * names * nicknames *
   * occupations * organizations * phoneNumbers * relations * sipAddresses * urls
   * * userDefined
   * @return Google_Service_PeopleService_Person
   */(,,=()){=(,);=(,);(,(),);}/**
   * Update a contact's photo. (people.updateContactPhoto)
   *
   * @param string $resourceName Required. Person resource name
   * @param Google_Service_PeopleService_UpdateContactPhotoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_PeopleService_UpdateContactPhotoResponse
   */(,,=()){=(,);=(,);(,(),);}}