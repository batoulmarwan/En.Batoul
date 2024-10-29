<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'type_event_id'=>'required',
            'town_id'=>'required',
            'area_id'=>'required',
            'budget_id'=>'required',
            'place_id'=>'required',
            'music_id'=>'required',
            'singe_id'=>'required',
            'more_id'=>'required',
            'main_meal_id'=>'required',
            'sweate_type_id'=>'required',
            'main_cake_id'=>'required',
            'chair_number_id'=>'required',
            'table_number_id'=>'required',
            'theme_id'=>'required',
            'lighting_id'=>'required',
            'themecolor_id'=>'required',
        ];
    }
}
