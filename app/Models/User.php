<?php

namespace App\Models;

use Carbon\Carbon;
use App\Events\User\Confirmed;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Contracts\Confirmable
{
    use SoftDeletes, Traits\UserScopes, Traits\HasRoles;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'confirmed_at',
        'current_sign_in_at',
        'deleted_at',
        'last_sign_in_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'notification_email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'api_token',
        'confirmation_token',
        'password',
        'remember_token',
    ];

    protected $casts = [
        'admin' => 'boolean',
    ];

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
     * Confirm user.
     *
     * @event \App\Events\User\WasConfirmed
     * @return bool
     */
    public function confirm()
    {
        if (! $this->isConfirmed()) {
            $this->confirmed_at = Carbon::now();

            if ($this->save()) {
                event(new Confirmed($this, auth()->user() ?? $this));

                return true;
            }
        }

        return false;
    }

    public function resetAuthenticationToken()
    {
        $this->api_token = $this->genRandomToken();

        return $this;
    }

    public function resetConfirmationToken()
    {
        $this->confirmation_token = $this->confirmation_token ?? $this->genRandomToken();

        return $this;
    }

    protected function genRandomToken()
    {
        return str_random(
            config('app.cipher') == 'AES-128-CBC' ? 16 : 32
        );
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
     * @param  \Illuminate\Database\Eloquent\Model $related
     * @return boolean
     */
    public function owns($related)
    {
        return $this->id == $related->user_id;
    }
}
