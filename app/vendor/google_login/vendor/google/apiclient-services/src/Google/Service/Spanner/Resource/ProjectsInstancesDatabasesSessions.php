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
 * The "sessions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $spannerService = new Google_Service_Spanner(...);
 *   $sessions = $spannerService->sessions;
 *  </code>
 */{/**
   * Creates multiple new sessions. This API can be used to initialize a session
   * cache on the clients. See https://goo.gl/TgSFN2 for best practices on session
   * cache management. (sessions.batchCreate)
   *
   * @param string $database Required. The database in which the new sessions are
   * created.
   * @param Google_Service_Spanner_BatchCreateSessionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_BatchCreateSessionsResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Begins a new transaction. This step can often be skipped: Read, ExecuteSql
   * and Commit can begin a new transaction as a side-effect.
   * (sessions.beginTransaction)
   *
   * @param string $session Required. The session in which the transaction runs.
   * @param Google_Service_Spanner_BeginTransactionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Transaction
   */(,,=()){=(,);=(,);(,(),);}/**
   * Commits a transaction. The request includes the mutations to be applied to
   * rows in the database. `Commit` might return an `ABORTED` error. This can
   * occur at any time; commonly, the cause is conflicts with concurrent
   * transactions. However, it can also happen for a variety of other reasons. If
   * `Commit` returns `ABORTED`, the caller should re-attempt the transaction from
   * the beginning, re-using the same session. On very rare occasions, `Commit`
   * might return `UNKNOWN`. This can happen, for example, if the client job
   * experiences a 1+ hour networking failure. At that point, Cloud Spanner has
   * lost track of the transaction outcome and we recommend that you perform
   * another read from the database to see the state of things as they are now.
   * (sessions.commit)
   *
   * @param string $session Required. The session in which the transaction to be
   * committed is running.
   * @param Google_Service_Spanner_CommitRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_CommitResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a new session. A session can be used to perform transactions that
   * read and/or modify data in a Cloud Spanner database. Sessions are meant to be
   * reused for many consecutive transactions. Sessions can only execute one
   * transaction at a time. To execute multiple concurrent read-write/write-only
   * transactions, create multiple sessions. Note that standalone reads and
   * queries use a transaction internally, and count toward the one transaction
   * limit. Active sessions use additional server resources, so it is a good idea
   * to delete idle and unneeded sessions. Aside from explicit deletes, Cloud
   * Spanner may delete sessions for which no operations are sent for more than an
   * hour. If a session is deleted, requests to it return `NOT_FOUND`. Idle
   * sessions can be kept alive by sending a trivial SQL query periodically, e.g.,
   * `"SELECT 1"`. (sessions.create)
   *
   * @param string $database Required. The database in which the new session is
   * created.
   * @param Google_Service_Spanner_CreateSessionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Session
   */(,,=()){=(,);=(,);(,(),);}/**
   * Ends a session, releasing server resources associated with it. This will
   * asynchronously trigger cancellation of any operations that are running with
   * this session. (sessions.delete)
   *
   * @param string $name Required. The name of the session to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_SpannerEmpty
   */(,=()){=();=(,);(,(),);}/**
   * Executes a batch of SQL DML statements. This method allows many statements to
   * be run with lower latency than submitting them sequentially with ExecuteSql.
   * Statements are executed in sequential order. A request can succeed even if a
   * statement fails. The ExecuteBatchDmlResponse.status field in the response
   * provides information about the statement that failed. Clients must inspect
   * this field to determine whether an error occurred. Execution stops after the
   * first failed statement; the remaining statements are not executed.
   * (sessions.executeBatchDml)
   *
   * @param string $session Required. The session in which the DML statements
   * should be performed.
   * @param Google_Service_Spanner_ExecuteBatchDmlRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_ExecuteBatchDmlResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Executes an SQL statement, returning all results in a single reply. This
   * method cannot be used to return a result set larger than 10 MiB; if the query
   * yields more data than that, the query fails with a `FAILED_PRECONDITION`
   * error. Operations inside read-write transactions might return `ABORTED`. If
   * this occurs, the application should restart the transaction from the
   * beginning. See Transaction for more details. Larger result sets can be
   * fetched in streaming fashion by calling ExecuteStreamingSql instead.
   * (sessions.executeSql)
   *
   * @param string $session Required. The session in which the SQL query should be
   * performed.
   * @param Google_Service_Spanner_ExecuteSqlRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_ResultSet
   */(,,=()){=(,);=(,);(,(),);}/**
   * Like ExecuteSql, except returns the result set as a stream. Unlike
   * ExecuteSql, there is no limit on the size of the returned result set.
   * However, no individual row in the result set can exceed 100 MiB, and no
   * column value can exceed 10 MiB. (sessions.executeStreamingSql)
   *
   * @param string $session Required. The session in which the SQL query should be
   * performed.
   * @param Google_Service_Spanner_ExecuteSqlRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_PartialResultSet
   */(,,=()){=(,);=(,);(,(),);}/**
   * Gets a session. Returns `NOT_FOUND` if the session does not exist. This is
   * mainly useful for determining whether a session is still alive.
   * (sessions.get)
   *
   * @param string $name Required. The name of the session to retrieve.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_Session
   */(,=()){=();=(,);(,(),);}/**
   * Lists all sessions in a given database.
   * (sessions.listProjectsInstancesDatabasesSessions)
   *
   * @param string $database Required. The database in which to list sessions.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter An expression for filtering the results of the
   * request. Filter rules are case insensitive. The fields eligible for filtering
   * are: * `labels.key` where key is the name of a label Some examples of using
   * filters are: * `labels.env:*` --> The session has the label "env". *
   * `labels.env:dev` --> The session has the label "env" and the value of the
   * label contains the string "dev".
   * @opt_param int pageSize Number of sessions to be returned in the response. If
   * 0 or less, defaults to the server's maximum allowed page size.
   * @opt_param string pageToken If non-empty, `page_token` should contain a
   * next_page_token from a previous ListSessionsResponse.
   * @return Google_Service_Spanner_ListSessionsResponse
   */(,=()){=();=(,);(,(),);}/**
   * Creates a set of partition tokens that can be used to execute a query
   * operation in parallel. Each of the returned partition tokens can be used by
   * ExecuteStreamingSql to specify a subset of the query result to read. The same
   * session and read-only transaction must be used by the PartitionQueryRequest
   * used to create the partition tokens and the ExecuteSqlRequests that use the
   * partition tokens. Partition tokens become invalid when the session used to
   * create them is deleted, is idle for too long, begins a new transaction, or
   * becomes too old. When any of these happen, it is not possible to resume the
   * query, and the whole operation must be restarted from the beginning.
   * (sessions.partitionQuery)
   *
   * @param string $session Required. The session used to create the partitions.
   * @param Google_Service_Spanner_PartitionQueryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_PartitionResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Creates a set of partition tokens that can be used to execute a read
   * operation in parallel. Each of the returned partition tokens can be used by
   * StreamingRead to specify a subset of the read result to read. The same
   * session and read-only transaction must be used by the PartitionReadRequest
   * used to create the partition tokens and the ReadRequests that use the
   * partition tokens. There are no ordering guarantees on rows returned among the
   * returned partition tokens, or even within each individual StreamingRead call
   * issued with a partition_token. Partition tokens become invalid when the
   * session used to create them is deleted, is idle for too long, begins a new
   * transaction, or becomes too old. When any of these happen, it is not possible
   * to resume the read, and the whole operation must be restarted from the
   * beginning. (sessions.partitionRead)
   *
   * @param string $session Required. The session used to create the partitions.
   * @param Google_Service_Spanner_PartitionReadRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_PartitionResponse
   */(,,=()){=(,);=(,);(,(),);}/**
   * Reads rows from the database using key lookups and scans, as a simple
   * key/value style alternative to ExecuteSql. This method cannot be used to
   * return a result set larger than 10 MiB; if the read matches more data than
   * that, the read fails with a `FAILED_PRECONDITION` error. Reads inside read-
   * write transactions might return `ABORTED`. If this occurs, the application
   * should restart the transaction from the beginning. See Transaction for more
   * details. Larger result sets can be yielded in streaming fashion by calling
   * StreamingRead instead. (sessions.read)
   *
   * @param string $session Required. The session in which the read should be
   * performed.
   * @param Google_Service_Spanner_ReadRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_ResultSet
   */(,,=()){=(,);=(,);(,(),);}/**
   * Rolls back a transaction, releasing any locks it holds. It is a good idea to
   * call this for any transaction that includes one or more Read or ExecuteSql
   * requests and ultimately decides not to commit. `Rollback` returns `OK` if it
   * successfully aborts the transaction, the transaction was already aborted, or
   * the transaction is not found. `Rollback` never returns `ABORTED`.
   * (sessions.rollback)
   *
   * @param string $session Required. The session in which the transaction to roll
   * back is running.
   * @param Google_Service_Spanner_RollbackRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_SpannerEmpty
   */(,,=()){=(,);=(,);(,(),);}/**
   * Like Read, except returns the result set as a stream. Unlike Read, there is
   * no limit on the size of the returned result set. However, no individual row
   * in the result set can exceed 100 MiB, and no column value can exceed 10 MiB.
   * (sessions.streamingRead)
   *
   * @param string $session Required. The session in which the read should be
   * performed.
   * @param Google_Service_Spanner_ReadRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Spanner_PartialResultSet
   */(,,=()){=(,);=(,);(,(),);}}