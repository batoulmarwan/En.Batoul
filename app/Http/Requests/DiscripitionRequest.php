<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscripitionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'type_event_id' => 'required',
                'budget_id' => 'required',
                'place_id' => 'required',
                'area_id' => 'required',
                'town_id' => 'required',
                 'user_id' => 'required',
                
        ];
    }
}
