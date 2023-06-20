<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuseumRequest extends FormRequest
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
            "name" => "required|min:3|max:50",
            "address" => "required|min:3|max:50",
            "latitude" => "required|min:3|max:255",
            "longitude" => "required|min:3|max:255",
        ];
    }

    public function messages()
    {
        return[
            "name.required" => "Il titolo è obbligatorio",
            "name.min" => "Il titolo deve avere almeno :min caratteri",
            "name.max" => "Il titolo può avere :max caratteri",

            "address.required" => "L'indirizzo é un campo obbligatorio",
            "address.min" => "Il campo indirizzo deve avere almeno :min caratteri",
            "address.max" => "Il campo indirizzo può avere :max caratteri",

            "latitude.required" => "Latitudine é un campo obbligatorio",
            "latitude.min" => "Il campo latitudine deve avere almeno :min caratteri",
            "latitude.max" => "Il campo latitudine può avere :max caratteri",

            "longitude.required" => "Longitudine é un campo obbligatorio",
            "longitude.min" => "Il campo Longitudine deve avere almeno :min caratteri",
            "longitude.max" => "Il campo Longitudine può avere :max caratteri",
        ];
    }
}
