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
 * The "entries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $loggingService = new Google_Service_Logging(...);
 *   $entries = $loggingService->entries;
 *  </code>
 */{/**
   * Lists log entries. Use this method to retrieve log entries that originated
   * from a project/folder/organization/billing account. For ways to export log
   * entries, see Exporting Logs (https://cloud.google.com/logging/docs/export).
   * (entries.listEntries)
   *
   * @param Google_Service_Logging_ListLogEntriesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_ListLogEntriesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Streaming read of log entries as they are ingested. Until the stream is
   * terminated, it will continue reading logs. (entries.tail)
   *
   * @param Google_Service_Logging_TailLogEntriesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_TailLogEntriesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Writes log entries to Logging. This API method is the only way to send log
   * entries to Logging. This method is used, directly or indirectly, by the
   * Logging agent (fluentd) and all logging libraries configured to use Logging.
   * A single request may contain log entries for a maximum of 1000 different
   * resources (projects, organizations, billing accounts or folders)
   * (entries.write)
   *
   * @param Google_Service_Logging_WriteLogEntriesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_WriteLogEntriesResponse
   */(,=()){=();=(,);(,(),);}}