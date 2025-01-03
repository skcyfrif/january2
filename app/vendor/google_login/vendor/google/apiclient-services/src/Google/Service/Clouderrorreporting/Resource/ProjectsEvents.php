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
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $clouderrorreportingService = new Google_Service_Clouderrorreporting(...);
 *   $events = $clouderrorreportingService->events;
 *  </code>
 */{/**
   * Lists the specified events. (events.listProjectsEvents)
   *
   * @param string $projectName Required. The resource name of the Google Cloud
   * Platform project. Written as `projects/{projectID}`, where `{projectID}` is
   * the [Google Cloud Platform project
   * ID](https://support.google.com/cloud/answer/6158840). Example: `projects/my-
   * project-123`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string groupId Required. The group for which events shall be
   * returned.
   * @opt_param int pageSize Optional. The maximum number of results to return per
   * response.
   * @opt_param string pageToken Optional. A `next_page_token` provided by a
   * previous response.
   * @opt_param string serviceFilter.resourceType Optional. The exact value to
   * match against [`ServiceContext.resource_type`](/error-
   * reporting/reference/rest/v1beta1/ServiceContext#FIELDS.resource_type).
   * @opt_param string serviceFilter.service Optional. The exact value to match
   * against [`ServiceContext.service`](/error-
   * reporting/reference/rest/v1beta1/ServiceContext#FIELDS.service).
   * @opt_param string serviceFilter.version Optional. The exact value to match
   * against [`ServiceContext.version`](/error-
   * reporting/reference/rest/v1beta1/ServiceContext#FIELDS.version).
   * @opt_param string timeRange.period Restricts the query to the specified time
   * range.
   * @return Google_Service_Clouderrorreporting_ListEventsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Report an individual error event and record the event to a log. This endpoint
   * accepts **either** an OAuth token, **or** an [API
   * key](https://support.google.com/cloud/answer/6158862) for authentication. To
   * use an API key, append it to the URL as the value of a `key` parameter. For
   * example: `POST https://clouderrorreporting.googleapis.com/v1beta1/{projectNam
   * e}/events:report?key=123ABC456` **Note:** [Error Reporting](/error-reporting)
   * is a global service built on Cloud Logging and doesn't analyze logs stored in
   * regional log buckets or logs routed to other Google Cloud projects. For more
   * information, see [Using Error Reporting with regionalized logs](/error-
   * reporting/docs/regionalization). (events.report)
   *
   * @param string $projectName Required. The resource name of the Google Cloud
   * Platform project. Written as `projects/{projectId}`, where `{projectId}` is
   * the [Google Cloud Platform project
   * ID](https://support.google.com/cloud/answer/6158840). Example: // `projects
   * /my-project-123`.
   * @param Google_Service_Clouderrorreporting_ReportedErrorEvent $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Clouderrorreporting_ReportErrorEventResponse
   */(,,=()){=(,);=(,);(,(),);}}