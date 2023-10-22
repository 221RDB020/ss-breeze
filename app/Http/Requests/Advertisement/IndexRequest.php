<?php

namespace App\Http\Requests\Advertisement;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => '',
            'images' => '',
            'ad_text' => '',
            'employer_status' => '',
            'likely_education' => '',
            'education_program' => '',
            'language_skills' => '',
            'working_hours' => '',
            'work_schedule' => '',
            'working_days' => '',
            'work_experience' => '',
            'age' => '',
            'price_min' => 'integer|nullable',
            'price_max' => 'integer|nullable',
            'price_order' => 'string|nullable',
            'pvn' => '',
            'deal_type' => 'integer|nullable',
            'brand' => '',
            'model' => 'string|nullable',
            'engine_capacity' => 'float|nullable',
            'engine_capacity_min' => 'float|nullable',
            'engine_capacity_max' => 'float|nullable',
            'engine_type' => 'integer|nullable',
            'car_mileage' => '',
            'car_body_type' => '',
            'year_min' => 'integer|nullable',
            'year_max' => 'integer|nullable',
            'year_order' => 'string|nullable',
            'car_gearbox' => '',
            'gear_count' => '',
            'colour' => 'string|nullable',
            'colour_metallic' => '',
            'vin' => '',
            'number_plate' => '',
            'vehicle_options' => '',
            'new_car_bought_in_latvia' => '',
            'room_count' => '',
            'area' => '',
            'building_series' => '',
            'building_type' => '',
            'castrate_number' => '',
            'floor' => '',
            'max_floor' => '',
            'elevator' => '',
            'convenience_options' => '',
            'phone' => '',
            'second_phone' => '',
            'email' => '',
            'www' => '',
            'pdf_file_id' => '',
            'location' => 'integer|nullable',
            'address' => '',
            'place_of_living' => '',
            'ending_date' => '',
            'views' => '',
            'status' => '',
            'created_at' => 'string|nullable',
        ];
    }
}
