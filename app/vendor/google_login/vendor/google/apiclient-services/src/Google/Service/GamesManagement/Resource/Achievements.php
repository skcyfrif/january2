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
 * The "achievements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesManagementService = new Google_Service_GamesManagement(...);
 *   $achievements = $gamesManagementService->achievements;
 *  </code>
 */{/**
   * Resets the achievement with the given ID for the currently authenticated
   * player. This method is only accessible to whitelisted tester accounts for
   * your application. (achievements.reset)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesManagement_AchievementResetResponse
   */(,=()){=();=(,);(,(),);}/**
   * Resets all achievements for the currently authenticated player for your
   * application. This method is only accessible to whitelisted tester accounts
   * for your application. (achievements.resetAll)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesManagement_AchievementResetAllResponse
   */(=()){=();=(,);(,(),);}/**
   * Resets all draft achievements for all players. This method is only available
   * to user accounts for your developer console.
   * (achievements.resetAllForAllPlayers)
   *
   * @param array $optParams Optional parameters.
   */(=()){=();=(,);(,());}/**
   * Resets the achievement with the given ID for all players. This method is only
   * available to user accounts for your developer console. Only draft
   * achievements can be reset. (achievements.resetForAllPlayers)
   *
   * @param string $achievementId The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Resets achievements with the given IDs for all players. This method is only
   * available to user accounts for your developer console. Only draft
   * achievements may be reset. (achievements.resetMultipleForAllPlayers)
   *
   * @param Google_Service_GamesManagement_AchievementResetMultipleForAllRequest $postBody
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}}