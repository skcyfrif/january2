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
 * The "objectAccessControls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storageService = new Google_Service_Storage(...);
 *   $objectAccessControls = $storageService->objectAccessControls;
 *  </code>
 */{/**
   * Permanently deletes the ACL entry for the specified entity on the specified
   * object. (objectAccessControls.delete)
   *
   * @param string $bucket Name of a bucket.
   * @param string $object Name of the object. For information about how to URL
   * encode object names to be path safe, see Encoding URI Path Parts.
   * @param string $entity The entity holding the permission. Can be user-userId,
   * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
   * allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation If present, selects a specific revision of this
   * object (as opposed to the latest version, the default).
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Returns the ACL entry for the specified entity on the specified object.
   * (objectAccessControls.get)
   *
   * @param string $bucket Name of a bucket.
   * @param string $object Name of the object. For information about how to URL
   * encode object names to be path safe, see Encoding URI Path Parts.
   * @param string $entity The entity holding the permission. Can be user-userId,
   * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
   * allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation If present, selects a specific revision of this
   * object (as opposed to the latest version, the default).
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   * @return Google_Service_Storage_ObjectAccessControl
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Creates a new ACL entry on the specified object.
   * (objectAccessControls.insert)
   *
   * @param string $bucket Name of a bucket.
   * @param string $object Name of the object. For information about how to URL
   * encode object names to be path safe, see Encoding URI Path Parts.
   * @param Google_Service_Storage_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation If present, selects a specific revision of this
   * object (as opposed to the latest version, the default).
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   * @return Google_Service_Storage_ObjectAccessControl
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Retrieves ACL entries on the specified object.
   * (objectAccessControls.listObjectAccessControls)
   *
   * @param string $bucket Name of a bucket.
   * @param string $object Name of the object. For information about how to URL
   * encode object names to be path safe, see Encoding URI Path Parts.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation If present, selects a specific revision of this
   * object (as opposed to the latest version, the default).
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   * @return Google_Service_Storage_ObjectAccessControls
   */(,,=()){=(,);=(,);(,(),);}/**
   * Patches an ACL entry on the specified object. (objectAccessControls.patch)
   *
   * @param string $bucket Name of a bucket.
   * @param string $object Name of the object. For information about how to URL
   * encode object names to be path safe, see Encoding URI Path Parts.
   * @param string $entity The entity holding the permission. Can be user-userId,
   * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
   * allAuthenticatedUsers.
   * @param Google_Service_Storage_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation If present, selects a specific revision of this
   * object (as opposed to the latest version, the default).
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   * @return Google_Service_Storage_ObjectAccessControl
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Updates an ACL entry on the specified object. (objectAccessControls.update)
   *
   * @param string $bucket Name of a bucket.
   * @param string $object Name of the object. For information about how to URL
   * encode object names to be path safe, see Encoding URI Path Parts.
   * @param string $entity The entity holding the permission. Can be user-userId,
   * user-emailAddress, group-groupId, group-emailAddress, allUsers, or
   * allAuthenticatedUsers.
   * @param Google_Service_Storage_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation If present, selects a specific revision of this
   * object (as opposed to the latest version, the default).
   * @opt_param string provisionalUserProject The project to be billed for this
   * request if the target bucket is requester-pays bucket.
   * @opt_param string userProject The project to be billed for this request.
   * Required for Requester Pays buckets.
   * @return Google_Service_Storage_ObjectAccessControl
   */(,,,,=()){=(,,,);=(,);(,(),);}}