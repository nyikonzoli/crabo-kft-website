<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BodyworkType;
use App\Http\Requests\TypeStoreRequest;

class BodyworkController extends Controller
{
    public function index(){
        return view('admin.bodywork')->with('bodyworks', BodyworkType::all());
    }

    public function store(TypeStoreRequest $request){
        $data = $request->validated();
        BodyworkType::create($data);
        return redirect()->back();
    }

    public function destroy($id){
        BodyworkType::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function update($id, TypeStoreRequest $request){
        $data = $request->validated();
        $type = BodyworkType::findOrFail($id);
        $type->update($data);
        return redirect()->back();
    }
}
