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
 * The "transferOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storagetransferService = new Google_Service_Storagetransfer(...);
 *   $transferOperations = $storagetransferService->transferOperations;
 *  </code>
 */{/**
   * Cancels a transfer. Use the transferOperations.get method to check if the
   * cancellation succeeded or if the operation completed despite the `cancel`
   * request. When you cancel an operation, the currently running transfer is
   * interrupted. For recurring transfer jobs, the next instance of the transfer
   * job will still run. For example, if your job is configured to run every day
   * at 1pm and you cancel Monday's operation at 1:05pm, Monday's transfer will
   * stop. However, a transfer job will still be attempted on Tuesday. This
   * applies only to currently running operations. If an operation is not
   * currently running, `cancel` does nothing. *Caution:* Canceling a transfer job
   * can leave your data in an unknown state. We recommend that you restore the
   * state at both the destination and the source after the `cancel` request
   * completes so that your data is in a consistent state. When you cancel a job,
   * the next job computes a delta of files and may repair any inconsistent state.
   * For instance, if you run a job every day, and today's job found 10 new files
   * and transferred five files before you canceled the job, tomorrow's transfer
   * operation will compute a new delta with the five files that were not copied
   * today plus any new files discovered tomorrow. (transferOperations.cancel)
   *
   * @param string $name The name of the operation resource to be cancelled.
   * @param Google_Service_Storagetransfer_CancelOperationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Storagetransfer_StoragetransferEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets the latest state of a long-running operation. Clients can use this
   * method to poll the operation result at intervals as recommended by the API
   * service. (transferOperations.get)
   *
   * @param string $name The name of the operation resource.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Storagetransfer_Operation
   */(,=()){=();=(,);(,(),);}/**
   * Lists transfer operations. Operations are ordered by their creation time in
   * reverse chronological order. (transferOperations.listTransferOperations)
   *
   * @param string $name Not used.
   * @param string $filter Required. A list of query parameters specified as JSON
   * text in the form of: `{"projectId":"my_project_id",
   * "jobNames":["jobid1","jobid2",...], "operationNames":["opid1","opid2",...],
   * "transferStatuses":["status1","status2",...]}` Since `jobNames`,
   * `operationNames`, and `transferStatuses` support multiple values, they must
   * be specified with array notation. `projectId` is required. `jobNames`,
   * `operationNames`, and `transferStatuses` are optional. The valid values for
   * `transferStatuses` are case-insensitive: IN_PROGRESS, PAUSED, SUCCESS,
   * FAILED, and ABORTED.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The list page size. The max allowed value is 256.
   * @opt_param string pageToken The list page token.
   * @return Google_Service_Storagetransfer_ListOperationsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Pauses a transfer operation. (transferOperations.pause)
   *
   * @param string $name Required. The name of the transfer operation.
   * @param Google_Service_Storagetransfer_PauseTransferOperationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Storagetransfer_StoragetransferEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Resumes a transfer operation that is paused. (transferOperations.resume)
   *
   * @param string $name Required. The name of the transfer operation.
   * @param Google_Service_Storagetransfer_ResumeTransferOperationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Storagetransfer_StoragetransferEmpty
   */(,,=()){=(,);=(,);(,(),);}}