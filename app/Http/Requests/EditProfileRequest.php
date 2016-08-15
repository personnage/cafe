<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditProfileRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name'               => 'required|max:255',
            'email'              => 'required|email|max:255',
            'notification_email' => 'max:255',
            'skype'              => 'max:255',
            'facebook'           => 'max:255'
        ];
    }
}
