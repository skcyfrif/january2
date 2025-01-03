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
 * The "workItems" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataflowService = new Google_Service_Dataflow(...);
 *   $workItems = $dataflowService->workItems;
 *  </code>
 */{/**
   * Leases a dataflow WorkItem to run. (workItems.lease)
   *
   * @param string $projectId Identifies the project this worker belongs to.
   * @param string $jobId Identifies the workflow job this worker belongs to.
   * @param Google_Service_Dataflow_LeaseWorkItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataflow_LeaseWorkItemResponse
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Reports the status of dataflow WorkItems leased by a worker.
   * (workItems.reportStatus)
   *
   * @param string $projectId The project which owns the WorkItem's job.
   * @param string $jobId The job which the WorkItem is part of.
   * @param Google_Service_Dataflow_ReportWorkItemStatusRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataflow_ReportWorkItemStatusResponse
   */(,,,=()){=(,,);=(,);(,(),);}}