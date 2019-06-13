<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Offer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class AdminController extends Controller
{
    public function main(){
        $wallet = Admin::get();

        return view('layouts.admin', compact('wallet'));

    }

//    public function delete($id){
//        $delete = Admin::findorfail($id);
//        $delete->delete();
//        return redirect()->route('admin');
//    }

    public function post(Request $request){
        $model = new Admin();
        $model->new_wallet = $request->input('wallet');
        $model->save();
        return redirect()->route('admin');
    }

}