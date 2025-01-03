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
 * The "configs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $servicemanagementService = new Google_Service_ServiceManagement(...);
 *   $configs = $servicemanagementService->configs;
 *  </code>
 */{/**
   * Creates a new service configuration (version) for a managed service. This
   * method only stores the service configuration. To roll out the service
   * configuration to backend systems please call CreateServiceRollout. Only the
   * 100 most recent service configurations and ones referenced by existing
   * rollouts are kept for each service. The rest will be deleted eventually.
   * (configs.create)
   *
   * @param string $serviceName Required. The name of the service. See the
   * [overview](/service-management/overview) for naming requirements. For
   * example: `example.googleapis.com`.
   * @param Google_Service_ServiceManagement_Service $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Service
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets a service configuration (version) for a managed service. (configs.get)
   *
   * @param string $serviceName Required. The name of the service. See the
   * [overview](/service-management/overview) for naming requirements. For
   * example: `example.googleapis.com`.
   * @param string $configId Required. The id of the service configuration
   * resource. This field must be specified for the server to return all fields,
   * including `SourceInfo`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Specifies which parts of the Service Config should be
   * returned in the response.
   * @return Google_Service_ServiceManagement_Service
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists the history of the service configuration for a managed service, from
   * the newest to the oldest. (configs.listServicesConfigs)
   *
   * @param string $serviceName Required. The name of the service. See the
   * [overview](/service-management/overview) for naming requirements. For
   * example: `example.googleapis.com`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The max number of items to include in the response
   * list. Page size is 50 if not specified. Maximum value is 100.
   * @opt_param string pageToken The token of the page to retrieve.
   * @return Google_Service_ServiceManagement_ListServiceConfigsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Creates a new service configuration (version) for a managed service based on
   * user-supplied configuration source files (for example: OpenAPI
   * Specification). This method stores the source configurations as well as the
   * generated service configuration. To rollout the service configuration to
   * other services, please call CreateServiceRollout. Only the 100 most recent
   * configuration sources and ones referenced by existing service configurtions
   * are kept for each service. The rest will be deleted eventually. Operation
   * (configs.submit)
   *
   * @param string $serviceName Required. The name of the service. See the
   * [overview](/service-management/overview) for naming requirements. For
   * example: `example.googleapis.com`.
   * @param Google_Service_ServiceManagement_SubmitConfigSourceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ServiceManagement_Operation
   */(,,=()){=(,);=(,);(,(),);}}