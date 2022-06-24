<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Http\Resources\VehicleResource;

class VehicleController extends Controller
{
    public function index(){
        $vehicles = Vehicle::all();
        $vehicle_resources = [];
        foreach ($vehicles as $vehicle) {
            $vehicle_resources[] = new VehicleResource($vehicle);
        }
        dd();
        return view('admin.vehicle')->with('vehicles', $vehicle_resources);
    }
}
