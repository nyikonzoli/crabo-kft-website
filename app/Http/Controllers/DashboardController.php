<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\BodyworkType;
use App\Models\FuelType;
use App\Models\GearboxType;
use App\Models\VehicleType;
use App\Models\Equipment;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            "vehicles" => count(Vehicle::all()),
            "passengerCars" => count(VehicleType::where('type', '=', 'Személyautó')->first()->vehicles),
            "electricCars" => count(VehicleType::where('type', '=', 'Elektromos autó')->first()->vehicles),
            "trucks" => count(VehicleType::where('type', '=', 'Teherautó')->first()->vehicles),
            "vans" => count(VehicleType::where('type', '=', 'Furgon')->first()->vehicles),
            "bodyworks" => count(BodyworkType::all()),
            "fuels" => count(FuelType::all()),
            "gearboxes" => count(GearboxType::all()),
            "equipments" => count(Equipment::all()),
        ];
        return view('admin.index')->with("data", $data);
    }
}
