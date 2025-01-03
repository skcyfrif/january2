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
 * The "versions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google_Service_Appengine(...);
 *   $versions = $appengineService->versions;
 *  </code>
 */{/**
   * Deploys code and resource files to a new version. (versions.create)
   *
   * @param string $appsId Part of `parent`. Name of the parent resource to create
   * this version under. Example: apps/myapp/services/default.
   * @param string $servicesId Part of `parent`. See documentation of `appsId`.
   * @param Google_Service_Appengine_Version $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Operation
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Deletes an existing Version resource. (versions.delete)
   *
   * @param string $appsId Part of `name`. Name of the resource requested.
   * Example: apps/myapp/services/default/versions/v1.
   * @param string $servicesId Part of `name`. See documentation of `appsId`.
   * @param string $versionsId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Appengine_Operation
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Gets the specified Version resource. By default, only a BASIC_VIEW will be
   * returned. Specify the FULL_VIEW parameter to get the full resource.
   * (versions.get)
   *
   * @param string $appsId Part of `name`. Name of the resource requested.
   * Example: apps/myapp/services/default/versions/v1.
   * @param string $servicesId Part of `name`. See documentation of `appsId`.
   * @param string $versionsId Part of `name`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Controls the set of fields returned in the Get
   * response.
   * @return Google_Service_Appengine_Version
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lists the versions of a service. (versions.listAppsServicesVersions)
   *
   * @param string $appsId Part of `parent`. Name of the parent Service resource.
   * Example: apps/myapp/services/default.
   * @param string $servicesId Part of `parent`. See documentation of `appsId`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Maximum results to return per page.
   * @opt_param string pageToken Continuation token for fetching the next page of
   * results.
   * @opt_param string view Controls the set of fields returned in the List
   * response.
   * @return Google_Service_Appengine_ListVersionsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Updates the specified Version resource. You can specify the following fields
   * depending on the App Engine environment and type of scaling that the version
   * resource uses:Standard environment instance_class
   * (https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.ser
   * vices.versions#Version.FIELDS.instance_class)automatic scaling in the
   * standard environment: automatic_scaling.min_idle_instances
   * (https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.ser
   * vices.versions#Version.FIELDS.automatic_scaling)
   * automatic_scaling.max_idle_instances (https://cloud.google.com/appengine/docs
   * /admin-api/reference/rest/v1/apps.services.versions#Version.FIELDS.automatic_
   * scaling) automaticScaling.standard_scheduler_settings.max_instances
   * (https://cloud.google.com/appengine/docs/admin-
   * api/reference/rest/v1/apps.services.versions#StandardSchedulerSettings)
   * automaticScaling.standard_scheduler_settings.min_instances
   * (https://cloud.google.com/appengine/docs/admin-
   * api/reference/rest/v1/apps.services.versions#StandardSchedulerSettings)
   * automaticScaling.standard_scheduler_settings.target_cpu_utilization
   * (https://cloud.google.com/appengine/docs/admin-
   * api/reference/rest/v1/apps.services.versions#StandardSchedulerSettings)
   * automaticScaling.standard_scheduler_settings.target_throughput_utilization
   * (https://cloud.google.com/appengine/docs/admin-
   * api/reference/rest/v1/apps.services.versions#StandardSchedulerSettings)basic
   * scaling or manual scaling in the standard environment: serving_status
   * (https://cloud.google.com/appengine/docs/admin-
   * api/reference/rest/v1/apps.services.versions#Version.FIELDS.serving_status)
   * manual_scaling.instances (https://cloud.google.com/appengine/docs/admin-
   * api/reference/rest/v1/apps.services.versions#manualscaling)Flexible
   * environment serving_status (https://cloud.google.com/appengine/docs/admin-api
   * /reference/rest/v1/apps.services.versions#Version.FIELDS.serving_status)autom
   * atic scaling in the flexible environment:
   * automatic_scaling.min_total_instances
   * (https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.ser
   * vices.versions#Version.FIELDS.automatic_scaling)
   * automatic_scaling.max_total_instances
   * (https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.ser
   * vices.versions#Version.FIELDS.automatic_scaling)
   * automatic_scaling.cool_down_period_sec
   * (https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.ser
   * vices.versions#Version.FIELDS.automatic_scaling)
   * automatic_scaling.cpu_utilization.target_utilization
   * (https://cloud.google.com/appengine/docs/admin-api/reference/rest/v1/apps.ser
   * vices.versions#Version.FIELDS.automatic_scaling)manual scaling in the
   * flexible environment: manual_scaling.instances
   * (https://cloud.google.com/appengine/docs/admin-
   * api/reference/rest/v1/apps.services.versions#manualscaling) (versions.patch)
   *
   * @param string $appsId Part of `name`. Name of the resource to update.
   * Example: apps/myapp/services/default/versions/1.
   * @param string $servicesId Part of `name`. See documentation of `appsId`.
   * @param string $versionsId Part of `name`. See documentation of `appsId`.
   * @param Google_Service_Appengine_Version $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Standard field mask for the set of fields to be
   * updated.
   * @return Google_Service_Appengine_Operation
   */(,,,,=()){=(,,,);=(,);(,(),);}}