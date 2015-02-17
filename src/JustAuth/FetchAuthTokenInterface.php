<?php
/*
 * Copyright 2015 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Auth;

use GuzzleHttp\ClientInterface;

/**
 * An interface implemented by objects that can fetch auth tokens.
 */
interface FetchAuthTokenInterface
{

 /**
  * Fetchs the auth tokens based on the current state.
  *
  * @param $client GuzzleHttp\ClientInterface the optional client.
  * @return array a hash of auth tokens
  */
  public function fetchAuthToken(ClientInterface $client = null);


 /**
  * Obtains a key that can used to cache the results of #fetchAuthToken.
  *
  * If the value is empty, the auth token is not cached.
  *
  * @return string a key that may be used to cache the auth token.
  */
  public function getCacheKey();
}