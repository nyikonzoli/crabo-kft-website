<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FuelType;
use App\Http\Requests\TypeStoreRequest;

class FuelTypeController extends Controller
{
    public function index(){
        return view('admin.fuel')->with('fuels', FuelType::all());
    }

    public function store(TypeStoreRequest $request){
        $data = $request->validated();
        FuelType::create($data);
        return redirect()->back();
    }

    public function destroy($id){
        FuelType::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function update($id, TypeStoreRequest $request){
        $data = $request->validated();
        $type = FuelType::findOrFail($id);
        $type->update($data);
        return redirect()->back();
    }
}
