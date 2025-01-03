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
 * The "achievementConfigurations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesConfigurationService = new Google_Service_GamesConfiguration(...);
 *   $achievementConfigurations = $gamesConfigurationService->achievementConfigurations;
 *  </code>
 */{/**
   * Delete the achievement configuration with the given ID.
   * (achievementConfigurations.delete)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Retrieves the metadata of the achievement configuration with the given ID.
   * (achievementConfigurations.get)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesConfiguration_AchievementConfiguration
   */(,=()){=();=(,);(,(),);}/**
   * Insert a new achievement configuration in this application.
   * (achievementConfigurations.insert)
   *
   * @param string $applicationId The application ID from the Google Play
   * developer console.
   * @param Google_Service_GamesConfiguration_AchievementConfiguration $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesConfiguration_AchievementConfiguration
   */(,,=()){=(,);=(,);(,(),);}/**
   * Returns a list of the achievement configurations in this application.
   * (achievementConfigurations.listAchievementConfigurations)
   *
   * @param string $applicationId The application ID from the Google Play
   * developer console.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int maxResults The maximum number of resource configurations to
   * return in the response, used for paging. For any response, the actual number
   * of resources returned may be less than the specified `maxResults`.
   * @opt_param string pageToken The token returned by the previous request.
   * @return Google_Service_GamesConfiguration_AchievementConfigurationListResponse
   */(,=()){=();=(,);(,(),);}/**
   * Update the metadata of the achievement configuration with the given ID.
   * (achievementConfigurations.update)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param Google_Service_GamesConfiguration_AchievementConfiguration $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesConfiguration_AchievementConfiguration
   */(,,=()){=(,);=(,);(,(),);}}