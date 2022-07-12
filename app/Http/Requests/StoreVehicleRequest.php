<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
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
            "plate" => [
                "required",
                "string",
                "min:7",
                "max:7",
            ],
            "brand" => [
                "required",
                "string",
                "min:1",
            ],
            "model" => [
                "required",
                "string",
                "min:1",
            ],
            "year" => [
                "required",
                "integer",
            ],
            "doors" => [
                "required",
                "integer",
            ],
            "seats" => [
                "required",
                "integer",
            ],
            "outer_color" => [
                "required",
                "string",
                "min:1",
            ],
            "inner_color" => [
                "required",
                "string",
                "min:1",
            ],
            "vehicle_type_id" => [
                "required",
                "integer"
            ],
            "bodywork_type_id" => [
                "required",
                "integer"
            ],
            "gearbox_type_id" => [
                "required",
                "integer"
            ],
            "fuel_type_id" => [
                "required",
                "integer"
            ],
            "description" => [
                "required",
                "nullable",
                "string",
            ],
            "motor" => [
                "required",
                "nullable",
                "string",
            ],
            "images" => [
                //"required"
            ],
            "equipments" => [
                //"required",
            ],
        ];
    }
}
