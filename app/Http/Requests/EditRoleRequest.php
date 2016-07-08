<?php

namespace App\Http\Requests;

use Validator;
use App\Models\Role;

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
        return [
            'name' => 'required|max:255',
            'label' => 'required|max:255|different:name',
        ];
    }

    public function persist(Role $role)
    {
        if ($role->name !== $this->input('name')) {
            $validator = Validator::make($this->only('name'), [
                'name' => 'unique:roles',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        }

        // event !

        return $role->fill($this->all())->save();
    }
}
