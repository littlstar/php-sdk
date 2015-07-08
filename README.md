#Littlstar PHP SDK
This SDK is a PHP wrapper class around the Littlstar api (http://developer.littlstar.com/docs/), and allows you to access all our content with convenient methods.

##Example
```php
<?php

require_once('littlstar.php');

$apiKey = 'your-api-key';

$ls = new Littlstar($apiKey);

$videos = $ls->getVideos();
```

##Methods Implemented

####search
Search Littlstar for photos, videos, users, or everything.  
```endpoint``` [all|users|photos|videos]  
```query``` the search term  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
search($type, $query, $count = 30, $page = 1)
```

####getUser
Get a user by id or slug.  
```userId``` The user's unique id or slug  
```php
getUser(userId)
```

####getUserVideos
Get a user's videos.  
```userId``` the user's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getUserVideos($userId, $count = 30, $page = 1)
```

####getUserPhotos
Get a user's photos.  
```userId``` the user's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getUserPhotos($userId, $count = 30, $page = 1)
```

####getUserChannels
Get a user's channels.  
```userId``` the user's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getUserChannels($userId, $count = 30, $page = 1)
```

####getUserFollowers
Get a user's followers.  
```userId``` the user's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getUserFollowers($userId, $count = 30, $page = 1)
```

####getUserFollowing
Get the users someone is following.  
```userId``` the user's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getUserFollowing($userId, $count = 30, $page = 1)

```
####getVideos
Get all videos.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getVideos($count = 30, $page = 1)
```

####getSponsoredVideos
Get all sponsored videos.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getSponsoredVideos($count = 30, $page = 1)
```
####getFeaturedVideos
Get all featured videos.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getFeaturedVideos($count = 30, $page = 1)
```

####getLatestVideos
Get all videos sorted by recently added.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getLatestVideos($count = 30, $page = 1)
```

####getVRVideos
Get all videos that have been marked as VR optimized.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getVRVideos($count = 30, $page = 1)
```

####getVideo
Get a video by its unique id or slug.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getVideo($videoId)
```

####getVideoComments
Get a video's comments.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getVideoComments($videoId, $count = 30, $page = 1)
```

####getPhotos
Get all photos.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getPhotos($count = 30, $page = 1)
```

####getFeaturedPhotos
Get all featured photos.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getFeaturedPhotos($count = 30, $page = 1)
```

####getLatestPhotos
Get all photos sorted by recently added.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getLatestPhotos($count = 30, $page = 1)
```

####getVRPhotos
Get all photos marked as VR optimized.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getVRPhotos($count = 30, $page = 1)
```

####getPhoto
Get a photo by its unique id or slug.  
```videoId``` max # of results to show (default: 30)  
```php
getPhoto($videoId)
```

####getPhotoComments
Get a photo's comments.  
```photoId``` the photo's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getPhotoComments($videoId)
```

####getCategories
Get all categories.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getCategories($count = 30, $page = 1)
```

####getCategoryInfo
Get the metadata for a category.  
```categoryId``` the category's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getCategoryInfo($categoryId, $count = 30, $page = 1)
```

####getVideosByCategory
Get all videos in a category.  
```categoryId``` the category's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getVideosByCategory($categoryId, $count = 30, $page = 1)
```

####getPhotosByCategory
Get all photos in a category.  
```categoryId``` the category's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getPhotosByCategory($categoryId, $count = 30, $page = 1)
```

####getChannels
Get all Littlstar channels.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getChannels($count = 30, $page = 1)
```

####getChannel
Get a channel by its unique id or slug.  
```channelId``` the channel's unique id or slug
```php
getChannel($channelId)
```

####getChannelVideos
Get all videos in a channel.  
```channelId``` the channel's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getChannelVideos($channelId, $count = 30, $page = 1)
```

####getChannelPhotos
Get all photos in a channel.  
```channelId``` the channel's unique id or slug  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getChannelPhotos($channelId, $count = 30, $page = 1)
```

####getHashtags
Get all hashtags.  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getHashtags($count = 30, $page = 1)
```

####getHashtagInfo
Get the metadata information about a hashtag.  
```hashtag``` the hashtag to search for  
```php
getHashtagInfo($hashtag)
```

####getVideosByHashtag
Get all the videos associated with a specific hashtag.  
```hashtag``` the hashtag to search for  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getVideosByHashtag($hashtag, $count = 30, $page = 1)
```

####getPhotosByHashtag
```hashtag``` the hashtag to search for  
```count``` max # of results to show (default: 30)  
```page``` paginated results (default: 1)  
```php
getPhotosByHashtag($hashtag, $count = 30, $page = 1)
```
