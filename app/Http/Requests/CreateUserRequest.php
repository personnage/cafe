<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use App\Models\User;
use App\Events\User\WasCreated;

class CreateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

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
            'username' => 'required|max:255|unique:users',
        ];
    }

    /**
     * Persist the form.
     *
     * @return \App\Models\User
     */
    public function persist()
    {
        $data = array_merge($this->all(), [
            'password' => bcrypt($this->getPassword()),
            'notification_email' => $this->input('email')
        ]);

        return $this->make($data);
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

        $user->admin = !! $this->input('admin');
        $user->confirmed_at = Carbon::now();
        $user->created_by_id = auth()->id();

        $user->resetAuthenticationToken();

        $user->save();

        event(new WasCreated($user, auth()->user()));

        return $user;
    }

    /**
     * Get password for given user.
     *
     * @return string
     */
    public function getPassword()
    {
        return str_random(10);
    }
}
