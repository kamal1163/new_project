<?php 

use App\Models\Post;

if (!function_exists('storePost')) {
    /**
     * Store a new post in the database.
     *
     * @param array $data
     * @return Post
     */
    function storePost(array $data)
    {
        return Post::create([
            'title' => $data['title'],
            'body' => $data['body'],
            'user_id' => auth()->id(),
        ]);
    }
}

if (!function_exists('getAuthUserName')) {
    function getAuthUserName()
    {
        return auth()->check() ? auth()->user()->name : null;
    }
}
