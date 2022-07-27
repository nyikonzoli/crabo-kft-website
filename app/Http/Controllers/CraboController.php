<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleType;
use App\Models\Vehicle;
use App\Models\Partner;
use App\Http\Requests\SendEmailRequest;

class CraboController extends Controller
{
    public function index(){
        return view('crabo.index');
    }

    public function passengerCars(){
        $vehicles = VehicleType::where('type', '=', 'Személyautó')->first()->vehicles;
        return view('crabo.vehicles')->
                with('title', 'Személyautók')->
                with('vehicles', $vehicles);
    }

    public function electricCars(){
        $vehicles = VehicleType::where('type', '=', 'Elektromos autó')->first()->vehicles;
        return view('crabo.vehicles')->
                with('title', 'Elektromos autók')->
                with('vehicles', $vehicles);
    }

    public function trucks(){
        $vehicles = VehicleType::where('type', '=', 'Teherautó')->first()->vehicles;
        return view('crabo.vehicles')->
                with('title', 'Teherautók')->
                with('vehicles', $vehicles);
    }

    public function vans(){
        $vehicles = VehicleType::where('type', '=', 'Furgon')->first()->vehicles;
        return view('crabo.vehicles')->
                with('title', 'Furgonok')->
                with('vehicles', $vehicles);
    }

    public function vehicle($id){
        $vehicle = Vehicle::findOrFail($id);
        return view('crabo.vehicle')->with('vehicle', $vehicle);
    }

    public function offer(){
        $vehicles = [];
        foreach (Vehicle::all() as $vehicle) {
            $vehicles[$vehicle->id] = $vehicle->brand . " " . $vehicle->model . " (" . $vehicle->plate . ")";
        }
        return view('crabo.offer')->with('vehicles', $vehicles);
    }

    public function email(SendEmailRequest $request){
        $data = $request->validated();
        dd($data);
    }

    public function partner(){
        $partners = Partner::all();
        return view('crabo.partners')->with('partners', $partners);
    }

    public function contact(){
        return view('crabo.contact');
    }

    public function rules(){
        return view('crabo.rules');
    }
}
