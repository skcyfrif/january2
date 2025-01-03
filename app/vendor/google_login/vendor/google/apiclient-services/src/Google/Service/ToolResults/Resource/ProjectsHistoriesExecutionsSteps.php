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
 * The "steps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $toolresultsService = new Google_Service_ToolResults(...);
 *   $steps = $toolresultsService->steps;
 *  </code>
 */{/**
   * Lists accessibility clusters for a given Step May return any of the following
   * canonical error codes: - PERMISSION_DENIED - if the user is not authorized to
   * read project - INVALID_ARGUMENT - if the request is malformed -
   * FAILED_PRECONDITION - if an argument in the request happens to be invalid;
   * e.g. if the locale format is incorrect - NOT_FOUND - if the containing Step
   * does not exist (steps.accessibilityClusters)
   *
   * @param string $name A full resource name of the step. For example, projects
   * /my-project/histories/bh.1234567890abcdef/executions/
   * 1234567890123456789/steps/bs.1234567890abcdef Required.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale The accepted format is the canonical Unicode format
   * with hyphen as a delimiter. Language must be lowercase, Language Script -
   * Capitalized, Region - UPPERCASE. See
   * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier for details.
   * Required.
   * @return Google_Service_ToolResults_ListStepAccessibilityClustersResponse
   */(,=()){=();=(,);(,(),);}/**
   * Creates a Step. The returned Step will have the id set. May return any of the
   * following canonical error codes: - PERMISSION_DENIED - if the user is not
   * authorized to write to project - INVALID_ARGUMENT - if the request is
   * malformed - FAILED_PRECONDITION - if the step is too large (more than 10Mib)
   * - NOT_FOUND - if the containing Execution does not exist (steps.create)
   *
   * @param string $projectId Required. A Project id.
   * @param string $historyId Required. A History id.
   * @param string $executionId Required. An Execution id.
   * @param Google_Service_ToolResults_Step $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId A unique request ID for server to detect
   * duplicated requests. For example, a UUID. Optional, but strongly recommended.
   * @return Google_Service_ToolResults_Step
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Gets a Step. May return any of the following canonical error codes: -
   * PERMISSION_DENIED - if the user is not authorized to read project -
   * INVALID_ARGUMENT - if the request is malformed - NOT_FOUND - if the Step does
   * not exist (steps.get)
   *
   * @param string $projectId A Project id. Required.
   * @param string $historyId A History id. Required.
   * @param string $executionId A Execution id. Required.
   * @param string $stepId A Step id. Required.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_Step
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Retrieves a PerfMetricsSummary. May return any of the following error
   * code(s): - NOT_FOUND - The specified PerfMetricsSummary does not exist
   * (steps.getPerfMetricsSummary)
   *
   * @param string $projectId The cloud project
   * @param string $historyId A tool results history ID.
   * @param string $executionId A tool results execution ID.
   * @param string $stepId A tool results step ID.
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_PerfMetricsSummary
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Lists Steps for a given Execution. The steps are sorted by creation_time in
   * descending order. The step_id key will be used to order the steps with the
   * same creation_time. May return any of the following canonical error codes: -
   * PERMISSION_DENIED - if the user is not authorized to read project -
   * INVALID_ARGUMENT - if the request is malformed - FAILED_PRECONDITION - if an
   * argument in the request happens to be invalid; e.g. if an attempt is made to
   * list the children of a nonexistent Step - NOT_FOUND - if the containing
   * Execution does not exist (steps.listProjectsHistoriesExecutionsSteps)
   *
   * @param string $projectId A Project id. Required.
   * @param string $historyId A History id. Required.
   * @param string $executionId A Execution id. Required.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of Steps to fetch. Default value:
   * 25. The server will use this default if the field is not set or has a value
   * of 0. Optional.
   * @opt_param string pageToken A continuation token to resume the query at the
   * next item. Optional.
   * @return Google_Service_ToolResults_ListStepsResponse
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Updates an existing Step with the supplied partial entity. May return any of
   * the following canonical error codes: - PERMISSION_DENIED - if the user is not
   * authorized to write project - INVALID_ARGUMENT - if the request is malformed
   * - FAILED_PRECONDITION - if the requested state transition is illegal (e.g try
   * to upload a duplicate xml file), if the updated step is too large (more than
   * 10Mib) - NOT_FOUND - if the containing Execution does not exist (steps.patch)
   *
   * @param string $projectId A Project id. Required.
   * @param string $historyId A History id. Required.
   * @param string $executionId A Execution id. Required.
   * @param string $stepId A Step id. Required.
   * @param Google_Service_ToolResults_Step $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId A unique request ID for server to detect
   * duplicated requests. For example, a UUID. Optional, but strongly recommended.
   * @return Google_Service_ToolResults_Step
   */(,,,,,=()){=(,,,,);=(,);(,(),);}/**
   * Publish xml files to an existing Step. May return any of the following
   * canonical error codes: - PERMISSION_DENIED - if the user is not authorized to
   * write project - INVALID_ARGUMENT - if the request is malformed -
   * FAILED_PRECONDITION - if the requested state transition is illegal, e.g try
   * to upload a duplicate xml file or a file too large. - NOT_FOUND - if the
   * containing Execution does not exist (steps.publishXunitXmlFiles)
   *
   * @param string $projectId A Project id. Required.
   * @param string $historyId A History id. Required.
   * @param string $executionId A Execution id. Required.
   * @param string $stepId A Step id. Note: This step must include a
   * TestExecutionStep. Required.
   * @param Google_Service_ToolResults_PublishXunitXmlFilesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ToolResults_Step
   */(,,,,,=()){=(,,,,);=(,);(,(),);}}