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
 * The "tasks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $taskqueueService = new Google_Service_Taskqueue(...);
 *   $tasks = $taskqueueService->tasks;
 *  </code>
 */{/**
   * Delete a task from a TaskQueue. (tasks.delete)
   *
   * @param string $project The project under which the queue lies.
   * @param string $taskqueue The taskqueue to delete a task from.
   * @param string $task The id of the task to delete.
   * @param array $optParams Optional parameters.
   */(,,,=()){=(,,);=(,);(,());}/**
   * Get a particular task from a TaskQueue. (tasks.get)
   *
   * @param string $project The project under which the queue lies.
   * @param string $taskqueue The taskqueue in which the task belongs.
   * @param string $task The task to get properties of.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Taskqueue_Task
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Insert a new task in a TaskQueue (tasks.insert)
   *
   * @param string $project The project under which the queue lies
   * @param string $taskqueue The taskqueue to insert the task into
   * @param Google_Service_Taskqueue_Task $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Taskqueue_Task
   */(,,,=()){=(,,);=(,);(,(),);}/**
   * Lease 1 or more tasks from a TaskQueue. (tasks.lease)
   *
   * @param string $project The project under which the queue lies.
   * @param string $taskqueue The taskqueue to lease a task from.
   * @param int $numTasks The number of tasks to lease.
   * @param int $leaseSecs The lease in seconds.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool groupByTag When true, all returned tasks will have the same
   * tag
   * @opt_param string tag The tag allowed for tasks in the response. Must only be
   * specified if group_by_tag is true. If group_by_tag is true and tag is not
   * specified the tag will be that of the oldest task by eta, i.e. the first
   * available tag
   * @return Google_Service_Taskqueue_Tasks
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * List Tasks in a TaskQueue (tasks.listTasks)
   *
   * @param string $project The project under which the queue lies.
   * @param string $taskqueue The id of the taskqueue to list tasks from.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Taskqueue_Tasks2
   */(,,=()){=(,);=(,);(,(),);}/**
   * Update tasks that are leased out of a TaskQueue. This method supports patch
   * semantics. (tasks.patch)
   *
   * @param string $project The project under which the queue lies.
   * @param string $taskqueue
   * @param string $task
   * @param int $newLeaseSeconds The new lease in seconds.
   * @param Google_Service_Taskqueue_Task $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Taskqueue_Task
   */(,,,,,=()){=(,,,,);=(,);(,(),);}/**
   * Update tasks that are leased out of a TaskQueue. (tasks.update)
   *
   * @param string $project The project under which the queue lies.
   * @param string $taskqueue
   * @param string $task
   * @param int $newLeaseSeconds The new lease in seconds.
   * @param Google_Service_Taskqueue_Task $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Taskqueue_Task
   */(,,,,,=()){=(,,,,);=(,);(,(),);}}