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
 * The "images" collection of methods.
 * Typical usage is:
 *  <code>
 *   $androidpublisherService = new Google_Service_AndroidPublisher(...);
 *   $images = $androidpublisherService->images;
 *  </code>
 */{/**
   * Deletes the image (specified by id) from the edit. (images.delete)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $language Language localization code (a BCP-47 language tag;
   * for example, "de-AT" for Austrian German).
   * @param string $imageType Type of the Image.
   * @param string $imageId Unique identifier an image within the set of images
   * attached to this edit.
   * @param array $optParams Optional parameters.
   */(,,,,,=()){=(,,,,);=(,);(,());}/**
   * Deletes all images for the specified language and image type. Returns an
   * empty response if no images are found. (images.deleteall)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $language Language localization code (a BCP-47 language tag;
   * for example, "de-AT" for Austrian German). Providing a language that is not
   * supported by the App is a no-op.
   * @param string $imageType Type of the Image. Providing an image type that
   * refers to no images is a no-op.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_ImagesDeleteAllResponse
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Lists all images. The response may be empty. (images.listEditsImages)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $language Language localization code (a BCP-47 language tag;
   * for example, "de-AT" for Austrian German). There must be a store listing for
   * the specified language.
   * @param string $imageType Type of the Image. Providing an image type that
   * refers to no images will return an empty response.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_ImagesListResponse
   */(,,,,=()){=(,,,);=(,);(,(),);}/**
   * Uploads an image of the specified language and image type, and adds to the
   * edit. (images.upload)
   *
   * @param string $packageName Package name of the app.
   * @param string $editId Identifier of the edit.
   * @param string $language Language localization code (a BCP-47 language tag;
   * for example, "de-AT" for Austrian German). Providing a language that is not
   * supported by the App is a no-op.
   * @param string $imageType Type of the Image.
   * @param array $optParams Optional parameters.
   * @return Google_Service_AndroidPublisher_ImagesUploadResponse
   */(,,,,=()){=(,,,);=(,);(,(),);}}