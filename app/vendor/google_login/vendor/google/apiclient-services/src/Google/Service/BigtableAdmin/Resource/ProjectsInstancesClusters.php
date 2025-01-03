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
 * The "clusters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigtableadminService = new Google_Service_BigtableAdmin(...);
 *   $clusters = $bigtableadminService->clusters;
 *  </code>
 */{/**
   * Creates a cluster within an instance. (clusters.create)
   *
   * @param string $parent Required. The unique name of the instance in which to
   * create the new cluster. Values are of the form
   * `projects/{project}/instances/{instance}`.
   * @param Google_Service_BigtableAdmin_Cluster $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string clusterId Required. The ID to be used when referring to the
   * new cluster within its instance, e.g., just `mycluster` rather than
   * `projects/myproject/instances/myinstance/clusters/mycluster`.
   * @return Google_Service_BigtableAdmin_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a cluster from an instance. (clusters.delete)
   *
   * @param string $name Required. The unique name of the cluster to be deleted.
   * Values are of the form
   * `projects/{project}/instances/{instance}/clusters/{cluster}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_BigtableadminEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets information about a cluster. (clusters.get)
   *
   * @param string $name Required. The unique name of the requested cluster.
   * Values are of the form
   * `projects/{project}/instances/{instance}/clusters/{cluster}`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_Cluster
   */(,=()){=();=(,);(,(),);}/**
   * Lists information about clusters in an instance.
   * (clusters.listProjectsInstancesClusters)
   *
   * @param string $parent Required. The unique name of the instance for which a
   * list of clusters is requested. Values are of the form
   * `projects/{project}/instances/{instance}`. Use `{instance} = '-'` to list
   * Clusters for all Instances in a project, e.g.,
   * `projects/myproject/instances/-`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken DEPRECATED: This field is unused and ignored.
   * @return Google_Service_BigtableAdmin_ListClustersResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates a cluster within an instance. (clusters.update)
   *
   * @param string $name The unique name of the cluster. Values are of the form
   * `projects/{project}/instances/{instance}/clusters/a-z*`.
   * @param Google_Service_BigtableAdmin_Cluster $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_BigtableAdmin_Operation
   */(,,=()){=(,);=(,);(,(),);}}