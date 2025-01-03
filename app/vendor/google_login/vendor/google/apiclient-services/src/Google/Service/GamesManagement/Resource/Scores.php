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
 * The "scores" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesManagementService = new Google_Service_GamesManagement(...);
 *   $scores = $gamesManagementService->scores;
 *  </code>
 */{/**
   * Resets scores for the leaderboard with the given ID for the currently
   * authenticated player. This method is only accessible to whitelisted tester
   * accounts for your application. (scores.reset)
   *
   * @param string $leaderboardId The ID of the leaderboard.
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesManagement_PlayerScoreResetResponse
   */(,=()){=();=(,);(,(),);}/**
   * Resets all scores for all leaderboards for the currently authenticated
   * players. This method is only accessible to whitelisted tester accounts for
   * your application. (scores.resetAll)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_GamesManagement_PlayerScoreResetAllResponse
   */(=()){=();=(,);(,(),);}/**
   * Resets scores for all draft leaderboards for all players. This method is only
   * available to user accounts for your developer console.
   * (scores.resetAllForAllPlayers)
   *
   * @param array $optParams Optional parameters.
   */(=()){=();=(,);(,());}/**
   * Resets scores for the leaderboard with the given ID for all players. This
   * method is only available to user accounts for your developer console. Only
   * draft leaderboards can be reset. (scores.resetForAllPlayers)
   *
   * @param string $leaderboardId The ID of the leaderboard.
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}/**
   * Resets scores for the leaderboards with the given IDs for all players. This
   * method is only available to user accounts for your developer console. Only
   * draft leaderboards may be reset. (scores.resetMultipleForAllPlayers)
   *
   * @param Google_Service_GamesManagement_ScoresResetMultipleForAllRequest $postBody
   * @param array $optParams Optional parameters.
   */(,=()){=();=(,);(,());}}