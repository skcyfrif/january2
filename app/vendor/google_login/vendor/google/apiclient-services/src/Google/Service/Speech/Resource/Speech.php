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
 * The "speech" collection of methods.
 * Typical usage is:
 *  <code>
 *   $speechService = new Google_Service_Speech(...);
 *   $speech = $speechService->speech;
 *  </code>
 */{/**
   * Performs asynchronous speech recognition: receive results via the
   * google.longrunning.Operations interface. Returns either an `Operation.error`
   * or an `Operation.response` which contains a `LongRunningRecognizeResponse`
   * message. For more information on asynchronous speech recognition, see the
   * [how-to](https://cloud.google.com/speech-to-text/docs/async-recognize).
   * (speech.longrunningrecognize)
   *
   * @param Google_Service_Speech_LongRunningRecognizeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Speech_Operation
   */(,=()){=();=(,);(,(),);}/**
   * Performs synchronous speech recognition: receive results after all audio has
   * been sent and processed. (speech.recognize)
   *
   * @param Google_Service_Speech_RecognizeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Speech_RecognizeResponse
   */(,=()){=();=(,);(,(),);}}