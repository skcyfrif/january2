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
 * The "drafts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gmailService = new Google_Service_Gmail(...);
 *   $drafts = $gmailService->drafts;
 *  </code>
 */{/**
   * Creates a new draft with the `DRAFT` label. (drafts.create)
   *
   * @param string $userId The user's email address. The special value `me` can be
   * used to indicate the authenticated user.
   * @param Google_Service_Gmail_Draft $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Draft
   */(,,=()){=(,);=(,);(,(),);}/**
   * Immediately and permanently deletes the specified draft. Does not simply
   * trash it. (drafts.delete)
   *
   * @param string $userId The user's email address. The special value `me` can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the draft to delete.
   * @param array $optParams Optional parameters.
   */(,,=()){=(,);=(,);(,());}/**
   * Gets the specified draft. (drafts.get)
   *
   * @param string $userId The user's email address. The special value `me` can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the draft to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string format The format to return the draft in.
   * @return Google_Service_Gmail_Draft
   */(,,=()){=(,);=(,);(,(),);}/**
   * Lists the drafts in the user's mailbox. (drafts.listUsersDrafts)
   *
   * @param string $userId The user's email address. The special value `me` can be
   * used to indicate the authenticated user.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeSpamTrash Include drafts from `SPAM` and `TRASH` in
   * the results.
   * @opt_param string maxResults Maximum number of drafts to return.
   * @opt_param string pageToken Page token to retrieve a specific page of results
   * in the list.
   * @opt_param string q Only return draft messages matching the specified query.
   * Supports the same query format as the Gmail search box. For example,
   * `"from:someuser@example.com rfc822msgid: is:unread"`.
   * @return Google_Service_Gmail_ListDraftsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Sends the specified, existing draft to the recipients in the `To`, `Cc`, and
   * `Bcc` headers. (drafts.send)
   *
   * @param string $userId The user's email address. The special value `me` can be
   * used to indicate the authenticated user.
   * @param Google_Service_Gmail_Draft $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Message
   */(,,=()){=(,);=(,);(,(),);}/**
   * Replaces a draft's content. (drafts.update)
   *
   * @param string $userId The user's email address. The special value `me` can be
   * used to indicate the authenticated user.
   * @param string $id The ID of the draft to update.
   * @param Google_Service_Gmail_Draft $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Gmail_Draft
   */(,,,=()){=(,,);=(,);(,(),);}}