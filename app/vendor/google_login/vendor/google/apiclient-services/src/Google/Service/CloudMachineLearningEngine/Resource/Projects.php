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
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mlService = new Google_Service_CloudMachineLearningEngine(...);
 *   $projects = $mlService->projects;
 *  </code>
 */{/**
   * Performs explanation on the data in the request. {% dynamic include "/ai-
   * platform/includes/___explain-request" %}  (projects.explain)
   *
   * @param string $name Required. The resource name of a model or a version.
   * Authorization: requires the `predict` permission on the specified resource.
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ExplainRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleApiHttpBody
   */(,,=()){=(,);=(,);(,(),);}/**
   * Get the service account information associated with your project. You need
   * this information in order to grant the service account permissions for the
   * Google Cloud Storage location where you put your model training code for
   * training the model with Google Cloud Machine Learning. (projects.getConfig)
   *
   * @param string $name Required. The project name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1GetConfigResponse
   */(,=()){=();=(,);(,(),);}/**
   * Performs online prediction on the data in the request. {% dynamic include
   * "/ai-platform/includes/___predict-request" %}  (projects.predict)
   *
   * @param string $name Required. The resource name of a model or a version.
   * Authorization: requires the `predict` permission on the specified resource.
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1PredictRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleApiHttpBody
   */(,,=()){=(,);=(,);(,(),);}}