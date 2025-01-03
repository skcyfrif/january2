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
 * The "templateVersions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataflowService = new Google_Service_Dataflow(...);
 *   $templateVersions = $dataflowService->templateVersions;
 *  </code>
 */{/**
   * Creates a new Template with TemplateVersion. Requires project_id(projects)
   * and template display_name(catalogTemplates). The template display_name is set
   * by the user. (templateVersions.create)
   *
   * @param string $parent The parent project and template that the
   * TemplateVersion will be created under. Create using project_id(pid1) and
   * display_name(tid1). Format: projects/{pid1}/catalogTemplates/{tid1}
   * @param Google_Service_Dataflow_CreateTemplateVersionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Dataflow_TemplateVersion
   */(,,=()){=(,);=(,);(,(),);}}