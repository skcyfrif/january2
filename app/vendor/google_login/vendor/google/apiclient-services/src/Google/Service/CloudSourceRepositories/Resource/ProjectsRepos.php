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
 * The "repos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sourcerepoService = new Google_Service_CloudSourceRepositories(...);
 *   $repos = $sourcerepoService->repos;
 *  </code>
 */{/**
   * Creates a repo in the given project with the given name. If the named
   * repository already exists, `CreateRepo` returns `ALREADY_EXISTS`.
   * (repos.create)
   *
   * @param string $parent The project in which to create the repo. Values are of
   * the form `projects/`.
   * @param Google_Service_CloudSourceRepositories_Repo $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_Repo
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a repo. (repos.delete)
   *
   * @param string $name The name of the repo to delete. Values are of the form
   * `projects//repos/`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_SourcerepoEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Returns information about a repo. (repos.get)
   *
   * @param string $name The name of the requested repository. Values are of the
   * form `projects//repos/`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_Repo
   */(,=()){=();=(,);(,(),);}/**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (repos.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See the operation documentation for the appropriate value for this
   * field.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int options.requestedPolicyVersion Optional. The policy format
   * version to be returned. Valid values are 0, 1, and 3. Requests specifying an
   * invalid value will be rejected. Requests for policies with any conditional
   * bindings must specify version 3. Policies without any conditional bindings
   * may specify any valid value or leave the field unset. To learn which
   * resources support conditions in their IAM policies, see the [IAM
   * documentation](https://cloud.google.com/iam/help/conditions/resource-
   * policies).
   * @return Google_Service_CloudSourceRepositories_Policy
   */(,=()){=();=(,);(,(),);}/**
   * Returns all repos belonging to a project. The sizes of the repos are not set
   * by ListRepos. To get the size of a repo, use GetRepo.
   * (repos.listProjectsRepos)
   *
   * @param string $name The project ID whose repos should be listed. Values are
   * of the form `projects/`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum number of repositories to return; between 1
   * and 500. If not set or zero, defaults to 100 at the server.
   * @opt_param string pageToken Resume listing repositories where a prior
   * ListReposResponse left off. This is an opaque token that must be obtained
   * from a recent, prior ListReposResponse's next_page_token field.
   * @return Google_Service_CloudSourceRepositories_ListReposResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates information about a repo. (repos.patch)
   *
   * @param string $name The name of the requested repository. Values are of the
   * form `projects//repos/`.
   * @param Google_Service_CloudSourceRepositories_UpdateRepoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_Repo
   */(,,=()){=(,);=(,);(,(),);}/**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. (repos.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See the operation documentation for the appropriate value for this
   * field.
   * @param Google_Service_CloudSourceRepositories_SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_Policy
   */(,,=()){=(,);=(,);(,(),);}/**
   * Synchronize a connected repo. The response contains SyncRepoMetadata in the
   * metadata field. (repos.sync)
   *
   * @param string $name The name of the repo to synchronize. Values are of the
   * form `projects//repos/`.
   * @param Google_Service_CloudSourceRepositories_SyncRepoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_Operation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * NOT_FOUND error. (repos.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See the operation documentation for the appropriate value
   * for this field.
   * @param Google_Service_CloudSourceRepositories_TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudSourceRepositories_TestIamPermissionsResponse
   */(,,=()){=(,);=(,);(,(),);}}