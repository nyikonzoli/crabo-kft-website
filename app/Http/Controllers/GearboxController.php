<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GearboxType;
use App\Http\Requests\TypeStoreRequest;

class GearboxController extends Controller
{
    public function index(){
        return view('crabo.gearbox')->with('gearboxes', GearboxType::all());
    }

    public function store(TypeStoreRequest $request){
        $data = $request->validated();
        GearboxType::create($data);
        return redirect()->back();
    }

    public function destroy($id){
        GearboxType::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function update($id, TypeStoreRequest $request){
        $data = $request->validated();
        $type = GearboxType::findOrFail($id);
        $type->update($data);
        return redirect()->back();
    }
}
