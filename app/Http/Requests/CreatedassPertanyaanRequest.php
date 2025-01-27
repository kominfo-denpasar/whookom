<?php

namespace App\Http\Requests;

use App\Models\dassPertanyaan;
use Illuminate\Foundation\Http\FormRequest;

class CreatedassPertanyaanRequest extends FormRequest
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
        return dassPertanyaan::$rules;
    }
}
