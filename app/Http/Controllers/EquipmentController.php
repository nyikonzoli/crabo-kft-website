<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Http\Requests\TypeStoreRequest;

class EquipmentController extends Controller
{
    public function index(){
        return view('admin.equipment')->with('equipments', Equipment::all());
    }

    public function store(TypeStoreRequest $request){
        $data = $request->validated();
        Equipment::create($data);
        return redirect()->back();
    }

    public function destroy($id){
        Equipment::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function update($id, TypeStoreRequest $request){
        $data = $request->validated();
        $type = Equipment::findOrFail($id);
        $type->update($data);
        return redirect()->back();
    }
}
