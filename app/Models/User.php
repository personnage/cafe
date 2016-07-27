<?php

namespace App\Models;

use Auth;
use Carbon\Carbon;

use App\Events\Creation\UserCreated;
use App\Events\Deletion\UserDeleted;
use App\Events\Restoration\UserRestored;

use App\Events\User as Events;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Contracts\Confirmable
{
    use SoftDeletes, HasRoles, Scopes\User;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['confirmed_at', 'current_sign_in_at', 'deleted_at', 'last_sign_in_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'notification_email', 'city_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['api_token', 'confirmation_token', 'password', 'remember_token'];

    /**
     * The casts attributes.
     *
     * @var array
     */
    protected $casts = ['admin' => 'boolean'];

    /**
     * @inheritdoc
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            event(new UserCreated($user, Auth::user() ?? $user));
        });

        static::deleted(function ($user) {
            event(new UserDeleted($user, Auth::user() ?? $user));
        });

        static::restored(function ($user) {
           event(new UserRestored($user, Auth::user()));
        });
    }

    # Accessors

    /**
     * Get created_by_id attribute as User model.
     *
     * @param  int|null  $value
     * @return \App\Models\User|int|null
     */
    public function getCreatedByIdAttribute($value)
    {
        if (! is_null($value)) {
            return User::withTrashed()->whereId($value)->first() ?? $value;
        }
    }

    /**
     * Check if current user is confirmed.
     *
     * @return boolean
     */
    public function isConfirmed()
    {
        return (bool) $this->confirmed_at;
    }

    /**
     * Confirm user.
     *
     * @event \App\Events\User\WasConfirmed
     * @return bool
     */
    public function confirm()
    {
        if ($this->isConfirmed()) {
            return false;
        }

        $this->confirmed_at = Carbon::now();

        return $this->save();
    }

    public function updateSignInCount($ipAddress)
    {
        $this->last_sign_in_at = $this->current_sign_in_at ?? Carbon::now();
        $this->last_sign_in_ip = $this->current_sign_in_ip ?? $ipAddress;

        $this->current_sign_in_at = Carbon::now();
        $this->current_sign_in_ip = $ipAddress;

        return $this->save() && $this->increment('sign_in_count');
    }

    public function updateFailedAttempts()
    {
        return $this->increment('failed_attempts');
    }

    /**
     * Reset api_token.
     *
     * @return User
     */
    public function resetAuthenticationToken()
    {
        $this->api_token = $this->genRandomToken();

        return $this;
    }

    /**
     * Reset a confirmation token.
     *
     * @return User
     */
    public function resetConfirmationToken()
    {
        $this->confirmation_token = $this->confirmation_token ?? $this->genRandomToken();

        return $this;
    }

    /**
     * Generate random token.
     *
     * @return string
     */
    protected function genRandomToken()
    {
        return str_random(
            config('app.cipher') == 'AES-128-CBC' ? 16 : 32
        );
    }

    /**
     * Get the e-mail address to sent notification.
     *
     * @return string
     */
    public function getEmailForNotification()
    {
        return $this->notification_email ?? $this->email;
    }

    /**
     * Get the e-mail address where confirmation links are sent.
     *
     * @return string
     */
    public function getEmailForConfirmation()
    {
        return $this->email;
    }

    /**
     * Check related.
     *
     * @param  \Illuminate\Database\Eloquent\Model $related
     * @return boolean
     */
    public function owns($related)
    {
        return $this->id == $related->user_id;
    }
}
