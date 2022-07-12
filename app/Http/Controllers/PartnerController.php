<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Http\Requests\StorePartnerRequest;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index(){
        $partners = Partner::all();
        return view('admin.partners')->with('partners', $partners);
    }

    public function store(StorePartnerRequest $request){
        $data = $request->validated();
        $uri = Storage::put("images/partners", $data["image"]);
        $data["uri"] = $uri;
        $partner = Partner::create($data);
        return redirect()->back();
    }

    public function destroy($id){
        Partner::findOrFail($id)->delete();
        return redirect()->back();
    }
}
