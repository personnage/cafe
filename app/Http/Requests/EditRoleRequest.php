<?php

namespace App\Http\Requests;

class EditRoleRequest extends Request
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
        $role = $this->route('role');

        return [
            'name' => 'required|max:255|unique:roles,name,'.$role->id,
            'label' => 'required|max:255|different:name',
        ];
    }
}
