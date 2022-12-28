<?php

namespace App\Http\Requests;

use App;
use Illuminate\Foundation\Http\FormRequest;

class BriefRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullname' => 'required|max:50|min:3|string',
            'phone_number' => 'required|digits_between:4,15|numeric',
            'detail' => 'required|max:10000|string'
        ];
    }
}
