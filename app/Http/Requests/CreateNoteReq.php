<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNoteReq extends FormRequest
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
            'text' => 'required|min:1',
            'passphrase' => 'required|alpha_dash|min:3',
            'time_destroy' => 'required|numeric|max:604800',
            'views_destroy' => 'required|numeric|min:1'
        ];
    }
}
