<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
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
            'name'               => 'required|min:2|max:255',
            'lastname'           => 'required|min:2|max:255',
            'image'              => 'required',
            'biography'          => 'min:10',
            'birth_date'         => 'date_format:Y-m-d',
            'death_date'         => 'date_format:Y-m-d',
            'gender'             => 'min:3|max:255',
            'type'               => 'min:3|max:255',
        ];
    }
}
