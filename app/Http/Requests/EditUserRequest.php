<?php

namespace App\Http\Requests;

use Validator;
use App\Models\User;
use App\Events\User\WasChanged;

class EditUserRequest extends Request
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
            'email' => 'required|email|max:255',
            'username' => 'required|max:255',
            'password' => 'min:6|confirmed',
        ];
    }

    public function persist(User $user)
    {
        $rules = [];

        if ($user->username !== $this->input('username')) {
            $rules += ['username' => 'unique:users'];
        }

        if ($user->email !== $this->input('email')) {
            $rules += ['email' => 'unique:users'];
        }

        if ($rules) {
            $validator = Validator::make($this->all(), $rules);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        }

        // The administrator cannot absolve themselves of responsibility.
        if (auth()->id() !== $user->id) {
            $user->admin = !! $this->input('admin');
        }

        if (strlen($this->input('password')) > 1) {
            $user->password = bcrypt($this->input('password'));
        }

        if ($user->fill($this->except('password'))->save()) {
            event(new WasChanged($user, auth()->user()));

            return true;
        }

        return false;
    }
}
