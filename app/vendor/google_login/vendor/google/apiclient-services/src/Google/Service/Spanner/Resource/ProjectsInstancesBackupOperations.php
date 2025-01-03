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
 * The "backupOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $spannerService = new Google_Service_Spanner(...);
 *   $backupOperations = $spannerService->backupOperations;
 *  </code>
 */{/**
   * Lists the backup long-running operations in the given instance. A backup
   * operation has a name of the form `projects//instances//backups//operations/`.
   * The long-running operation metadata field type `metadata.type_url` describes
   * the type of the metadata. Operations returned include those that have
   * completed/failed/canceled within the last 7 days, and pending operations.
   * Operations returned are ordered by
   * `operation.metadata.value.progress.start_time` in descending order starting
   * from the most recently started operation.
   * (backupOperations.listProjectsInstancesBackupOperations)
   *
   * @param string $parent Required. The instance of the backup operations. Values
   * are of the form `projects//instances/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter An expression that filters the list of returned
   * backup operations. A filter expression consists of a field name, a comparison
   * operator, and a value for filtering. The value must be a string, a number, or
   * a boolean. The comparison operator must be one of: `<`, `>`, `<=`, `>=`,
   * `!=`, `=`, or `:`. Colon `:` is the contains operator. Filter rules are not
   * case sensitive. The following fields in the operation are eligible for
   * filtering: * `name` - The name of the long-running operation * `done` - False
   * if the operation is in progress, else true. * `metadata.@type` - the type of
   * metadata. For example, the type string for CreateBackupMetadata is
   * `type.googleapis.com/google.spanner.admin.database.v1.CreateBackupMetadata`.
   * * `metadata.` - any field in metadata.value. * `error` - Error associated
   * with the long-running operation. * `response.@type` - the type of response. *
   * `response.` - any field in response.value. You can combine multiple
   * expressions by enclosing each expression in parentheses. By default,
   * expressions are combined with AND logic, but you can specify AND, OR, and NOT
   * logic explicitly. Here are a few examples: * `done:true` - The operation is
   * complete. * `metadata.database:prod` - The database the backup was taken from
   * has a name containing the string "prod". * `(metadata.@type=type.googleapis.c
   * om/google.spanner.admin.database.v1.CreateBackupMetadata) AND` \
   * `(metadata.name:howl) AND` \ `(metadata.progress.start_time <
   * \"2018-03-28T14:50:00Z\") AND` \ `(error:*)` - Returns operations where: *
   * The operation's metadata type is CreateBackupMetadata. * The backup name
   * contains the string "howl". * The operation started before
   * 2018-03-28T14:50:00Z. * The operation resulted in an error.
   * @opt_param int pageSize Number of operations to be returned in the response.
   * If 0 or less, defaults to the server's maximum allowed page size.
   * @opt_param string pageToken If non-empty, `page_token` should contain a
   * next_page_token from a previous ListBackupOperationsResponse to the same
   * `parent` and with the same `filter`.
   * @return Google_Service_Spanner_ListBackupOperationsResponse
   */(,=()){=();=(,);(,(),);}}