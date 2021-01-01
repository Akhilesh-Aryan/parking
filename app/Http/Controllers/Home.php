<?php

namespace App\Http\Controllers;
use\App\Models\Record;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class Home extends Controller
{
    public function homepage(){
        return view('home',["data"=>Record::all()]);
    }
    public function insert(Request $req){
        $req->validate([
            'vehicle_no'=>'Required',
            'brand'=>'Required',
            'color'=>'Required',
            'amount'=>'Required',
            'status'=>'Required',
        ]);
        Record::create([
            'vehicle_no'=>$req->vehicle_no,
            'brand'=>$req->brand,
            'color'=>$req->color,
            'amount'=>$req->amount,
            'status'=>$req->status,
        ]);
        return redirect()->back();
    }
    public function delete($id){
        Record::find($id)->delete();
        return redirect()->back();
    }
    public function update($id){
        Record::find($id)->update([
                'status' => true
        ]);
        return redirect()->back();
    }
    public function updateData(Request $req){
        $req->validate([
            'vehicle_no'=>'Required',
            'brand'=>'Required',
            'color'=>'Required',
            'amount'=>'Required',
            'status'=>'Required',
        ]);
        return redirect()->back();
    }
}