<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Any authorized user can add a comment.
     *
     * @param  App\Models\User   $user
     * @param  App\Models\Post   $post
     * @return boolean
     */
    public function commentPost(User $user, Post $post)
    {
        return true;
    }

    /**
     * Owner a post or editor can modify it.
     *
     * @param  App\Models\User   $user
     * @param  App\Models\Post   $post
     * @return boolean
     */
    public function editPost(User $user, Post $post)
    {
        return $user->owns($post) || $user->hasRole('editor');
    }
}
