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
 * The "inspectTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dlpService = new Google_Service_DLP(...);
 *   $inspectTemplates = $dlpService->inspectTemplates;
 *  </code>
 */{/**
   * Creates an InspectTemplate for re-using frequently used configuration for
   * inspecting content, images, and storage. See
   * https://cloud.google.com/dlp/docs/creating-templates to learn more.
   * (inspectTemplates.create)
   *
   * @param string $parent Required. Parent resource name. The format of this
   * value varies depending on the scope of the request (project or organization)
   * and whether you have [specified a processing
   * location](https://cloud.google.com/dlp/docs/specifying-location): + Projects
   * scope, location specified: `projects/`PROJECT_ID`/locations/`LOCATION_ID +
   * Projects scope, no location specified (defaults to global):
   * `projects/`PROJECT_ID + Organizations scope, location specified:
   * `organizations/`ORG_ID`/locations/`LOCATION_ID + Organizations scope, no
   * location specified (defaults to global): `organizations/`ORG_ID The following
   * example `parent` string specifies a parent project with the identifier
   * `example-project`, and specifies the `europe-west3` location for processing
   * data: parent=projects/example-project/locations/europe-west3
   * @param Google_Service_DLP_GooglePrivacyDlpV2CreateInspectTemplateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GooglePrivacyDlpV2InspectTemplate
   */(,,=()){=(,);=(,);(,(),);}/**
   * Deletes an InspectTemplate. See https://cloud.google.com/dlp/docs/creating-
   * templates to learn more. (inspectTemplates.delete)
   *
   * @param string $name Required. Resource name of the organization and
   * inspectTemplate to be deleted, for example
   * `organizations/433245324/inspectTemplates/432452342` or projects/project-
   * id/inspectTemplates/432452342.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GoogleProtobufEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Gets an InspectTemplate. See https://cloud.google.com/dlp/docs/creating-
   * templates to learn more. (inspectTemplates.get)
   *
   * @param string $name Required. Resource name of the organization and
   * inspectTemplate to be read, for example
   * `organizations/433245324/inspectTemplates/432452342` or projects/project-
   * id/inspectTemplates/432452342.
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GooglePrivacyDlpV2InspectTemplate
   */(,=()){=();=(,);(,(),);}/**
   * Lists InspectTemplates. See https://cloud.google.com/dlp/docs/creating-
   * templates to learn more.
   * (inspectTemplates.listOrganizationsLocationsInspectTemplates)
   *
   * @param string $parent Required. Parent resource name. The format of this
   * value varies depending on the scope of the request (project or organization)
   * and whether you have [specified a processing
   * location](https://cloud.google.com/dlp/docs/specifying-location): + Projects
   * scope, location specified: `projects/`PROJECT_ID`/locations/`LOCATION_ID +
   * Projects scope, no location specified (defaults to global):
   * `projects/`PROJECT_ID + Organizations scope, location specified:
   * `organizations/`ORG_ID`/locations/`LOCATION_ID + Organizations scope, no
   * location specified (defaults to global): `organizations/`ORG_ID The following
   * example `parent` string specifies a parent project with the identifier
   * `example-project`, and specifies the `europe-west3` location for processing
   * data: parent=projects/example-project/locations/europe-west3
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locationId Deprecated. This field has no effect.
   * @opt_param string orderBy Comma separated list of fields to order by,
   * followed by `asc` or `desc` postfix. This list is case-insensitive, default
   * sorting order is ascending, redundant space characters are insignificant.
   * Example: `name asc,update_time, create_time desc` Supported fields are: -
   * `create_time`: corresponds to time the template was created. - `update_time`:
   * corresponds to time the template was last updated. - `name`: corresponds to
   * template's name. - `display_name`: corresponds to template's display name.
   * @opt_param int pageSize Size of the page, can be limited by server. If zero
   * server returns a page of max size 100.
   * @opt_param string pageToken Page token to continue retrieval. Comes from
   * previous call to `ListInspectTemplates`.
   * @return Google_Service_DLP_GooglePrivacyDlpV2ListInspectTemplatesResponse
   */(,=()){=();=(,);(,(),);}/**
   * Updates the InspectTemplate. See https://cloud.google.com/dlp/docs/creating-
   * templates to learn more. (inspectTemplates.patch)
   *
   * @param string $name Required. Resource name of organization and
   * inspectTemplate to be updated, for example
   * `organizations/433245324/inspectTemplates/432452342` or projects/project-
   * id/inspectTemplates/432452342.
   * @param Google_Service_DLP_GooglePrivacyDlpV2UpdateInspectTemplateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DLP_GooglePrivacyDlpV2InspectTemplate
   */(,,=()){=(,);=(,);(,(),);}}