<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFeedingTimeRequest extends FormRequest
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
            "hour" => "required|integer|min:0|max:23",
            "minute" => "required|integer|min:0|max:59",
            "weight" => "required|integer|min:1",
            "feeder_id" => "required|integer"
        ];
    }
}
