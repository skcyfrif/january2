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
 * The "nodes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $tpuService = new Google_Service_TPU(...);
 *   $nodes = $tpuService->nodes;
 *  </code>
 */{/**
   * Creates a node. (nodes.create)
   *
   * @param string $parent Required. The parent resource name.
   * @param Google_Service_TPU_Node $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string nodeId The unqualified resource name.
   * @return Google_Service_TPU_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a node. (nodes.delete)
   *
   * @param string $name Required. The resource name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_TPU_Operation
   */(,=()){=();=(,);(,(),);}/**
   * Gets the details of a node. (nodes.get)
   *
   * @param string $name Required. The resource name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_TPU_Node
   */(,=()){=();=(,);(,(),);}/**
   * Lists nodes. (nodes.listProjectsLocationsNodes)
   *
   * @param string $parent Required. The parent resource name.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of items to return.
   * @opt_param string pageToken The next_page_token value returned from a
   * previous List request, if any.
   * @return Google_Service_TPU_ListNodesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Reimages a node's OS. (nodes.reimage)
   *
   * @param string $name The resource name.
   * @param Google_Service_TPU_ReimageNodeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TPU_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Starts a node. (nodes.start)
   *
   * @param string $name The resource name.
   * @param Google_Service_TPU_StartNodeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TPU_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Stops a node. (nodes.stop)
   *
   * @param string $name The resource name.
   * @param Google_Service_TPU_StopNodeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_TPU_Operation
   */(,,=()){=(,);=(,);(,(),);}}