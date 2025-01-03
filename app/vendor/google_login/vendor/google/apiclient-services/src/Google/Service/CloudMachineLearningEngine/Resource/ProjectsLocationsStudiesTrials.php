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
 * The "trials" collection of methods.
 * Typical usage is:
 *  <code>
 *   $mlService = new Google_Service_CloudMachineLearningEngine(...);
 *   $trials = $mlService->trials;
 *  </code>
 */{/**
   * Adds a measurement of the objective metrics to a trial. This measurement is
   * assumed to have been taken before the trial is complete.
   * (trials.addMeasurement)
   *
   * @param string $name Required. The trial name.
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1AddTrialMeasurementRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Trial
   */(,,=()){=(,);=(,);(,(),);}/**
   * Checks whether a trial should stop or not. Returns a long-running operation.
   * When the operation is successful, it will contain a
   * CheckTrialEarlyStoppingStateResponse. (trials.checkEarlyStoppingState)
   *
   * @param string $name Required. The trial name.
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1CheckTrialEarlyStoppingStateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation
   */(,,=()){=(,);=(,);(,(),);}/**
   * Marks a trial as complete. (trials.complete)
   *
   * @param string $name Required. The trial name.metat
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1CompleteTrialRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Trial
   */(,,=()){=(,);=(,);(,(),);}/**
   * Adds a user provided trial to a study. (trials.create)
   *
   * @param string $parent Required. The name of the study that the trial belongs
   * to.
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Trial $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Trial
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes a trial. (trials.delete)
   *
   * @param string $name Required. The trial name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets a trial. (trials.get)
   *
   * @param string $name Required. The trial name.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Trial
   */(,=()){=();=(,);(,(),);}/**
   * Lists the trials associated with a study.
   * (trials.listProjectsLocationsStudiesTrials)
   *
   * @param string $parent Required. The name of the study that the trial belongs
   * to.
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListTrialsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Lists the pareto-optimal trials for multi-objective study or the optimal
   * trials for single-objective study. The definition of pareto-optimal can be
   * checked in wiki page. https://en.wikipedia.org/wiki/Pareto_efficiency
   * (trials.listOptimalTrials)
   *
   * @param string $parent Required. The name of the study that the pareto-optimal
   * trial belongs to.
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListOptimalTrialsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1ListOptimalTrialsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Stops a trial. (trials.stop)
   *
   * @param string $name Required. The trial name.
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1StopTrialRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1Trial
   */(,,=()){=(,);=(,);(,(),);}/**
   * Adds one or more trials to a study, with parameter values suggested by AI
   * Platform Vizier. Returns a long-running operation associated with the
   * generation of trial suggestions. When this long-running operation succeeds,
   * it will contain a SuggestTrialsResponse. (trials.suggest)
   *
   * @param string $parent Required. The name of the study that the trial belongs
   * to.
   * @param Google_Service_CloudMachineLearningEngine_GoogleCloudMlV1SuggestTrialsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CloudMachineLearningEngine_GoogleLongrunningOperation
   */(,,=()){=(,);=(,);(,(),);}}