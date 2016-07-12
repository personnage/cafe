<?php

namespace App\Http\Requests;

class EditPermissionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $permission = $this->route('permission');

        return [
            'name' => 'required|max:255|unique:roles,name,'.$permission->id,
            'label' => 'required|max:255|different:name',
        ];
    }
}
