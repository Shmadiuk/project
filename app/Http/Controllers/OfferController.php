<?php



namespace App\Http\Controllers;

use App\Models\Offer;
use App\Http\Requests\OffersValidator;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OfferController extends Controller
{
    public function offer(){
        $offering = Offer::orderBy('created_at','desc')->get();
//        dd($offering);
        return view('offers/offers', compact('offering'));
    }
    public function add(){
        $users=User::get();


        return view('offers/offers-add',compact('users'));

    }

    public function id(){

}
    public function submit( Request $request){

        $offers = Offer::create([
            'type_object' => $request->input('type_object'),
            'price' => $request->input('price'),
            'type_price' => $request->input('type_price'),
            'type_wall' => $request->input('type_wall'),
            'number_rooms' => $request->input('number_rooms'),
            'user_id' => $request->input('user_id'),
            'phone' => $request->input('phone'),
            'information' => $request->input('information'),
            'status'=> $request->input('remember','OFF')
        ]);
        $offers -> save();
        return redirect()->route('offers');
    }
    public function edit(Offer $offer){


        return view('offers/offers-edit', compact('offer'));
    }
}