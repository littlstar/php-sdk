<?php

/**
 * Copyright 2015 Little Star Media, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 *
 * @author Wells Johnston <wells@littlstar.com>
 */

class Littlstar
{

  const BASE_URL = 'https://littlstar.com/api/v1/';

  private $apiKey = null;

  /**
   * constructor
   *
   * @param (optional) $apiKey
   */
  public function __construct($apiKey = null)
  {
    $this->apiKey = $apiKey;
  }

  /**
   * search
   *
   * Search littlstar's database for users, videos, photos, or everything
   *
   * @param string $type    "all" | "photos" | "videos"
   * @param string $query   the search term
   * @param int $count      (optional) # results to return
   * @param int $page       (optional) the page to return
   */
  public function search($type, $query, $count = 30, $page = 1)
  {
    $uri = 'search';
    if ($type != 'all') {
      $uri .= '/' . $type;
    }

    $options = array(
      'q' => $query,
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getUser
   *
   * Get a user by id or slug
   *
   * @param string $user_id
   */
  public function getUser($user_id)
  {
    $uri = 'users/' . $user_id;
    return $this->makeRequest($uri);
  }

  /**
   * getUserVideos
   *
   * Get a user's videos
   *
   * @param string $user_id
   * @param int $count
   * @param int $page
   */
  public function getUserVideos($user_id, $count = 30, $page = 1)
  {
    $uri = 'users/' . $user_id . '/videos';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getUserPhotos
   *
   * Get a user's photos
   *
   * @param string $user_id
   * @param int $count
   * @param int $page
   */
  public function getUserPhotos($user_id, $count = 30, $page = 1)
  {
    $uri = 'users/' . $user_id . '/photos';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getUserChannels
   *
   * Get a user's channels
   *
   * @param (string) $user_id
   * @param int $count
   * @param int $page
   */
  public function getUserChannels($user_id, $count = 30, $page = 1)
  {
    $uri = 'users/' . $user_id . '/channels';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getUserFollowers
   *
   * Get a users followers
   *
   * @param string $user_id
   * @param int $count
   * @param int $page
   */
  public function getUserFollowers($user_id, $count = 30, $page = 1)
  {
    $uri = 'users/' . $user_id . '/followers';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getUserFollowing
   *
   * Get a list of users someone is following
   *
   * @param string $user_id
   * @param int $count
   * @param int $page
   */
  public function getUserFollowing($user_id, $count = 30, $page = 1)
  {
    $uri = 'users/' . $user_id . '/following';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  // public function follow()
  // {
  //
  // }

  // public function unfollow()
  // {
  //
  // }

  /**
   * getVideos
   *
   * Get all videos
   *
   * @param int $count
   * @param int $page
   */
  public function getVideos($count = 30, $page = 1)
  {
    $uri = 'videos';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getSponsoredVideos
   *
   * Returns a all sponsored videos
   *
   * @param int $count
   * @param int $page
   */
  public function getSponsoredVideos($count = 30, $page = 1)
  {
    $uri = 'videos/sponsored';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getFeaturedVideos
   *
   * Returns all featured videos
   *
   * @param int $count
   * @param int $page
   */
  public function getFeaturedVideos($count = 30, $page = 1)
  {
    $uri = 'videos/featured';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getLatestVideos
   *
   * Returns videos sorted by most recent
   *
   * @param int $count
   * @param int $page
   */
  public function getLatestVideos($count = 30, $page = 1)
  {
    $uri = 'videos/latest';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getVRVideos
   *
   * Gets videos that have been identified as optimized for display in Oculus
   * Rift, GearVR, and other HMDs
   *
   * @param int $count
   * @param int $page
   */
  public function getVRVideos($count = 30, $page = 1)
  {
    $uri = 'videos/vr';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getVideo
   *
   * Gets a single video by id or slug
   *
   * @param string $video_id
   */
  public function getVideo($video_id)
  {
    $uri = 'videos/' . $video_id;
    return $this->makeRequest($uri);
  }

  // public function starVideo($video_id)
  // {
  //
  // }

  // public function unstarVideo($video_id)
  // {
  //
  // }

  /**
   * getVideoComments
   *
   * Returns the comments for a given video
   *
   * @param string $video_id
   * @param int $count
   * @param int $page
   */
  public function getVideoComments($video_id, $count = 30, $page = 1)
  {
    $uri = 'videos/' . $video_id . '/comments';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  // public function addVideoComment()
  // {
  //
  // }

  /**
   * getPhotos
   *
   * Returns all photos
   *
   * @param int $count
   * @param int $page
   */
  public function getPhotos($count = 30, $page = 1)
  {
    $uri = 'photos';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getFeaturedPhotos
   *
   * Returns all featured photos
   *
   * @param int $count
   * @param int $page
   */
  public function getFeaturedPhotos($count = 30, $page = 1)
  {
    $uri = 'photos/featured';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getLatestPhotos
   *
   * Returns the most recently uploaded photos
   *
   * @param int $count
   * @param int $page
   */
  public function getLatestPhotos($count = 30, $page = 1)
  {
    $uri = 'photos/latest';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getVRPhotos
   *
   * Returns a photos that have been marked as VR optimized
   *
   * @param int $count
   * @param int $page
   */
  public function getVRPhotos($count = 30, $page = 1)
  {
    $uri = 'photos/vr';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getPhoto
   *
   * Returns a single photo by id
   *
   * @param string $photo_id
   */
  public function getPhoto($photo_id)
  {
    $uri = 'photos/' . $photo_id;
    return $this->makeRequest($uri);
  }

  // public function starPhoto($photo_id)
  // {
  //
  // }

  // public function unstarPhoto($photo_id)
  // {
  //
  // }

  /**
   * getPhotoComments
   *
   * @param string $photo_id
   * @param int $count
   * @param int $page
   */
  public function getPhotoComments($photo_id, $count = 30, $page = 1)
  {
    $uri = 'photos/' . $photo_id . '/comments';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  // public function addPhotoComment()
  // {
  //
  // }

  /**
   * getCategories
   *
   * Returns all categories
   *
   * @param int $count
   * @param int $page
   */
  public function getCategories($count = 30, $page = 1)
  {
    $uri = 'categories';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getCategoryInfo
   *
   * Returns the details of the given category
   *
   * @param string $category_id
   */
  public function getCategoryInfo($category_id)
  {
    $uri = 'categories/' . $category_id;
    return $this->makeRequest($uri);
  }

  /**
   * getVideosByCategory
   *
   * Returns all the videos for a given category
   *
   * @param string $category_id
   * @param int $count
   * @param int $page
   */
  public function getVideosByCategory($category_id, $count = 30, $page = 1)
  {
    $uri = 'categories/' . $category_id . '/videos';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getPhotosByCategory
   *
   * Returns all photos for a given category
   *
   * @param string $category_id
   * @param int $count
   * @param int $page
   */
  public function getPhotosByCategory($category_id, $count = 30, $page = 1)
  {
    $uri = 'categories/' . $category_id . '/photos';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getChannels
   *
   * Returns all channels
   *
   * @param int $count
   * @param int $page
   */
  public function getChannels($count = 30, $page = 1)
  {
    $uri = 'channels';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getChannel
   *
   * Returns the details for the given channel
   *
   * @param string $channel_id
   */
  public function getChannel($channel_id)
  {
    $uri = 'channels/' . $channel_id;
    return $this->makeRequest($uri);
  }

  /**
   * getChannelVideos
   *
   * Returns the videos for a given channel
   *
   * @param string $channel_id
   * @param int $count
   * @param int $page
   */
  public function getChannelVideos($channel_id, $count = 30, $page = 1)
  {
    $uri = 'channels/' . $channel_id . '/videos';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getChannelPhotos
   *
   * Returns the photos for a given channel
   *
   * @param string $channel_id
   * @param int $count
   * @param int $page
   */
  public function getChannelPhotos($channel_id, $count = 30, $page = 1)
  {
    $uri = 'channels/' . $channel_id . '/photos';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getHashtags
   *
   * Returns all hashtags
   *
   * @param int $count
   * @param int $page
   */
  public function getHashtags($count = 30, $page = 1)
  {
    $uri = 'hashtags';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getHashtagInfo
   *
   * Returns the details for the given hashtag
   *
   * @param string $hashtag
   */
  public function getHashtagInfo($hashtag)
  {
    $uri = 'hashtags/' . $hashtag;
    return $this->makeRequest($uri);
  }

  /**
   * getVideosByHashtag
   *
   * Returns all videos with the given hashtag
   *
   * @param string $hashtag
   * @param int $count
   * @param int $page
   *
   * TODO(notice) api endpoint broken
   */
  public function getVideosByHashtag($hashtag, $count = 30, $page = 1)
  {
    $uri = 'hashtags/' . $hashtag . '/videos';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * getPhotosByHashtag
   *
   * Returns all photos for the given hashtag
   *
   * @param string $hashtag
   * @param int $count
   * @param int $page
   *
   * TODO api endpoint broken
   */
  public function getPhotosByHashtag($hashtag, $count = 30, $page = 1)
  {
    $uri = 'hashtags/' . $hashtag . '/photos';

    $options = array(
      'per_page' => $count,
      'page' => $page
    );

    return $this->makeRequest($uri, $options);
  }

  /**
   * makeRequest
   *
   * Makes the HTTP request to littlstar api and returns a json decoded response
   * from the littlstar api
   *
   * @private
   * @param String $uri
   * @param Array $options
   */
  private function makeRequest($uri, array $options = array())
  {
    $response = false;
    $queryString = '';
    if (count($options) > 0) {
      $queryString .= '?' . http_build_query($options);
    }
    $url = self::BASE_URL . $uri . $queryString;

    $apiKey = $this->apiKey == null ? '' : $this->apiKey;
    $headers = array(
      'X-Apikey: ' . $apiKey,
      'User-Agent: littlstar-php',
      'Content-Type: application/json'
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);

    return json_decode($response);
  }

}
