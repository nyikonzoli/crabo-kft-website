<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\FuelType;
use App\Models\BodyworkType;
use App\Models\GearboxType;
use App\Models\VehicleType;
use App\Models\CargoSpace;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $retval = [
            "id" => $this->id,
            "plate" => $this->plate,
            "year" => $this->year,
            "fuel_type" => $this->fuel,
            "doors" => $this->doors,
            "seats" => $this->seats,
            "brand" => $this->brand,
            "model" => $this->model,
            "bodywork_type" => $this->bodywork,
            "gearbox_type" => $this->gearbox,
            "outer_color" => $this->outer_color,
            "inner_color" => $this->inner_color,
            "motor" => $this->motor,
            "description" => $this->description,
            "type" => $this->type,
        ];
        if($retval["type"] == "Teherautó"){
            $cs = $this->cargoSpace;
            $retval["cargo_width"] = $cs->width;
            $retval["cargo_height"] = $cs->height;
            $retval["cargo_length"] = $cs->length;
        }
        return [
            "id" => $this->id,
            "plate" => $this->plate,
            "year" => $this->year,
            "fuel_type" => $this->fuel,
            "doors" => $this->doors,
            "seats" => $this->seats,
            "brand" => $this->brand,
            "model" => $this->model,
            "bodywork_type" => $this->bodywork,
            "gearbox_type" => $this->gearbox,
            "outer_color" => $this->outer_color,
            "inner_color" => $this->inner_color,
            "motor" => $this->motor,
            "description" => $this->description,
            "type" => $this->type,
        ];
    }
}
