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
 * The "builds" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudbuildService = new Google_Service_CloudBuild(...);
 *   $builds = $cloudbuildService->builds;
 *  </code>
 */{/**
   * Cancels a build in progress. (builds.cancel)
   *
   * @param string $projectId Required. ID of the project.
   * @param string $id Required. ID of the build.
   * @param Google_Service_CloudBuild_CancelBuildRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_Build
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Starts a build with the specified configuration. This method returns a long-
   * running `Operation`, which includes the build ID. Pass the build ID to
   * `GetBuild` to determine the build status (such as `SUCCESS` or `FAILURE`).
   * (builds.create)
   *
   * @param string $projectId Required. ID of the project.
   * @param Google_Service_CloudBuild_Build $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string parent The parent resource where this build will be
   * created. Format: `projects/{project}/locations/{location}`
   * @return Google_Service_CloudBuild_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns information about a previously requested build. The `Build` that is
   * returned includes its status (such as `SUCCESS`, `FAILURE`, or `WORKING`),
   * and timing information. (builds.get)
   *
   * @param string $projectId Required. ID of the project.
   * @param string $id Required. ID of the build.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string name The name of the `Build` to retrieve. Format:
   * `projects/{project}/locations/{location}/builds/{build}`
   * @return Google_Service_CloudBuild_Build
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists previously requested builds. Previously requested builds may still be
   * in-progress, or may have finished successfully or unsuccessfully.
   * (builds.listProjectsBuilds)
   *
   * @param string $projectId Required. ID of the project.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter The raw filter text to constrain the results.
   * @opt_param int pageSize Number of results to return in the list.
   * @opt_param string pageToken The page token for the next page of Builds. If
   * unspecified, the first page of results is returned. If the token is rejected
   * for any reason, INVALID_ARGUMENT will be thrown. In this case, the token
   * should be discarded, and pagination should be restarted from the first page
   * of results. See https://google.aip.dev/158 for more.
   * @opt_param string parent The parent of the collection of `Builds`. Format:
   * `projects/{project}/locations/location`
   * @return Google_Service_CloudBuild_ListBuildsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Creates a new build based on the specified build. This method creates a new
   * build using the original build request, which may or may not result in an
   * identical build. For triggered builds: * Triggered builds resolve to a
   * precise revision; therefore a retry of a triggered build will result in a
   * build that uses the same revision. For non-triggered builds that specify
   * `RepoSource`: * If the original build built from the tip of a branch, the
   * retried build will build from the tip of that branch, which may not be the
   * same revision as the original build. * If the original build specified a
   * commit sha or revision ID, the retried build will use the identical source.
   * For builds that specify `StorageSource`: * If the original build pulled
   * source from Google Cloud Storage without specifying the generation of the
   * object, the new build will use the current object, which may be different
   * from the original build source. * If the original build pulled source from
   * Cloud Storage and specified the generation of the object, the new build will
   * attempt to use the same object, which may or may not be available depending
   * on the bucket's lifecycle management settings. (builds.retry)
   *
   * @param string $projectId Required. ID of the project.
   * @param string $id Required. Build ID of the original build.
   * @param Google_Service_CloudBuild_RetryBuildRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudBuild_Operation
   */(,,,=()){=(,,);=(,);(,(),);}}