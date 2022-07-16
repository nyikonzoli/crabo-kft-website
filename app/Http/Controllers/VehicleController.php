<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleType;
use App\Models\FuelType;
use App\Models\GearboxType;
use App\Models\BodyworkType;
use App\Models\Equipment;
use App\Models\Image;
use App\Models\EquipmentnVehicle;
use App\Http\Resources\VehicleResource;
use App\Http\Requests\StoreVehicleRequest;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    public function index(Request $request){
        $query = $request->query("type", "all");
        $vehicles = [];
        if($query == "all"){
            $vehicles = Vehicle::all();
        }
        else{
            $vehicles_all = Vehicle::all();
            foreach ($vehicles_all as $vehicle) {
                if($vehicle->vehicle_type_id == $query){
                    $vehicles[] = $vehicle; 
                }
            }
        }
        $vehicle_resources = [];
        for ($i=0; $i < count($vehicles); $i++) { 
            $vehicle_resources[$i] = [
                "id" => $vehicles[$i]->id,
                "plate" => $vehicles[$i]->plate,
                "year" => $vehicles[$i]->year,
                "fuel_type" => $vehicles[$i]->fuel->type,
                "doors" => $vehicles[$i]->doors,
                "seats" => $vehicles[$i]->seats,
                "brand" => $vehicles[$i]->brand,
                "model" => $vehicles[$i]->model,
                "bodywork_type" => $vehicles[$i]->bodywork->type,
                "gearbox_type" => $vehicles[$i]->gearbox->type,
                "outer_color" => $vehicles[$i]->outer_color,
                "inner_color" => $vehicles[$i]->inner_color,
                "motor" => $vehicles[$i]->motor,
                "description" => $vehicles[$i]->description,
                "type" => VehicleType::where("id", "=", $vehicles[$i]->vehicle_type_id)->first()->type, 
            ];
            if($vehicle_resources[$i]["type"] == "Teherautó"){
                $cs = $vehicles[$i]->cargoSpace;
                $vehicle_resources[$i]["cargo_width"] = $cs->width;
                $vehicle_resources[$i]["cargo_height"] = $cs->height;
                $vehicle_resources[$i]["cargo_length"] = $cs->length;
            }
        }
        $vehicle_types = [];
        foreach (VehicleType::all() as $type) {
            $vehicle_types[$type->id] = $type->type;
        }
        $fuel_types = [];
        foreach (FuelType::all() as $type) {
            $fuel_types[$type->id] = $type->type;
        }
        $bodywork_types = [];
        foreach (BodyworkType::all() as $type) {
            $bodywork_types[$type->id] = $type->type;
        }
        $gearbox_types = [];
        foreach (GearboxType::all() as $type) {
            $gearbox_types[$type->id] = $type->type;
        }
        $equipments = [];
        foreach (Equipment::all() as $type) {
            $equipments[$type->id] = $type->type;
        }
        return view('admin.vehicles')->
                with('vehicles', $vehicle_resources)->
                with('vehicleTypes', $vehicle_types)->
                with('fuelTypes', $fuel_types)->
                with('bodyworkTypes', $bodywork_types)->
                with('gearboxTypes', $gearbox_types)->
                with('equipments', $equipments);
    }

    public function store(StoreVehicleRequest $request){
        $data = $request->validated();
        $data["plate"] = strtoupper($data["plate"]);
        $vehicle = Vehicle::create($data);
        $vehicle->equipments()->attach(array_keys($request->equipments));
        if(count($data["images"]) > 0){
            foreach ($data["images"] as $image) {
                $uri = Storage::put("vehicles" . $data["plate"], $image);
                Image::create([
                    "vehicle_id" => $vehicle->id,
                    "uri" => $uri,
                ]);
            }
        }
        return redirect()->back();
    }

    public function destroy($id){
        Vehicle::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function show($id){
        $vehicle = Vehicle::findOrFail($id);
        $vehicle_types = [];
        foreach (VehicleType::all() as $type) {
            $vehicle_types[$type->id] = $type->type;
        }
        $fuel_types = [];
        foreach (FuelType::all() as $type) {
            $fuel_types[$type->id] = $type->type;
        }
        $bodywork_types = [];
        foreach (BodyworkType::all() as $type) {
            $bodywork_types[$type->id] = $type->type;
        }
        $gearbox_types = [];
        foreach (GearboxType::all() as $type) {
            $gearbox_types[$type->id] = $type->type;
        }
        $equipments = [];
        foreach (Equipment::all() as $type) {
            $equipments[$type->id] = $type->type;
        }
        $vehicle_equipments = EquipmentnVehicle::where("vehicle_id", "=", $id)->get();
        return view('admin.vehicle')->
            with('vehicle', $vehicle)->
            with('vehicleTypes', $vehicle_types)->
            with('fuelTypes', $fuel_types)->
            with('bodyworkTypes', $bodywork_types)->
            with('gearboxTypes', $gearbox_types)->
            with('equipments', $equipments)->
            with('equipment_vehicle', $vehicle_equipments);
    }
}
