<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Events\User\WasRegistered;
use App\Jobs\SendConfirmationToEmail;

class RegisteredUserRequest extends CreateUserRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
    }

    /**
     * Create new user instance.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function make(array $data)
    {
        $user = User::create($data);
        $user->resetAuthenticationToken();
        $user->save();

        event(new WasRegistered($user));
        dispatch(new SendConfirmationToEmail($user));

        return $user;
    }

    /**
     * Get password for given user.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->input('password');
    }
}
